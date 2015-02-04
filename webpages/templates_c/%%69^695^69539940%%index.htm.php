<?php /* Smarty version 2.6.26, created on 2015-02-04 10:50:18
         compiled from wap/member/user/index.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<!-- div class="wap_member_Searcher">
<a href="index.php?c=sq" class="wap_member_Searcher_sq wap_member_Searcher_sq_line"><span>职位申请记录<i><?php echo $this->_tpl_vars['statis']['sq_jobnum']; ?>
</i></span></a>
<a href="index.php?c=collect"class="wap_member_Searcher_sq"><span>职位收藏夹<i class="wap_member_Searcher_sc"><?php echo $this->_tpl_vars['statis']['fav_jobnum']; ?>
</i></span></a>
</div>
<div class="wap_member_mrecord">
<a href="index.php?c=addresume" class="wap_member_mrecord_list">创建简历</a>
<a href="index.php?c=resume" class="wap_member_mrecord_list">简历管理（<em><?php echo $this->_tpl_vars['statis']['resume_num']; ?>
</em>份）</a>
<a href="index.php?c=invite" class="wap_member_mrecord_list">面试邀请（<em><?php echo $this->_tpl_vars['yqnum']; ?>
</em>条）</a>
<a href="index.php?c=look" class="wap_member_mrecord_list">谁看过我的简历（<em><?php echo $this->_tpl_vars['looknum']; ?>
</em>条）</a>
<a href="index.php?c=password" class="wap_member_mrecord_list wap_member_mrecord_list_no">更改密码</a>
</div-->

<div class="wap_member_mrecord">
<?php if ($_SESSION['userrole'] >= 100): ?>
<a href="/ma/invite.php?type=2" class="wap_member_mrecord_list">我的积分:<em><?php echo $_SESSION['jifen']; ?>
</em></a>
<?php else: ?>
<a href="javascript:" class="wap_member_mrecord_list">我的积分:<em><?php echo $_SESSION['jifen']; ?>
</em></a>
<?php endif; ?>
<!-- <a href="/ma/jifen_list.php?title=%e7%a7%af%e5%88%86%e8%ae%b0%e5%bd%95" class="wap_member_mrecord_list">积分记录</a> 
<a href="/ma/product_list.php?title=%E7%A7%AF%E5%88%86%E5%95%86%E5%9F%8E" class="wap_member_mrecord_list">积分商城<em>new</em></a>-->
<a href="/ma/caipiao.php" class="wap_member_mrecord_list">积分兑换 中国福利彩票双色球</a>
<a href="/ma/aixin.php" class="wap_member_mrecord_list">积分捐助 中国青少年发展基金希望工程</a>
<?php if (! $this->_tpl_vars['cookie']['diaocha_url']): ?>
<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/diaocha/view.php?id=10392" class="wap_member_mrecord_list">公益拇指</a>
<?php else: ?>
<a href="../diaocha/<?php echo $this->_tpl_vars['cookie']['diaocha_url']; ?>
" class="wap_member_mrecord_list">公益拇指</a>
<?php endif; ?>
<a href="/ma/shouqibucuo.php" class="wap_member_mrecord_list">手气不错</a>
<a href="/ma/discuss.php?title=%e7%95%99%e8%a8%80%e5%8f%8d%e9%a6%88" class="wap_member_mrecord_list">留言反馈</a>
<!-- 
<a href="/ma/shipin.php" class="wap_member_mrecord_list">精彩视频</a>
<a href="/ma/meeting_list.php?title=%e8%b5%84%e6%96%99%e4%b8%8b%e8%bd%bd" class="wap_member_mrecord_list">资料下载</a>
<a href="#" class="wap_member_mrecord_list wap_member_mrecord_list_no">个人设置</a>
 -->
<?php if ($_SESSION['userrole'] == 100): ?>
<a href="/ma/invite.php?type=1" class="wap_member_mrecord_list">邀请客户</a>

<?php endif; ?>

<?php if ($_SESSION['userrole'] == 1000): ?>
<a href="/ma/invite.php?type=1" class="wap_member_mrecord_list">邀请客户</a>
<a href="/ma/addUser.php" class="wap_member_mrecord_list">添加员工</a>
<?php endif; ?>
</div>

</section>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 