<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MachForm Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, nofollow" />
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />   
    
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="css/ie7.css" media="screen" />
<![endif]-->
	
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" />
<![endif]-->

<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie9.css" media="screen" />
<![endif]-->

<link href="css/theme.css" rel="stylesheet" type="text/css" />
<?php
	if(!empty($mf_settings['admin_theme'])){
		echo '<link href="css/themes/theme_'.$mf_settings['admin_theme'].'.css" rel="stylesheet" type="text/css" />';
	}
?>
<link href="css/bb_buttons.css" rel="stylesheet" type="text/css" />
<?php if(!empty($header_data)){ echo $header_data; } ?>
<link href="css/override.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="bg">

<div id="container">

	<div id="header">
	<?php
		if(!empty($mf_settings['admin_image_url'])){
			$machform_logo_main = $mf_settings['admin_image_url'];
		}else{
			if(!empty($mf_settings['admin_theme'])){
				$machform_logo_main = 'images/machform_logo_'.$mf_settings['admin_theme'].'.png';
			}else{
				$machform_logo_main = 'images/machform_logo.png';
			}
		}
	?>
		<div id="logo">
			<img class="title" src="<?php echo $machform_logo_main; ?>" style="margin-left: 8px" alt="MachForm" />
		</div>	

		
		<div class="clear"></div>
		
	</div><!-- /#header -->
	<div id="main">
	
		<div id="navigation">
		
			<ul id="nav">
           		<li class="page_item nav_manage_forms <?php if($current_nav_tab == 'manage_forms'){ echo 'current_page_item'; } ?>"><a href="manage_forms.php"> Manage Forms</a></li>
				
				<?php if(!empty($_SESSION['mf_user_privileges']['priv_new_themes'])){ ?>
				<li class="page_item nav_change_themes <?php if($current_nav_tab == 'edit_theme'){ echo 'current_page_item'; } ?>"><a id="nav_change_themes" href="edit_theme.php" title="Edit Themes">Edit Themes</a></li>
				<?php } ?>

				<?php if(!empty($_SESSION['mf_user_privileges']['priv_administer'])){ ?>
				<li class="page_item nav_users <?php if($current_nav_tab == 'users'){ echo 'current_page_item'; } ?>"><a id="nav_users" href="manage_users.php" title="Users">Users</a></li>
				<li class="page_item nav_settings <?php if($current_nav_tab == 'main_settings'){ echo 'current_page_item'; } ?>"><a id="nav_settings" href="main_settings.php" title="Settings">Settings</a></li>
				<?php } ?>
				
				<li class="page_item nav_my_account <?php if($current_nav_tab == 'my_account'){ echo 'current_page_item'; } ?>"><a id="nav_my_account" href="my_account.php" title="My Account">My Account</a></li>
				
				<li class="page_item nav_logout"><span id="unregisted_holder"></span><a id="nav_logout" href="logout.php" title="Sign Out">Sign Out</a></li>
            </ul>
			
			<div class="clear"></div>
			
		
		</div><!-- /#navigation -->