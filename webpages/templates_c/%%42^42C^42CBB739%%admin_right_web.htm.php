<?php /* Smarty version 2.6.26, created on 2014-10-05 10:14:13
         compiled from admin/admin_right_web.htm */ ?>
<div class="maininfo" style="height:180px">
    	<div class="mainboxtop"><h6>网站信息</h6></div>
        <div class="maincontent">
        <div style="width:200px; float:left;clear:left; margin-bottom:5px;">今日个人注册/总数:<?php echo $this->_tpl_vars['user_num']; ?>
 / <?php echo $this->_tpl_vars['usernum_all']; ?>
</div>        <div style="width:250px;float:right; clear:right; margin-bottom:5px;">今日简历数/总数:<?php echo $this->_tpl_vars['resume']; ?>
 / <?php echo $this->_tpl_vars['resume_all']; ?>
</div>
        <div style="width:200px; float:left;clear:left; margin-bottom:5px;">今日企业注册/总数:<?php echo $this->_tpl_vars['com_nums']; ?>
 / <?php echo $this->_tpl_vars['comnum_all']; ?>
</div>        <div style="width:250px; float:right;clear:right; margin-bottom:5px;">今日职位数/总数:<?php echo $this->_tpl_vars['job']; ?>
 / <?php echo $this->_tpl_vars['job_all']; ?>
</div>
        <div style="width:200px; float:left;clear:left; margin-bottom:5px;">今日新闻条数/总数:<?php echo $this->_tpl_vars['news']; ?>
 / <?php echo $this->_tpl_vars['news_all']; ?>
</div>
        <div style="width:250px; float:right;clear:right; margin-bottom:5px;">广告总数:<?php echo $this->_tpl_vars['ad_all']; ?>
</div>
        <div style="width:200px; float:left;clear:left; margin-bottom:5px;"><A href="index.php?m=admin_once&status=2">待审核一句话招聘:</A><?php echo $this->_tpl_vars['once']; ?>
</div>   
        <div style="width:250px; float:right;clear:right; margin-bottom:5px;"><A href="index.php?m=link&state=2">待审核链接:</A><?php echo $this->_tpl_vars['link']; ?>
</div>
		 <div style="width:200px; float:left;clear:left; margin-bottom:5px;"><A href="index.php?m=admin_company_job&state=4">待审核职位:</A><?php echo $this->_tpl_vars['com_job_4']; ?>
</div>
		 <div style="width:250px; float:right;clear:right; margin-bottom:5px;"><A href="index.php?m=comcert&status=2">待认证的企业:</A><?php echo $this->_tpl_vars['com_cert_2']; ?>
</div>
		 <div style="width:200px; float:left;clear:left; margin-bottom:5px;"><A href="index.php?m=company_order&order_state=3">待处理的订单:</A><?php echo $this->_tpl_vars['com_order_3']; ?>
</div>
        </div>
    </div>