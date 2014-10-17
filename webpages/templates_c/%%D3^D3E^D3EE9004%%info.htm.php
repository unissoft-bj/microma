<?php /* Smarty version 2.6.26, created on 2014-09-10 23:42:11
         compiled from member/user/info.htm */ ?>
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
<SCRIPT language=javascript>
	function CheckPost(){
		var name=$.trim($("input[name='name']").val());
		var living=$.trim($("input[name='living']").val());
		var email=$.trim($("input[name='email']").val());
		var idcard=$.trim($("input[name='idcard']").val());
		var telphone=$.trim($("input[name='telphone']").val());
		var sex=$.trim($("input[type='radio'][name='sex']:checked").val());
		var educid=$.trim($("#educid").val());
		var expid=$.trim($("#expid").val());
		var description=$.trim($("#description").val());
		ifemail = check_email(email);
		ifidcard = isIdCardNo(idcard);
		telphone = isjsMobile(telphone);
		if(name==""){layer.msg($("#by_name").html(), 2, 8);return false;}
		if(sex==''){layer.msg('请选择性别', 2, 8);return false; }
		if(educid==""){layer.msg($("#by_educid").html(), 2, 8);return false;}
		if(expid==""){layer.msg($("#by_expid").html(), 2, 8);return false;}
		if(telphone==false){layer.msg($("#by_telphone").html(), 2, 8);return false;}
		if(ifemail==false){layer.msg($("#by_email").html(), 2, 8);return false;}
		if(living==""){layer.msg($("#by_living").html(), 2, 8);return false;}
		if(description==""){layer.msg("请填写自我评价！", 2, 8);return false;}

		<?php if ($this->_tpl_vars['config']['user_idcard'] == '1'): ?>
			if(ifidcard==false){layer.msg($("#by_idcard").html(), 2, 8);return false;}
		<?php endif; ?>
		layer.load('执行中，请稍候...',0);
	}
$(document).ready(function() {
	$(".com_admin_ask").hover(function(){
		layer.tips("是否在简历中显示非必填信息？", this, {
			guide: 1,
			style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
		});
	},function(){layer.closeTips();});
});
</SCRIPT>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['style']; ?>
/js/index.js"></SCRIPT>
<iframe id="supportiframe" name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe>
<form name="MyForm" method="post" action="" target="supportiframe" onsubmit="return CheckPost();">
<style>
* {margin: 0 ;padding: 0;}
body,div{ margin: 0 ;padding: 0;}
</style>
  <div class="mian_right fltR mt20">
  <div class="tabmenubox01 mt9">
    <ul>
      <li class="cur"><a href="index.php?c=info">基本信息</a></li>
      <li><a href="index.php?c=uppic">照片管理</a></li>
      <li> <a href="index.php?c=verifica">身份验证</a></li>
    </ul>
  </div>
  <div class="clear"></div>
  <div  class="resume_box_list" style="margin-top:0px;">
    <div class="formbox02">
      <ul>
        <li class="short">
          <div class="name"><b>*</b> 姓 名：</div>
          <div class="text">
            <input name="name" type="text" maxlength="50" value="<?php echo $this->_tpl_vars['row']['name']; ?>
" class="info_text"/>
            <span id="by_name"  class="errordisplay">姓名不能为空</span> </div>
        </li>
        <li class="short">
          <div class="name"><b>*</b> 性 别：</div>
          <div class="text text_seclet_cur4">
               <?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['v']):
?>
              <input id="sex<?php echo $this->_tpl_vars['v']; ?>
" type="radio" 
			  <?php if ($this->_tpl_vars['row']['sex'] == $this->_tpl_vars['v']): ?>checked="checked"<?php elseif ($this->_tpl_vars['row']['sex'] == "" && $this->_tpl_vars['key'] == 0): ?>checked="checked"<?php endif; ?>
			  value="<?php echo $this->_tpl_vars['v']; ?>
