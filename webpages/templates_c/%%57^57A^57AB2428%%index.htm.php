<?php /* Smarty version 2.6.26, created on 2014-09-10 23:42:12
         compiled from member/user/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'member/user/index.htm', 44, false),array('modifier', 'mb_substr', 'member/user/index.htm', 88, false),array('modifier', 'date_format', 'member/user/index.htm', 88, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="w950">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/left.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>
function Close_yd(){
	$("#yingdao").hide();
	$("#bg").hide();
}
</script>
  <div class="mian_right fltR mt20">
    <div class="index_Resume">
      <div class="index_Resume_left">
   <div style="position:relative; z-index:1020">
   <div class="index_no_resume_box" id="yingdao" <?php if ($this->_tpl_vars['resume']['name'] != ""): ?>style="display:none;"<?php endif; ?>>
   <div class="index_no_resume">
   <img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/yun_m_tck1.png" class="png">
   </div>
   <div class="index_no_resume_jt png"></div>
   <div class="index_no_resume_cont">
   <div class="index_no_resume_h1">������д���˻�����Ϣ</div>
   <div class="index_no_resume_p"> Ϊ�˸�����ҵ�����������д���˻�����Ϣ���ܴ���������</div>
    <div class="index_no_resume_p2"><a href="javascript:Close_yd();">֪����</a></div>
   </div>
   </div>
      </div>
   <?php if ($this->_tpl_vars['statis']['resume_num'] == 0): ?>
   <div class="index_way_box">
   <div>
   <div class="index_way_box_h1_icon"></div>
   <div class="index_way_box_h1"><span>������·</span></div>
   </div>
     <ul class="index_way_box_list"> 
      <li><span>���ƻ�����Ϣ</span><a href="index.php?c=info" title="���Ƹ��˻�����Ϣ">����</a></li>
      <li><span>�ϴ�������Ƭ</span><a href="index.php?c=uppic" title="������Ƭ">�ϴ�</a></li>
      <li><span>��д������Ϣ</span></li>
      <li><span>����ְλ</span></li>
      <li><span>ӦƸ����ְλ</span></li>
      </ul>
    </div>
    <?php else: ?>
      <div class="index_Resume_box">
        <div class="index_Resume_left_top">���ļ���������Ϊ</div>
        <div class="index_Resume_left_bl"><?php echo $this->_tpl_vars['numresume']; ?>
%</div>
        <div class="index_Resume_left_yl"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo smarty_function_url(array('m' => 'resume','url' => "uid:".($this->_tpl_vars['uid'])), $this);?>
"><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/yun_m_yl.gif" alt="Ԥ������"title="Ԥ������"></a></div>
        <div class="index_Resume_left_zt">�ҵļ���״̬��<a href="index.php?c=privacy"><?php if ($this->_tpl_vars['resume']['status'] == 2): ?>����<?php else: ?>����<?php endif; ?></a></div>
       </div>
   <?php endif; ?>
      </div>
      <div class="index_Resume_right">
        <div class="index_Resume_Optimization"> <?php if ($this->_tpl_vars['resume']['def_job'] != 0): ?> <a href="index.php?c=resume" title="���ļ���">�������ļ���</a> <?php else: ?> <a href="index.php?c=expect&add=<?php echo $this->_tpl_vars['uid']; ?>
">�������˼���</a> <?php endif; ?><span>�Ż�������������ҵ��hr�����ҵ�����</span></div>
        <div class="index_Resume_sm">
          <dl>
            <dt><a href="index.php?c=job"><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/in1.jpg"width="67" height="67"></a></dt>
            <dd>������ְλ</dd>
            <dd class="index_Resume_sm_bg"><?php if ($this->_tpl_vars['statis']['sq_jobnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['statis']['sq_jobnum']; ?>
<?php endif; ?></dd>
          </dl>
          <dl>
            <dt><a href="index.php?c=msg"><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/in2.jpg" width="66" height="66"></a></dt>
            <dd>��������</dd>
            <dd class="index_Resume_sm_bg"><?php if ($this->_tpl_vars['msgnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['msgnum']; ?>
<?php endif; ?></dd>
          </dl>
          <dl>
            <dt><a href="index.php?c=favorite" title="ְλ�ղ�"><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/in3.jpg"width="66" height="66"></a></dt>
            <dd>�ղص�ְλ</dd>
           <dd class="index_Resume_sm_bg"><?php if ($this->_tpl_vars['statis']['fav_jobnum'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['statis']['fav_jobnum']; ?>
<?php endif; ?></dd>
          </dl>
          <dl>
            <dt> <a href="index.php?c=seemessage"><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/in4.jpg"width="66" height="66"></a></dt>
            <dd>�յ�����Ϣ</dd>
            <dd class="index_Resume_sm_bg"><?php if ($this->_tpl_vars['msg_count'] == ""): ?>0<?php else: ?><?php echo $this->_tpl_vars['msg_count']; ?>
<?php endif; ?></dd>
          </dl>
        </div>
        <div class="index_Resume_look"><span>�װ��� <?php echo $this->_tpl_vars['username']; ?>
�����ļ����ѱ��鿴 <a href="index.php?c=look"><em><?php echo $this->_tpl_vars['lookNum']; ?>
</em></a> �� | �ѱ����� <em><?php echo $this->_tpl_vars['downNum']; ?>
</em> ��</span></div>
      </div>
    </div>
    <div class="clear"></div>
    <div class="commendbox02 mt10">
      <div class="tabmenubox-index mt9">
        <ul class="fltL">
          <li <?php if ($_GET['type'] == 'job'): ?>class="cur"<?php endif; ?>> <a href="index.php?type=job" title="����ְλ" >����ְλ</a> </li>
          <li <?php if ($_GET['type'] == '' || $_GET['type'] == 'new'): ?>class="cur"<?php endif; ?>> <a href="index.php?type=new" title="����ְλ" >����ְλ</a> </li>
          <li <?php if ($_GET['type'] == 'city'): ?>class="cur"<?php endif; ?>> <a href="index.php?type=city" title="��������" >��������</a></a> </li>
        </ul>
        <a href="../<?php echo smarty_function_url(array('m' => 'com'), $this);?>
"  target="_blank" class="index_more">�鿴����ְλ&gt;&gt;</a> </div>
      <div class="commendcont02 mt10" >
       <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
        <div class="index_job_list">
          <div class=jobtit><a href="../<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['val']['id'])), $this);?>
" target="_blank" title="<?php echo $this->_tpl_vars['val']['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['val']['name'])) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 9, 'gbk') : mb_substr($_tmp, 0, 9, 'gbk')); ?>
</a><em class=endtime><?php echo ((is_array($_tmp=$this->_tpl_vars['val']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
</em></div>
          <div class=award>
          <span>н�ʣ�<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['val']['salary']]; ?>
</span>
          <em> ѧ����<?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['val']['edu']]; ?>
</em>
          </div>
          <div class=go><a href="../<?php echo smarty_function_url(array('m' => 'com','url' => "c:comapply,id:".($this->_tpl_vars['val']['id'])), $this);?>
"  target="_blank" >�鿴ְλ>></a></div>
        </div>
        <?php endforeach; else: ?>
        <div class="seach_job_list" style="float:none; margin:20px auto">
          <div style="width:100%;text-align:center">������Ϣ</div>
        </div>
        <?php endif; unset($_from); ?>
      </div>
    </div>
  </div>
</div>
<div id="bg" <?php if ($this->_tpl_vars['resume']['name'] == ""): ?>style="display:block"<?php endif; ?>></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>