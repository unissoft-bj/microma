<?php /* Smarty version 2.6.26, created on 2014-10-03 12:56:52
         compiled from default/includejs/login.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'default/includejs/login.htm', 112, false),)), $this); ?>
<script>
$(document).ready(function(){
	$("#usertype1").click(function(){ 
		$("#reg_url_1").show();
		$("#reg_url_2").hide();
		$("#usertype").val("1"); 
		$("#usertype1").attr("class","");
		$("#usertype2").attr("class","index_logoin_current1");
	});
	$("#usertype2").click(function(){
		$("#reg_url_2").show();
		$("#reg_url_1").hide();
		$("#usertype").val("2");
		$("#usertype2").attr("class","");
		$("#usertype1").attr("class","index_logoin_current2");
	});
});
$(document).ready(function(){
	$("#username").focus(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue){$(this).val("");}
	}).blur(function(){
		var txAreaVal = $(this).val();
		if( txAreaVal == this.defaultValue||$(this).val()==""){$(this).val(this.defaultValue);}
	});
	$("#password2").focus(function(){
		$("#password").show();
		$("#password").focus();
		$("#password2").hide();
	})
	$("#password").blur(function(){
		if($("#password").val()==""){
			$("#password2").show();
			$("#password").hide();
		}
	})
});
</script>
<?php if ($this->_tpl_vars['cookie']['usertype'] == '1'): ?>
<div class="index_logoin_after">
  <div class="hunter_logoin_bg">
    <dl class="logoin_after_tx">
      <dt><img width="50" height="50" src="<?php echo $this->_tpl_vars['member']['photo']; ?>
"></dt>
      <dd>
        <div>���ã�<font color="red"><?php echo $this->_tpl_vars['cookie']['username']; ?>
</font></div>
        <br>�����û�</dd>
    </dl>
    <div class="logoin_after_cj">���Ѵ����� (<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=resume"><u><?php echo $this->_tpl_vars['member']['resume_num']; ?>
</u></a>) �ݼ�����</div>
    <div class="hunter_logoin_list"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=expect&add=<?php echo $this->_tpl_vars['cookie']['uid']; ?>
" class="logoin_after_su1">��������</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=resume" class="logoin_after_su2">�������</a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job"> �������ְλ��</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job"><em><?php echo $this->_tpl_vars['member']['sq_jobnum']; ?>
</em></a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=favorite"> �ղص�ְλ��</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=favorite"><em><?php echo $this->_tpl_vars['member']['fav_jobnum']; ?>
</em></a></div>
    <div class="logoin_after_cz"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php">�����������</a><a href="javascript:vold(0);" onclick="logout('index.php?c=logout');"> ��ȫ�˳�</a></div>
  </div>
</div>
<?php elseif ($this->_tpl_vars['cookie']['usertype'] == '2'): ?>
<div class="index_logoin_after">
  <div class="hunter_logoin_bg">
    <dl class="logoin_after_tx">
      <dt><img width="50" height="50" src="<?php echo $this->_tpl_vars['company']['logo']; ?>
"></dt>
      <dd>
        <div>���ã�<font color="red"><?php echo $this->_tpl_vars['cookie']['username']; ?>
</font></div>
        <br>��ҵ�û�</dd>
    </dl>
    <div class="logoin_after_cj">���ѷ����� (<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&w=1"><u><?php echo $this->_tpl_vars['company']['job']; ?>
</u></a>)��ְλ��</div>
    <div class="hunter_logoin_list"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=jobadd" class="logoin_after_su1">����ְλ</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&w=1" class="logoin_after_su2">ְλ����</a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=hr"> �������ְλ��</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=hr"><em><?php echo $this->_tpl_vars['company']['sq_job']; ?>
</em></a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&w=2"> �ѹ���ְλ��</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&w=2"><em><?php echo $this->_tpl_vars['company']['status2']; ?>
</em></a></div>
    <div class="logoin_after_cz"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php">�����������</a><a href="javascript:vold(0);" onclick="logout('index.php?c=logout');"> ��ȫ�˳�</a></div>
  </div>
</div>
<?php elseif ($this->_tpl_vars['cookie']['usertype'] == '3'): ?>
<div class="index_logoin_after">
  <div class="hunter_logoin_bg">
    <dl class="logoin_after_tx">
      <dt><img width="50" height="50" src="<?php echo $this->_tpl_vars['lt']['photo']; ?>
"></dt>
      <dd> <div>���ã�<font color="red"><?php echo $this->_tpl_vars['cookie']['username']; ?>
</font></div>
      <br>��ͷ�û�</dd>
    </dl>
    <div class="logoin_after_cj">���ѷ����� (<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&s=1"><u><?php echo $this->_tpl_vars['lt']['lt_job']; ?>
</u></a>)��ְλ��</div>
    <div class="hunter_logoin_list"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job_add" class="logoin_after_su1">����ְλ</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=down_resume" class="logoin_after_su2">������</a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=entrust_resume"> ί�����ļ�����</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=entrust_resume"><em><?php echo $this->_tpl_vars['lt']['entrust']; ?>
</em></a></div>
    <div class="logoin_after"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&s=2"> �ѹ���ְλ��</a><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=job&s=2"><em><?php echo $this->_tpl_vars['lt']['lt_status2']; ?>
</em></a></div>
    <div class="logoin_after_cz"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php">�����������</a><a href="javascript:vold(0);" onclick="logout('index.php?c=logout');"> ��ȫ�˳�</a></div>
  </div>
</div>
<?php else: ?>
<div class="index_logoin">
  <input type="hidden" value="index" name="path" id="path">
  <input type="hidden" value="1" name="usertype" id="usertype">
  <ul class="index_logoin_h1">
    <li id="usertype1">���˵�¼</li>
    <li id="usertype2" class="index_logoin_current1">��ҵ��¼</li>
  </ul>
  <ul class="index_logoin_cont">
    <li class="index_logoin_re"><span>�û���</span>
      <input type="text" id="username" name="username" value="<?php if ($this->_tpl_vars['cookie']['loginname']): ?><?php echo $this->_tpl_vars['cookie']['loginname']; ?>
<?php else: ?>�û���<?php endif; ?>" class="index_logoin_inp placeholder">
      <div class="index_logoin_msg" id="show_name" style="display:none">
	  <div class="index_logoin_msg_tx">����д�û���</div>
	  <div class="index_logoin_msg_icon"></div>
	  </div>
    </li>
    <li  class="index_logoin_re_m"><span>��&nbsp; ��</span>
      <input type="text" id="password2" class="index_logoin_inp placeholder" value="��������������">
	  <input type="password" id="password" name="password" class="index_logoin_inp placeholder" value="" style="display:none;">
       <div class="index_logoin_msg" style="display:none" id="show_pass">
	   <div class="index_logoin_msg_tx">����д����</div>
	   <div class="index_logoin_msg_icon"></div>
	   </div>
    </li>
    <li><span>&nbsp;</span>
      <input type="checkbox" class="index_logoin_check" value="1" name="loginname">
      <em>��ס��¼״̬</em><a href="<?php echo smarty_function_url(array('m' => 'forgetpw'), $this);?>
">��������?</a></li>
    <li class="">
      <input type="submit" class="index_logoin_submit" onclick="check_login();" value="">
      <a id="reg_url_1" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:1"), $this);?>
" class="index_logoin_submit2"></a><a id="reg_url_2" href="<?php echo smarty_function_url(array('m' => 'register','url' => "usertype:2"), $this);?>
" class="index_logoin_submit2" style="display:none"></a></li>
  <li class="index_logoin_Coop">
	<?php if ($this->_tpl_vars['config']['sy_qqlogin'] == '1' || $this->_tpl_vars['config']['sy_sinalogin'] == '1'): ?><em>������վ��¼��</em><?php endif; ?>
	<?php if ($this->_tpl_vars['config']['sy_qqlogin'] == '1'): ?>
	<img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_qq.png" class="png"><a href="<?php echo smarty_function_url(array('m' => 'qqconnect','url' => "c:qqlogin"), $this);?>
">QQ��¼</a> 
	<?php endif; ?>
	<?php if ($this->_tpl_vars['config']['sy_qqlogin'] == '1'): ?>
	<img src="<?php echo $this->_tpl_vars['style']; ?>
/images/yun_sina.png" class="png"><a href="<?php echo smarty_function_url(array('m' => 'sinaconnect'), $this);?>
">����΢��</a>
	<?php endif; ?>
	</li>
  </ul>
</div>
<?php endif; ?> 