" name="sex">
              <label for="sex<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</label>
              <?php endforeach; endif; unset($_from); ?>
          </div>
		  <span id="by_sex" class="errordisplay">请选择性别</span>
        </li>

        <li class="short">
          <div class="name"><?php if ($this->_tpl_vars['config']['user_idcard'] == '1'): ?><b>*</b><?php endif; ?>身份证号码：</div>
          <div class="text">
            <input name="idcard" type="text" size="30" maxlength="20" value="<?php echo $this->_tpl_vars['row']['idcard']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9Xx.]/g,'')" class="info_text"/>
            <span id="by_idcard"  class="errordisplay">身份证号码不能为空，或格式错误</span> </div>
        </li>
        <li class="short">
          <div class="name"> <b>*</b> 出生年月：</div>
          <div class="text">
            <link href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/jscal2.css" type="text/css" rel="stylesheet">
            <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/calendar.js" type="text/javascript"></script>
            <script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/time/en.js" type="text/javascript"></script>
            <input id="birthday" type="text" readonly="" size="10" value="<?php if ($this->_tpl_vars['row']['birthday'] == ""): ?>1988-08-08<?php else: ?><?php echo $this->_tpl_vars['row']['birthday']; ?>
<?php endif; ?>" name="birthday" class="text_date_cs">
            <script type="text/javascript">
        Calendar.setup({
        weekNumbers: true,
        inputField : "birthday",
        trigger : "birthday",
        dateFormat: "%Y-%m-%d",
        showTime: false,
        onSelect : function() {this.hide();}
        });
        </script>
          </div>
		  <span id="by_birthday"  class="errordisplay">请正确填写出生年月</span>
        </li>

        <li class="short">
          <div class="name"><b>*</b> 教育程度：</div>
          <div class="text text_seclet_cur3">
            <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['edu'] == ''): ?>  value="请选择教育程度" <?php else: ?> value="<?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['row']['edu']]; ?>
" <?php endif; ?>  id="educ" onclick="search_show('job_educ');">
            <input type="hidden" id="educid" name="edu" <?php if ($this->_tpl_vars['row']['edu']): ?> value="<?php echo $this->_tpl_vars['row']['edu']; ?>
" <?php endif; ?> />
            <div  class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display:none" id="job_educ">
              <ul class="Search_Condition_box_list">
                <?php $_from = $this->_tpl_vars['userdata']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','educ','<?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
');"> <?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
			<span id="by_educid" class="errordisplay">请选择教育程度</span>
          </div>
        </li>
        <li class="short">
          <div class="name"> <b>*</b> 工作经验：</div>
          <div class="text text_seclet_cur4">
            <input class="SpFormLBut text_seclet_w158" type="button" <?php if ($this->_tpl_vars['row']['exp'] == ''): ?>  value="请选择工作经验" <?php else: ?> value="<?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['row']['exp']]; ?>
" <?php endif; ?>  id="exp" onclick="search_show('job_exp');">
            <input type="hidden" id="expid" name="exp" <?php if ($this->_tpl_vars['row']['exp']): ?> value="<?php echo $this->_tpl_vars['row']['exp']; ?>
" <?php endif; ?> />
            <div  class="cus-sel-opt-panel cus-sel-opt-panel-w156" style="display:none" id="job_exp">
              <ul class="Search_Condition_box_list">
                <?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','exp','<?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
');"> <?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
			<span id="by_expid" class="errordisplay">请选择工作经验</span>
          </div>
        </li>
        <li class="short">
          <div class="name"><b>*</b> 手机：</div>
          <div class="text">
            <input name="telphone" type="text" value="<?php echo $this->_tpl_vars['row']['telphone']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class="info_text"/>
            <span id="by_telphone"  class="errordisplay">请正确填写手机号</span> </div>
        </li>
		 <li class="short">
          <div class="name"> <b>*</b> 电子邮件：</div>
          <div class="text">
            <input name="email" type="text" size="30" value="<?php echo $this->_tpl_vars['row']['email']; ?>
" class="info_text"/>
            <span id="by_email"  class="errordisplay">邮件格式错误</span> </div>
        </li>
		<li class="short">
          <div class="name"> <b>*</b> 现居住地：</div>
          <div class="text">
            <input class="info_text" type="text" value="<?php echo $this->_tpl_vars['row']['living']; ?>
" size="30" id="living" name="living">
			<span id="by_living" class="errordisplay">请填写现居住地</span></div>
        </li>
        <li class="short">
          <div class="name"> 详细地址：</div>
          <div class="text"><input name="address"  id="address" type="text" value="<?php echo $this->_tpl_vars['row']['address']; ?>
" size="40" class="info_text"> </div>
        </li>
		 <li class="short">
          <div class="name"> 身高：</div>
          <div class="text">
            <input type="text" name="height" value="<?php echo $this->_tpl_vars['row']['height']; ?>
