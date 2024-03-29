
<?php
/********************************************************************************
 MachForm
  
 Copyright 2007-2012 Appnitro Software. This code cannot be redistributed without
 permission from http://www.appnitro.com/
 
 More info at: http://www.appnitro.com/
 ********************************************************************************/
	//yc 验证用户是否登录
	if (empty($_COOKIE['uid'])) {
	echo "<script>location.href='/wap/index.php?m=register&point=%C7%EB%CF%C8%C8%CF%D6%A4';</script>";
	}
	
// 	if (empty($_COOKIE['diaocha_url'])) {
// 		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
// 		echo $url;
// 		die();
// 	}
	//yc 每次单个题目提交之后，将下一个题目的url写入cookie
	$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
	$url = basename($url);
	setcookie("diaocha_url", $url, time()+3600,"/");

	require('includes/init.php');

	header("p3p: CP=\"IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT\"");
	
	require('config.php');
	require('includes/language.php');
	require('includes/db-core.php');
	require('includes/common-validator.php');
	require('includes/view-functions.php');
	require('includes/post-functions.php');
	require('includes/filter-functions.php');
	require('includes/entry-functions.php');
	require('includes/helper-functions.php');
	require('includes/theme-functions.php');
	require('lib/swift-mailer/swift_required.php');
	require('lib/recaptchalib.php');
	require('lib/php-captcha/php-captcha.inc.php');
	require('lib/text-captcha.php');
	require('hooks/custom_hooks.php');
		
	$dbh 		= mf_connect_db();
	$ssl_suffix = mf_get_ssl_suffix();

	if(mf_is_form_submitted()){ //if form submitted
		$input_array   = mf_sanitize($_POST);
		$submit_result = mf_process_form($dbh,$input_array);
		
		if(!isset($input_array['password'])){ //if normal form submitted
			//写入积分开始 yc
			
			include '../data/db.config.php';
			$con_jifen = mysql_connect($db_config['dbhost'],$db_config['dbuser'],$db_config['dbpass']);
			mysql_query("SET NAMES 'GBK'"); 
			if (!$con_jifen)
			  {
			  die('Could not connect: ' . mysql_error());
			  }			
			mysql_select_db($db_config['dbname'], $con_jifen);
			$sql_jifen = "update useraccounts set integral=integral+10 where userid='".$_COOKIE['userid']."'";
			mysql_query($sql_jifen,$con_jifen);
			$sql_log="INSERT INTO userlog (userid,integral,dintegral,action,rectime)
					VALUES ('".$_COOKIE['userid']."',0,10,'gongyimzhi','now()')";
			
			mysql_query($sql_log,$con_jifen);
			mysql_close($con_jifen);
			//die("====");
			
			//积分写入结束
			if($submit_result['status'] === true){
				if(!empty($submit_result['form_resume_url'])){ //the user saving a form, display success page with the resume URL
					$_SESSION['mf_form_resume_url'][$input_array['form_id']] = $submit_result['form_resume_url'];
					
					header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id={$input_array['form_id']}&done=1");
					exit;
				}else if($submit_result['logic_page_enable'] === true){ //the page has skip logic enable and a custom destination page has been set
					$target_page_id = $submit_result['target_page_id'];

					if(is_numeric($target_page_id)){
						header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id={$input_array['form_id']}&mf_page={$target_page_id}");
						exit;
					}else if($target_page_id == 'payment'){
						//redirect to payment page, based on selected merchant
						$form_properties = mf_get_form_properties($dbh,$input_array['form_id'],array('payment_merchant_type'));

						if($form_properties['payment_merchant_type'] == 'stripe'){
							//allow access to payment page
							$_SESSION['mf_form_payment_access'][$input_array['form_id']] = true;
							$_SESSION['mf_payment_record_id'][$input_array['form_id']] = $submit_result['entry_id'];

							header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].mf_get_dirname($_SERVER['PHP_SELF'])."/payment.php?id={$input_array['form_id']}");
							exit;
						}else if($form_properties['payment_merchant_type'] == 'paypal_standard'){
							echo "<script type=\"text/javascript\">top.location.replace('{$submit_result['form_redirect']}')</script>";
							exit;
						}
					}else if($target_page_id == 'review'){
						if(!empty($submit_result['origin_page_number'])){
							$page_num_params = '&mf_page_from='.$submit_result['origin_page_number'];
						}

						$_SESSION['review_id'] = $submit_result['review_id'];
						header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].mf_get_dirname($_SERVER['PHP_SELF'])."/confirm.php?id={$input_array['form_id']}{$page_num_params}");
						exit;
					}else if($target_page_id == 'success'){
						//redirect to success page
						if(empty($submit_result['form_redirect'])){		
							header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id={$input_array['form_id']}&done=1");
							exit;
						}else{
							echo "<script type=\"text/javascript\">top.location.replace('{$submit_result['form_redirect']}')</script>";
							exit;
						}
					}

				}else if(!empty($submit_result['review_id'])){ //redirect to review page
					
					if(!empty($submit_result['origin_page_number'])){
						$page_num_params = '&mf_page_from='.$submit_result['origin_page_number'];
					}
					
					$_SESSION['review_id'] = $submit_result['review_id'];
					header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].mf_get_dirname($_SERVER['PHP_SELF'])."/confirm.php?id={$input_array['form_id']}{$page_num_params}");
					exit;
				}else{
					if(!empty($submit_result['next_page_number'])){ //redirect to the next page number
						$_SESSION['mf_form_access'][$input_array['form_id']][$submit_result['next_page_number']] = true;
													
						header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id={$input_array['form_id']}&mf_page={$submit_result['next_page_number']}");
						exit;
					}else{ //otherwise display success message or redirect to the custom redirect URL or payment page
						
						if(mf_is_payment_has_value($dbh,$input_array['form_id'],$submit_result['entry_id'])){
							//redirect to credit card payment page, if the merchant is being enabled and the amount is not zero

							//allow access to payment page
							$_SESSION['mf_form_payment_access'][$input_array['form_id']] = true;
							$_SESSION['mf_payment_record_id'][$input_array['form_id']] = $submit_result['entry_id'];

							header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].mf_get_dirname($_SERVER['PHP_SELF'])."/payment.php?id={$input_array['form_id']}");
							exit;
						}else{
							//redirect to success page
							if(empty($submit_result['form_redirect'])){		
								header("Location: http{$ssl_suffix}://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id={$input_array['form_id']}&done=1");
								exit;
							}else{
								echo "<script type=\"text/javascript\">top.location.replace('{$submit_result['form_redirect']}')</script>";
								exit;
							}
						}
					}
				}
			}else if($submit_result['status'] === false){ //there are errors, display the form again with the errors
				$old_values 	= $submit_result['old_values'];
				$custom_error 	= @$submit_result['custom_error'];
				$error_elements = $submit_result['error_elements'];
				
				$form_params = array();
				$form_params['page_number'] = $input_array['page_number'];
				$form_params['populated_values'] = $old_values;
				$form_params['error_elements'] = $error_elements;
				$form_params['custom_error'] = $custom_error;
				
				$markup = mf_display_form($dbh,$input_array['form_id'],$form_params);
			}
		}else{ //if password form submitted
			
			if($submit_result['status'] === true){ //on success, display the form
				$markup = mf_display_form($dbh,$input_array['form_id']);
			}else{
				$custom_error = $submit_result['custom_error']; //error, display the pasword form again
				
				$form_params = array();
				$form_params['custom_error'] = $custom_error;
 				$markup = mf_display_form($dbh,$input_array['form_id'],$form_params);
			}
		}
	}else{
		$form_id 		= (int) trim($_GET['id']);
		$page_number	= (int) trim($_GET['mf_page']);
		
		$page_number 	= mf_verify_page_access($form_id,$page_number);
		
		$resume_key		= trim($_GET['mf_resume']);
		if(!empty($resume_key)){
			$_SESSION['mf_form_resume_key'][$form_id] = $resume_key;
		}
		
		if(!empty($_GET['done']) && (!empty($_SESSION['mf_form_completed'][$form_id]) || !empty($_SESSION['mf_form_resume_url'][$form_id]))){
			$markup = mf_display_success($dbh,$form_id);
		}else{
			$form_params = array();
			$form_params['page_number'] = $page_number;
			$markup = mf_display_form($dbh,$form_id,$form_params);
		}
	}
	
	header("Content-Type: text/html; charset=UTF-8");
	echo $markup;
	
?>
<script type="text/javascript" >
//alert(document.getElementById("jifen").innerHTML);
</script>