<?php /* Smarty version 2.6.26, created on 2014-09-11 00:05:57
         compiled from member/user/uppic.htm */ ?>
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
<div class="mian_right fltR mt20">
  <div class="tabmenubox01 mt9">
    <ul>
      <li><a href="index.php?c=info">������Ϣ</a></li>
      <li class="cur"><a href="javascript:void(0);">��Ƭ����</a></li>
      <li> <a href="index.php?c=verifica">�����֤</a></li>
    </ul>
  </div>
  <div >
    <div class="remind-job-msg mt10" style="line-height:23px;">
      <ul>
        <li>�ϴ������Ƭ����ʽֻ����ͼƬ���磺gif��jpg��png<span id=""><span id=""></span></span></li>
        <li>��ʱ��ҳ�滺�����⣬�ϴ�����Ƭ���ܼ�ʱ�������ˢ��ҳ�漴��</li>
      </ul>
    </div>
    <div class="clear"></div>
    <div class="oppic_img_cont"> <?php if ($this->_tpl_vars['resume_photo']): ?>
      <div class="oppic_img_big">
        <div class="oppic_img_big_img"><img src=".<?php echo $this->_tpl_vars['resume_photo']; ?>
" width='120' height='150' onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
',2);"/></div>
        <div class="oppic_img_big_p">��׼ͷ��120��150</div>
      </div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['user_photo']): ?>
      <div class="oppic_img_sim">
        <div class="oppic_img_sim_img"><img src=".<?php echo $this->_tpl_vars['user_photo']; ?>
" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
',2);" width='80' height='100'/></div>
        <div class="oppic_img_sim_img_p">С�ߴ�ͷ��<br/>80��100</div>
      </div>
      <?php endif; ?>
      <div class="uppic_sc_r">
        <div class="uppic_sc_img"></div>
        <iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
        <form enctype="multipart/form-data" target="supportiframe" method="post" name="upform" target="upload_target" action="index.php?c=uppic">
        <input type="file" name="Filedata" id="Filedata" class="uppic_sc_bth1" value='22'/>
        <input type="submit" name="" value="�ϴ�������" onclick="return checkFile();" class="uppic_sc_bth2"/>
        <span style="visibility:hidden;" id="loading_gif"><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/loading.gif" align="absmiddle" />�ϴ��У����Ժ�......</span>
        </form>
      </div>
    </div>
    <div class="clear"></div>
    <div class="uppic_flash">
      <iframe src="about:blank" name="upload_target" style="display:none;"></iframe>
      <div id="avatar_editor"></div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript"> 
	var extensions = 'jpg,jpeg,gif,png'; 
	var saveUrl = 'index.php'; 
	var cameraPostUrl = 'index.php?c=camera'; 
	var editorFlaPath = '<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/template/member/user/images/AvatarEditor.swf';
	function buildAvatarEditor(pic_id,pic_path,post_type){
		var content = '<embed height="464" width="514" wmode="transparent"'; 
		content+='flashvars="type='+post_type;
		content+='&photoUrl='+pic_path;
		content+='&photoId='+pic_id;
		content+='&postUrl='+cameraPostUrl+'?&radom=1';
		content+='&saveUrl='+saveUrl+'?c=save_avatar&radom=1"';
		content+=' pluginspage="http://www.macromedia.com/go/getflashplayer"';
		content+=' type="application/x-shockwave-flash"';
		content+=' allowscriptaccess="always" quality="high" src="'+editorFlaPath+'"/>';
		document.getElementById('avatar_editor').innerHTML = content;
	}
	function avatarSaved(){  parent.layer.msg('����ɹ���', 2, 9,function(){location=location ;});return false; } 
	function avatarError(msg){ parent.layer.msg('�ϴ�ʧ�ܣ�', 2, 8);return false; } 
	function checkFile(){
		var path = document.getElementById('Filedata').value;
		var ext = getExt(path);
		var re = new RegExp("(^|\\s|,)" + ext + "($|\\s|,)", "ig");
		if(extensions != '' && (re.exec(extensions) == null || ext == '')) {
			parent.layer.msg('�Բ���ֻ���ϴ�jpg, gif, png���͵�ͼƬ��', 2,3);return false; 
		}
		showLoading();
		return true;
	}
	function getExt(path) {return path.lastIndexOf('.') == -1 ? '' : path.substr(path.lastIndexOf('.') + 1, path.length).toLowerCase();}
	function showLoading(){document.getElementById('loading_gif').style.visibility = 'visible';}
	function hideLoading(){document.getElementById('loading_gif').style.visibility = 'hidden';}
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>