" size="10" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')"  class="info_text"/>
            <em>CM</em> </div>
          <div class="name_60"> 民族：</div>
          <div class="text">
            <input type="text" name="nationality"  value="<?php echo $this->_tpl_vars['row']['nationality']; ?>
" size="10" class="info_text"/>
          </div>
        </li>
        <li class="short">
          <div class="name" >体重：</div>
          <div class="text">
            <input type="text" name="weight" value="<?php echo $this->_tpl_vars['row']['weight']; ?>
" size="10" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')" class="info_text"/>
            <em> kg</em> </div>
          <div class="name_60"> 婚姻：</div>
          <div class="text text_seclet_cur4">
            <input class="SpFormLBut text_seclet_w134 " type="button" <?php if ($this->_tpl_vars['row']['marriage'] == ''): ?>  value="请选择" <?php else: ?> value="<?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['row']['marriage']]; ?>
" <?php endif; ?> id="marriage" onclick="search_show('job_marriage');">
            <input type="hidden" id="marriageid" name="marriage" <?php if ($this->_tpl_vars['row']['marriage']): ?> value="<?php echo $this->_tpl_vars['row']['marriage']; ?>
" <?php endif; ?> />
            <div  class="cus-sel-opt-panel cus-sel-opt-panel-w132 cus-sel-opt-panel-H132" style="display:none" id="job_marriage">
              <ul class="Search_Condition_box_list">
                <?php $_from = $this->_tpl_vars['userdata']['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
                <li><a href="javascript:;" onclick="selects('<?php echo $this->_tpl_vars['v']; ?>
','marriage','<?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
');"> <?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
          </div>
        </li>
        <li class="short">
          <div class="name"> 户籍所在地：</div>
          <div class="text">
            <input class="info_text" type="text" value="<?php echo $this->_tpl_vars['row']['domicile']; ?>
" size="30" id="domicile" name="domicile"></div>
        </li>
        <li class="short">
          <div class="name"> 座机：</div>
          <div class="text">
            <input name="telhome" type="text" size="30" value="<?php echo $this->_tpl_vars['row']['telhome']; ?>
" onkeyup="this.value=this.value.replace(/[^0-9-.]/g,'')" class="info_text"/>
          </div>
        </li>

        <li class="short">
          <div class="name"> 个人主页/博客：</div>
          <div class="text">
            <input name="homepage" type="text" maxlength="255" size="40" value="<?php echo $this->_tpl_vars['row']['homepage']; ?>
"   class="info_text"/>
          </div>
        </li>
        <li class="short">
          <div class="name"> <b>*</b>自我评价：</div>
          <div class="text">
            <textarea name="description" id="description" class="infor_textarea "><?php echo $this->_tpl_vars['row']['description']; ?>
</textarea>
          </div>
        </li>
		 <li class="short">
         <div class="name"><em style="float:left; padding-right:0px;"> 非必填信息是否显示：</em><i class="com_admin_ask" style="margin-top:5px;"></i></div>
          <div class="text text_seclet_cur4">
			<input id="basic_info" class="SpFormLBut text_seclet_w134 " type="button" onclick="search_show('job_basic_info');" value="<?php if ($this->_tpl_vars['row']['basic_info'] == '0'): ?>不显示<?php elseif ($this->_tpl_vars['row']['basic_info'] == '1'): ?>显示<?php endif; ?>">
			<input id="basic_infoid" type="hidden" value="<?php echo $this->_tpl_vars['row']['basic_info']; ?>
" name="basic_info">
			<div id="job_basic_info" class="cus-sel-opt-panel cus-sel-opt-panel-w132 cus-sel-opt-panel-H132" style="display:none">
				<ul class="Search_Condition_box_list">
					<li><a onclick="selects('0','basic_info','不显示');" href="javascript:;"> 不显示</a></li>
					<li><a onclick="selects('1','basic_info','显示');" href="javascript:;"> 显示</a></li>
				</ul>
			</div>
		  </div>
        </li>
        <li class="short">
          <div class="name">&nbsp;</div>
          <div class="text">
            <input type="submit" name="submitBtn" value="保存信息" class="Verification_sc_bth2" />
          </div>
        </li>
      </ul>
      <div class="operatebox03 mt10"><span> </span> </div>
    </div>
  </div></div>
</form>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>