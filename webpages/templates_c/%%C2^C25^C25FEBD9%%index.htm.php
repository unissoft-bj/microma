<?php /* Smarty version 2.6.26, created on 2014-09-10 10:44:05
         compiled from default/index/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/index/index.htm', 67, false),array('function', 'furl', 'default/index/index.htm', 131, false),array('modifier', 'mb_substr', 'default/index/index.htm', 289, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
">
<META name="description" content="<?php echo $this->_tpl_vars['description']; ?>
">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/css.css" type="text/css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['style']; ?>
/style/yun_index.css" type="text/css">
<!--[if IE 6]>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/png.js"></script>
<script>
DD_belatedPNG.fix('.png,.index_logoin,.index_logoin_current,.nav_list,.fairs_Status,.fairs_Status,.logoin_qybj,.logoin_grbj,.logoin_Shadow_right,.logoin_Shadow_left,.whitebg,.micro_resume_fast,.nav_list_hover a,#bg,.left_comapply_cont li,.icon2,.nav_list .nav_list_hover em,.Fast_right_icon_l,.Fast_right_icon_r,.index_logoin_after,.logoin_after em,.logoin_after_su2,.logoin_after_su1,.hbg,.pagination li a,.firm_post_list,.Auction_tit,.yun_title,.Recommended_tit,.Com_Search_Results_r ul .All_post_h1_act,.sButtonBlock a.closeButton,.Comment_list_top,.icon,.yun_wap_m_bg,.micro_box,.fast_issuance');
</script>
<![endif]-->
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/lazyload.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/public.js" language="javascript"></script>
<script>var integral_pricename='<?php echo $this->_tpl_vars['config']['integral_pricename']; ?>
';var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"; </script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/reg_ajax.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/index.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/jcarousellite.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/search.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/slides.jquery.js" type="text/javascript"></script>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
$(function(){
	$("#slides").slides({
		preload: true,
		preloadImage: '<?php echo $this->_tpl_vars['style']; ?>
/images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true
	});
});
</script>
<div class="yun_content">
<div class="index_logoin_box">
<div id="index_logoin">
<div class="index_logoin">
  <input type="hidden" value="index" name="path" id="path">
  <input type="hidden" value="1" name="usertype" id="usertype">
  <ul class="index_logoin_h1">
    <li id="usertype1">个人登录</li>
    <li id="usertype2" class="index_logoin_current1">企业登录</li>
  </ul>
  <ul class="index_logoin_cont">
    <li class="index_logoin_re"><span>用户名</span>
      <input type="text" id="username" name="username" placeholder="用户名" class="index_logoin_inp" value="<?php echo $this->_tpl_vars['cookie']['loginname']; ?>
">
      <div class="index_logoin_msg" id="show_name" style="display:none">
	  <div class="index_logoin_msg_tx">请填写用户名</div>
	  <div class="index_logoin_msg_icon"></div>
	  </div>
    </li>
    <li  class="index_logoin_re_m"><span>密&nbsp; 码</span>
      <input type="password" placeholder="请输入您的密码" class="index_logoin_inp" name="password" value="" id="password">
       <div class="index_logoin_msg" style="display:none" id="show_pass">
	   <div class="index_logoin_msg_tx">请填写密码</div>
	   <div class="index_logoin_msg_icon"></div>
	   </div>
    </li>
    <li><span>&nbsp;</span>
      <input type="checkbox" class="index_logoin_check" value="1" name="loginname">
      <em>记住登录状态</em><a href="<?php echo smarty_function_url(array('m' => 'forgetpw'), $this);?>
">忘记密码?</a></li>
    <li class="">
      <input type="button" class="index_logoin_submit" onclick="check_login();" value="">
      <a id="reg_url_1" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
" class="index_logoin_submit2"></a><a id="reg_url_2" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:2"), $this);?>
" class="index_logoin_submit2" style="display:none"></a></li>
   <li class="index_logoin_Coop">
	<?php if ($this->_tpl_vars['config']['sy_qqlogin'] == '1' || $this->_tpl_vars['config']['sy_sinalogin'] == '1'): ?><em>合作网站登录：</em><?php endif; ?>
	<?php if ($this->_tpl_vars['config']['sy_qqlogin'] == '1'): ?>
	<img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_qq.png" class="png"><a href="<?php echo smarty_function_url(array('m' => 'qqconnect','url' => "c:qqlogin"), $this);?>
">QQ登录</a>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['config']['sy_qqlogin'] == '1'): ?>
	<img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_sina.png" class="png"><a href="<?php echo smarty_function_url(array('m' => 'sinaconnect'), $this);?>
">新浪微博</a>
	<?php endif; ?>
	</li>
  </ul>
</div>
<script>
$(document).ready(function(){
	$.post("index.php?m=includejs&c=DefaultLoginIndex",{},function(data){
		$("#index_logoin").html(data);
	});
});
function selects(id,type,name){
	$("#job_"+type).hide();
	$("#"+type).val(name);
	$("#"+type+"id").val(id);
}
</script>
</div></div>
	<div class="cont_Projector">
		<div class="Projector">
			<div class="Projector_img">
			<div id="slides" class="s_lb">
				<div class="slides_container">
					<?php $_from = $this->_tpl_vars['lunbo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['lunbo']):
?>
					<div class="slide"><a href="<?php echo $this->_tpl_vars['lunbo']['src']; ?>
"><img src="<?php echo $this->_tpl_vars['lunbo']['pic']; ?>
"/></a></div>
					<?php endforeach; endif; unset($_from); ?>
				</div>
			</div>
		   </div>
		   <div class="yun_Announcement">
		   <ul>
			<?php $_from = $this->_tpl_vars['gonggao']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gonggao']):
?>
				<li><a href="<?php echo $this->_tpl_vars['gonggao']['url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['gonggao']['title_n']; ?>
"><?php echo $this->_tpl_vars['gonggao']['title_n']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
			</div>
			<script>marquee("2000",".yun_Announcement ul");</script>
		</div>
         <div class="yun_Announcement_bot"></div>
    </div>
	<div class="yuin_index_r">
        <div class="yuin_index_r_f">
        <div class="yuin_index_r_h1">快捷通道</div>
        <div class="yun_in_list">
       
       
 <a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
" class="index_yun_span"> <img  src="<?php echo $this->_tpl_vars['style']; ?>
/images/icon1.gif" > </a>
       <div class="yun_i_td"> <a href="<?php echo smarty_function_url(array('m' => 'com'), $this);?>
">我要求职 </a></div>
      
         </div>
       <div class="yun_in_list">
      

       
	<a href="<?php echo smarty_function_furl(array(), $this);?>
" class="index_yun_span"><img  src="<?php echo $this->_tpl_vars['style']; ?>
/images/icon2.gif" > </a>
        <div class="yun_i_td">	<a href="<?php echo smarty_function_furl(array(), $this);?>
">朋友圈 </a> </div>
       </div>
       <div class="yun_in_list">
     
      <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask" class="index_yun_span"><img  src="<?php echo $this->_tpl_vars['style']; ?>
/images/icon3.gif"></a>
          <div class="yun_i_td">     <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/ask">你问我答</a></div>
         </a>
        </div>
            <div class="yun_in_list">
 
 <a href="<?php echo smarty_function_url(array('m' => 'once'), $this);?>
" class="index_yun_span"><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/icon4.gif"></a>
          <div class="yun_i_td"> <a href="<?php echo smarty_function_url(array('m' => 'once'), $this);?>
">微招聘</a></div>
        </a>
        </div>
           <div class="yun_in_list">
   
     <a href="<?php echo smarty_function_url(array('m' => 'tiny'), $this);?>
" class="index_yun_span"><img  src="<?php echo $this->_tpl_vars['style']; ?>
/images/icon5.gif"></a>
          <div class="yun_i_td">   <a href="<?php echo smarty_function_url(array('m' => 'tiny'), $this);?>
">微简历</a></div>
        </a>
        </div>
         <div class="yun_in_list">
       
 <a href="<?php echo smarty_function_url(array('url' => "c:top"), $this);?>
" class="index_yun_span"> <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/icon6.gif"></a>
         <div class="yun_i_td"> <a href="<?php echo smarty_function_url(array('url' => "c:top"), $this);?>
">排行榜</a></div>
        </a>
        </div>
        </div>
         <div class="yuin_index_r_b">
             <a href="<?php echo smarty_function_url(array('m' => 'map'), $this);?>
" title="地图找工作">
                <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/job.gif" width="223" height="55">
             </a>
         </div>
         </div>
    <div class="clear"></div>
  <div class="plate">
    <div class="leftNav">
      <div id="menuLst" class="menuLst">
        <ul>
          <?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
          <?php if ($this->_tpl_vars['j'] < 16): ?>
          <li class="lst<?php echo $this->_tpl_vars['j']; ?>
 "onmouseover="show_job(<?php echo $this->_tpl_vars['j']; ?>
,'1');" onmouseout="hide_job(<?php echo $this->_tpl_vars['j']; ?>
);"><b></b><a class="link" href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:search,job1:".($this->_tpl_vars['v'])), $this);?>
" title="<?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</a><i></i></li>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
      <div class="leftNav_bot icon2"></div>
    </div>
	<script src="<?php echo $this->_tpl_vars['style']; ?>
/js/pop_up.js" language="javascript"></script>
    <div class="right_Search_Jobs">
      <div class="Search_Jobs">
        <div class="Search_Jobs_top">
          <ul>
            <li class="Search_Jobs_top_act icon3">搜职位</li>
          </ul>
          <div class="Search_Jobs_n">现有<strong><?php echo $this->_tpl_vars['jobnum']; ?>
</strong> 个有效职位供您选择</div>
        </div>
        <div class="Search_Jobs_cont">
		<form action="index.php" method="get">
        <input type="hidden" name="m" value="com"/>
        <input type="hidden" name="c" value="search"/>
          <div class="Search_Condition"> <span>工作地点</span>
            <input class="SpFormLBut" type="button" id="city" value="请选择工作地点" onclick="index_city();">
            <input type="hidden" name="cityid" id="cityid"/>
          </div>
          <div class="Search_Condition Search_Condition_relative4"><span>行 &nbsp;&nbsp; 业</span>
            <input class="SpFormLBut" type="button" value="请选择行业类别" id="hy" onclick="search_show('job_hy');">
            <input type="hidden" id="hyid" name="hy" />
                <div class="Search_Condition_box Search_Condition_w260" style="display:none" id="job_hy">
              <ul class="Search_Condition_box_list">
				<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','hy','<?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
');"> <?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
             </ul>
            </div>
          </div>
          <div class="Search_Condition"><span>职位类别</span>
			<input class="SpFormLBut" type="button" value="请选择职位类别" onclick="index_job();" id="index_job_class_val">
            <input type="hidden" id="job_class" name="jobids" value=""/>
          </div>
          <div class="Search_Condition Search_Condition_relative1"><span>学历要求</span>
            <input class="SpFormLBut2" type="button"  value="请选择" onclick="search_show('job_edu');" id="edu">
            <input type="hidden" id="eduid" name="edu" value="">
            <div class="Search_Condition_box" style="display:none" id="job_edu">
              <ul class="Search_Condition_box_list">
                <?php $_from = $this->_tpl_vars['comdata']['job_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','edu','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
            <span class="Search_Condition_span">工作经验</span>
            <input class="SpFormLBut2" type="button"  value="请选择" id="exp" onclick="search_show('job_exp');">
            <input type="hidden" id="expid" name="exp" value="">
            <div class="Search_Condition_box3" style="display:none" id="job_exp">
              <ul class="Search_Condition_box_list">
                <li><a href="javascript:;" onclick="selects('','exp','不限');">不限</a></li>
                <?php $_from = $this->_tpl_vars['comdata']['job_exp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','exp','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
          </div>
          <div class="Search_Condition Search_Condition_relative2">
			<span>期望月薪</span>
            <input class="SpFormLBut2" type="button"  value="请选择" onclick="search_show('job_salary');" id="salary">
            <input type="hidden" id="salaryid" name="salary" value="">
            <div class="Search_Condition_box" style="display:none" id="job_salary">
              <ul class="Search_Condition_box_list">
                <?php $_from = $this->_tpl_vars['comdata']['job_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','salary','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
            <span class="Search_Condition_span">企业规模</span>
            <input class="SpFormLBut2" type="button"  value="请选择" onclick="search_show('job_mun')" id="mun">
            <input type="hidden" id="munid" name="mun" value="">
            <div class="Search_Condition_box2" style="display:none" id="job_mun">
              <ul class="Search_Condition_box_list">
                <?php $_from = $this->_tpl_vars['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','mun','<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
');"><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
          </div>
          <div class="Search_Condition Search_Condition_relative3">
          <span>关键字</span>
            <input class="SpFormLBut_text placeholder" type="text" name="keyword"  placeholder="请输入关键字">
          </div>
          <div class="Search_Condition"><span>招聘方式</span>
            <?php $_from = $this->_tpl_vars['comdata']['job_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
				<input type="radio" value="<?php echo $this->_tpl_vars['v']; ?>
"class="SpFormLBut_check" name="type" id="type"><em><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</em>
            <?php endforeach; endif; unset($_from); ?>
          </div>
          <div class="clear"></div>
          <div class="Search_Condition">
            <input type="submit" value="" class="SpFormLBut_submit SpFormLBut_submit2">
            <input type="reset" value="" class="SpFormLBut_submit" onclick="clean();">
          </div>
        </form>
        </div>
      </div>
		<div class="Latest_talent">
        <div class="Auction_h1 "><b class="Auction_tit" ></b><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:search"), $this);?>
" class="index_more">更多>></a></div>
        <ul class="Auction_list">
			<?php $_from = $this->_tpl_vars['job_jia']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['job_jia']):
?>
			<li>
            <a href="<?php echo $this->_tpl_vars['job_jia']['job_url']; ?>
" class="Auction_name" title="<?php echo $this->_tpl_vars['job_jia']['name']; ?>
"><?php echo $this->_tpl_vars['job_jia']['name_n']; ?>
</a>
            <a href="<?php echo $this->_tpl_vars['job_jia']['com_url']; ?>
" class="Auction_name_gs" title="<?php echo $this->_tpl_vars['job_jia']['com_name']; ?>
"><?php echo $this->_tpl_vars['job_jia']['com_n']; ?>
</a>
            </li>
			<?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>

      <div class="Recommended_jobs">
         <div class="Auction_h1 "><b class="Recommended_tit" ></b><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:search,rec:1"), $this);?>
" class="index_more">更多>></a></div>
        <div class="Recommended_jobs_cont">
          <ul>
            <?php $_from = $this->_tpl_vars['job_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job_list']):
?>
            <li class="icon2"><a href="<?php echo $this->_tpl_vars['job_list']['com_url']; ?>
" title="<?php echo $this->_tpl_vars['job_list']['com_name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['job_list']['com_name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 18, 'gbk') : mb_substr($_tmp, 0, 18, 'gbk')); ?>
</a> <em><a href="<?php echo $this->_tpl_vars['job_list']['job_url']; ?>
" title="<?php echo $this->_tpl_vars['job_list']['name']; ?>
"><?php echo $this->_tpl_vars['job_list']['name_n']; ?>
</a></em></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
    <div class="w980">
  <div class="Famous_recruitment">
    <div class="Latest_talent_h1 "><i >&nbsp;</i><b class="Famous_tit  yun_title" ></b><em></em></div>
    <div class="Famous_recruitment_cont">
      <div class="index_left15560">
        <div id="mainids">
    <?php $_from = $this->_tpl_vars['hotjoblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hotjoblist']):
?>
      <div class="tlogo">
        <ul>
          <li onmouseover="showDiv2(this)" onmouseout="showDiv2(this)"><a href="<?php echo $this->_tpl_vars['hotjoblist']['url']; ?>
" target="_blank"><img width="320" height="51" border="1" src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['hotjoblist']['hot_pic']; ?>
" class="on"/></a>
            <div class="show">
              <div class="area"><?php echo $this->_tpl_vars['hotjoblist']['job']; ?>
</div>
            </div>
          </li>
        </ul>
      </div>
      <?php endforeach; endif; unset($_from); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="plate">
    <div class="Latest_talent_h1"><i >&nbsp;</i><b class="Emergency_tit yun_title"></b><em></em><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:search,urgent:1"), $this);?>
"class="index_more">更多>></a></div>
    <div class="Emergency_index_cont">
      <ul>
        <?php $_from = $this->_tpl_vars['jingji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['jingji']):
?>
        <li>
          <div class="Emergency_list">
            <p>急聘：<a href="<?php echo $this->_tpl_vars['jingji']['job_url']; ?>
" title="<?php echo $this->_tpl_vars['jingji']['name']; ?>
"><?php echo $this->_tpl_vars['jingji']['name_n']; ?>
</a><img src="<?php echo $this->_tpl_vars['style']; ?>
/images/hot.gif"></p>
            <a href="<?php echo $this->_tpl_vars['jingji']['com_url']; ?>
" title="<?php echo $this->_tpl_vars['jingji']['com_n']; ?>
"><?php echo $this->_tpl_vars['jingji']['com_n']; ?>
</a>[<?php echo ((is_array($_tmp=$this->_tpl_vars['jingji']['job_city_one'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 4, 'gbk') : mb_substr($_tmp, 0, 4, 'gbk')); ?>
]</div>
        </li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    </div>
  </div>
  </div>
  <script src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/plus/ad.php?classid=6&id=ad_94' language='javascript'></script>
  <div class="index_banner_top"><?php $_from = $this->_tpl_vars['adlists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlists']):
?><?php echo $this->_tpl_vars['adlists']['html']; ?>
<?php endforeach; endif; unset($_from); ?></div>
  <div class="w980">
	<div class="index_banner_cont ">
		<script src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/plus/ad.php?classid=13&id=ad_23' language='javascript'></script>
		<?php $_from = $this->_tpl_vars['adlist_14']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_14']):
?>
		<?php echo $this->_tpl_vars['adlist_14']['html']; ?>

		<?php endforeach; endif; unset($_from); ?>
		<?php $_from = $this->_tpl_vars['adlist_15']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_15']):
?>
		<?php echo $this->_tpl_vars['adlist_15']['html']; ?>

		<?php endforeach; endif; unset($_from); ?>
	</div>
  </div>
  <div class="plate">
    <div class="Latest_talent_h1"><i >&nbsp;</i><b class="HOt_tit yun_title"></b><em></em><a href="<?php echo smarty_function_url(array('m' => 'com','url' => "c:search"), $this);?>
" class="index_more">更多>></a></div>
    <div class="Featured_Jobs">
     <div>
        <div class="angle_l_t icon2"></div>
        <div class="angle_l_b icon2"></div>
        <div class="angle_r_t icon2"></div>
        <div class="angle_r_b icon2"></div>
      </div>
	<div class="Featured_Jobs_list">
		
        <?php $_from = $this->_tpl_vars['hot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hot']):
?>
        <dl>
        
			<dd> <span>
            <?php $_from = $this->_tpl_vars['hot']['joblist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jlist']):
?>
            
            <a href="<?php echo $this->_tpl_vars['jlist']['url']; ?>
" title="<?php echo $this->_tpl_vars['jlist']['name']; ?>
"><?php echo $this->_tpl_vars['jlist']['name_n']; ?>
</a>
            
            <?php endforeach; endif; unset($_from); ?>
            </span>
            
            <a href="<?php echo $this->_tpl_vars['hot']['curl']; ?>
" title="<?php echo $this->_tpl_vars['hot']['name']; ?>
"><?php echo $this->_tpl_vars['hot']['name_n']; ?>
</a> <?php echo $this->_tpl_vars['hot']['lasttime']; ?>
</dd>
        </dl>
		<?php endforeach; endif; unset($_from); ?>
        
      </div>
      <div class="Featured_Jobs_right">
        <div class="index_Keyword">
		<?php $_from = $this->_tpl_vars['keylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keylist']):
?>
			<a href="<?php echo $this->_tpl_vars['keylist']['url']; ?>
" title="<?php echo $this->_tpl_vars['keylist']['key_name']; ?>
" <?php if ($this->_tpl_vars['keylist']['bold'] == '1'): ?>class="bold"<?php endif; ?> style="color:<?php echo $this->_tpl_vars['keylist']['color']; ?>
; font-size:<?php echo $this->_tpl_vars['keylist']['size']; ?>
;"><?php echo $this->_tpl_vars['keylist']['key_name']; ?>
</a>
         <?php endforeach; endif; unset($_from); ?>
		</div>
        <div class="Featured_Jobs_ban">
          <div class="index_left2013">
            <div id="mainids">
			  <?php $_from = $this->_tpl_vars['adlist_r']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_r']):
?>
			  <div class="tlogo">
                <ul class="clearfix">
                  <li style="width:285px">
					 <?php echo $this->_tpl_vars['adlist_r']['html']; ?>

                  </li>
                </ul>
              </div>
			  <?php endforeach; endif; unset($_from); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="clear"></div>
<div class="Latest_talent_h1 m5 "><i >&nbsp;</i><b class="User_tit  yun_title"></b><em></em><a href="<?php echo smarty_function_url(array('m' => 'user','url' => "c:search"), $this);?>
" class="index_more" >更多>></a></div>
        <div class="Latest_talent_cont">
          <ul class="Latest_talent_list">
            <li class="Latest_talent_list_a">姓名</li>
            <li class="Latest_talent_list_b">年龄</li>
            <li class="Latest_talent_list_c">学历</li>
            <li class="Latest_talent_list_d">求职意向</li>
          </ul>
             <ul class="Latest_talent_list">
            <li class="Latest_talent_list_a">姓名</li>
            <li class="Latest_talent_list_b">年龄</li>
            <li class="Latest_talent_list_c">学历</li>
            <li class="Latest_talent_list_d">求职意向</li>
          </ul>
          <?php $_from = $this->_tpl_vars['ulist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['ulist']):
?>
          <ul class="Latest_talent_list Latest_talent_list2">
            <li class="Latest_talent_list_a"><img  class="png" src="<?php echo $this->_tpl_vars['style']; ?>
/images/<?php if ($this->_tpl_vars['userclass_name'][$this->_tpl_vars['ulist']['sex']] == '女'): ?>yun_girl.png<?php else: ?>yun_boy.png<?php endif; ?>"/><a href="<?php echo smarty_function_url(array('m' => 'resume','url' => "id:".($this->_tpl_vars['ulist']['id'])), $this);?>
" title="<?php echo $this->_tpl_vars['ulist']['username_n']; ?>
"><?php echo $this->_tpl_vars['ulist']['username_n']; ?>
</a></li>
            <li class="Latest_talent_list_b"><?php if ($this->_tpl_vars['ulist']['age'] == 0): ?>保密<?php else: ?><?php echo $this->_tpl_vars['ulist']['age']; ?>
<?php endif; ?></li>
            <li class="Latest_talent_list_c"><?php echo $this->_tpl_vars['ulist']['edu_n']; ?>
</li>
            <li class="Latest_talent_list_d"><?php echo $this->_tpl_vars['ulist']['job_post_n']; ?>
</li>
          </ul>
          <?php endforeach; endif; unset($_from); ?></div>
		<div class="right_banner">
		<?php $_from = $this->_tpl_vars['adlist_user_r']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['adlist_user_r']):
?>
		<?php echo $this->_tpl_vars['adlist_user_r']['html']; ?>

		<?php endforeach; endif; unset($_from); ?>
		</div>
    <div class="clear"></div>
  <div class="w980">
  <div class="index_news">
  <div class="index_News_h1">
	<b class="News_tit  yun_title"></b><em></em>
		<u>
		<?php $_from = $this->_tpl_vars['arcgroupright']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['arcgroupright']):
?>
		<?php if ($this->_tpl_vars['key'] > 0): ?>|<?php endif; ?> <a  href="<?php echo $this->_tpl_vars['arcgroupright']['url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['arcgroupright']['name']; ?>
"><?php echo $this->_tpl_vars['arcgroupright']['name']; ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/news.html" target="_blank">更多>></a>
		</u>
	</div>
<?php $_from = $this->_tpl_vars['indexnews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['indexnews']):
?>
<div class="index_news_content">
	<?php if ($this->_tpl_vars['indexnews']['pic']): ?>
    <dl class="index_news_top">
        <dt>
            <a title="<?php echo $this->_tpl_vars['indexnews']['pic']['0']['title']; ?>
" href="<?php echo $this->_tpl_vars['indexnews']['pic']['0']['url']; ?>
">
            <img width="100" height="50" src="<?php echo $this->_tpl_vars['indexnews']['pic']['0']['newsphoto']; ?>
">
            </a>
        </dt>
        <dd>
            <strong><a href="<?php echo $this->_tpl_vars['indexnews']['pic']['0']['url']; ?>
"><?php echo $this->_tpl_vars['indexnews']['pic']['0']['title']; ?>
</a></strong>
            <span><?php echo $this->_tpl_vars['indexnews']['pic']['0']['description']; ?>
...</span>
            <a href="<?php echo $this->_tpl_vars['indexnews']['pic']['0']['url']; ?>
" target="_blank">[详细]</a>
        </dd>
    </dl>
    <?php endif; ?>
	<div class="index_news_right">
		<ul>

			<?php $_from = $this->_tpl_vars['indexnews']['arclist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arcitem']):
?>
            <?php if ($this->_tpl_vars['arcitem']['title']): ?>
			<li>[<?php echo $this->_tpl_vars['arcitem']['name']; ?>
]<a href="<?php echo $this->_tpl_vars['arcitem']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['arcitem']['title']; ?>
</a></li>
            <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>

		</ul>
	</div>
</div>
<?php endforeach; endif; unset($_from); ?>
</div>
<div class="index_link">
  <div class="index_link_cont">
    <div class="index_link_cont_h1"><span class="yun_bth_icon">友情链接</span><?php if ($this->_tpl_vars['config']['sy_linksq'] == 0): ?> <a href="<?php echo smarty_function_url(array('m' => 'friend'), $this);?>
">申请链接</a><?php endif; ?></div>
    <div class="index_link_list">
      <div class="index_link_list_img"><?php $_from = $this->_tpl_vars['linklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist']):
?><a href="<?php echo $this->_tpl_vars['linklist']['link_url']; ?>
" title="<?php echo $this->_tpl_vars['linklist']['link_name']; ?>
"><img src="<?php echo $this->_tpl_vars['linklist']['pic']; ?>
" width="130" height="35" alt="<?php echo $this->_tpl_vars['linklist']['link_name']; ?>
"/></a><?php endforeach; endif; unset($_from); ?></div>
      <div class="index_link_list_name"><?php $_from = $this->_tpl_vars['linklist2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist2']):
?><a href="<?php echo $this->_tpl_vars['linklist2']['link_url']; ?>
" title="<?php echo $this->_tpl_vars['linklist2']['link_name']; ?>
"><?php echo $this->_tpl_vars['linklist2']['link_name']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
    </div>
  </div>
</div>
<div id="bg"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/backtop.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id='footer_ad'>
	<?php $_from = $this->_tpl_vars['footer_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['footer_ad']):
?>
	<div class="footer_ban" id="">
		<div class="baner_footer" id='bottom_ad_fl'>
			<span class="ban_close" onclick="colse_bottom()">关闭</span>
			<script src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/plus/ad.php?classid=<?php echo $this->_tpl_vars['footer_ad']['class_id']; ?>
&id=ad_<?php echo $this->_tpl_vars['footer_ad']['id']; ?>
' language='javascript'></script>
		</div>
		<input type="hidden" value='1' id='bottom_ad_is_show'/>
	</div>
	<?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['left_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['left_ad']):
?>
		<div class="duilian duilian_left">
			<div class="duilian_con"><script src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/plus/ad.php?classid=<?php echo $this->_tpl_vars['left_ad']['class_id']; ?>
&id=ad_<?php echo $this->_tpl_vars['left_ad']['id']; ?>
' language='javascript'></script></div>
			<div class="close_container"><div class="btn_close"></div></div>
		</div>
	<?php endforeach; endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['right_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['right_ad']):
?>
	<div class="duilian duilian_right">
		<div class="duilian_con"><script src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/plus/ad.php?classid=<?php echo $this->_tpl_vars['right_ad']['class_id']; ?>
&id=ad_<?php echo $this->_tpl_vars['right_ad']['id']; ?>
' language='javascript'></script></div>
		<div class="close_container"><div class="btn_close"></div></div>
	</div>
	<?php endforeach; endif; unset($_from); ?>
</div>
</div>
</div>
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/public_search/index_search.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>