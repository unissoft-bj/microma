<?php /* Smarty version 2.6.26, created on 2014-09-11 01:18:47
         compiled from admin/admin_web_config.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<link href="images/reset.css" rel="stylesheet" type="text/css" />
<link href="images/system.css" rel="stylesheet" type="text/css" />  
<link href="images/table_form.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/layer/layer.min.js" language="javascript"></script> 
<script src="js/admin_public.js" type="text/javascript"></script> 
<script src="http://api.map.baidu.com/api?v=1.4"></script>
<script type="text/javascript" src="../js/map.js"></script> 
<title>后台管理</title>
</head>
<body class="body_ifm">
<div class="infoboxp" style="position:relative;">
<div id="subboxdiv" style="width:100%;height:100%;display:none;position:absolute; z-index:10000"></div>
<div class="infoboxp_top"><h6>网站配置</h6></div>
<div class="main_tag" >
<ul>
	<li class="on">基本配置</li>
    <li>安全配置</li>
    <li>验证码配置</li>
    <li>网站LOGO</li>
    <li>地图配置</li>
    <li>缓存配置</li>
</ul>
<div class="clear"></div>
<div class="tag_box">
<div> 
<table width="100%" class="table_form">
<tr class="admin_table_trbg">
    <th width="160">参数说明：</th>
    <td >参数值</td>
    <td width="160">变量</td>
</tr>
<tr>
<th width="160">网站名称：</th>
<td>
<input class="input-text" type="text" name="sy_webname" id="sy_webname" value="<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
" size="40" maxlength="255"/>
<font color="gray" style="display:none">如：hr135人才网</font></td>
<td width="160">sy_webname</td>
</tr>
<tr class="admin_table_trbg">
		<th width="160">网址地址：</th>
		<td><input class="input-text tips_class" type="text" name="sy_weburl" id="sy_weburl" value="<?php if ($this->_tpl_vars['config']['sy_old_weburl']): ?><?php echo $this->_tpl_vars['config']['sy_old_weburl']; ?>
<?php else: ?><?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php endif; ?>" size="40" maxlength="255"/><font color="gray" style="display:none">如：http://www.hr135.com</font></td>
        <td width="160">sy_weburl</td>
	</tr>
    <tr>
    	<th width="160">网站开启：</th>
		<td  >
          <input type="radio" name="sy_web_online" value="1" id="RadioGroup1_12" <?php if ($this->_tpl_vars['config']['sy_web_online'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup1_12">开启</label>&nbsp;
          <input type="radio" name="sy_web_online" value="2" id="RadioGroup1_13" <?php if ($this->_tpl_vars['config']['sy_web_online'] == '2'): ?>checked<?php endif; ?>>
          <label for="RadioGroup1_13">关闭</label>
        </td>
        <td width="160">sy_web_online</td>
    </tr>
    <tr class="admin_table_trbg">
    	<th width="160">开启多城市：</th>
		<td>
          <input type="radio" name="sy_web_site" value="1" id="RadioGroup3_12" <?php if ($this->_tpl_vars['config']['sy_web_site'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup3_12">开启</label>&nbsp;
          <input type="radio" name="sy_web_site" value="0" id="RadioGroup3_13" <?php if ($this->_tpl_vars['config']['sy_web_site'] == '0'): ?>checked<?php endif; ?>>
          <label for="RadioGroup3_13">关闭</label> <br/><font color="gray" style="display:none">提示：开启多城市并且绑定域名不支持2级目录，本地测试如 http://localhost/phpyun 请解析测试域名</font></td>
        <td width="160">sy_web_site</td>
    </tr>
    <tr>
		<th width="160">设定默认城市：</th>
		<td><input class="input-text tips_class" type="text" name="sy_indexcity" id="sy_indexcity" size="20" maxlength="255" value="<?php echo $this->_tpl_vars['config']['sy_indexcity']; ?>
"/><font color="gray" style="display:none">提示：当您开启分站后默认显示的城市 如：全国</font></td>
        <td width="160">sy_indexcity</td>
	</tr>
    <tr class="admin_table_trbg">
		<th width="160">一级域名：</th>
		<td><input class="input-text tips_class" type="text" name="sy_onedomain" id="sy_onedomain" size="50" maxlength="255" value="<?php echo $this->_tpl_vars['config']['sy_onedomain']; ?>
"/><font color="gray" style="display:none">提示：如果默认域名为二级域名，则请填写一级域名</font></td>
        <td width="160">sy_onedomain</td>
	</tr>
    <tr>
		<th width="160">默认域名：</th>
		<td><input class="input-text tips_class" type="text" name="sy_indexdomain" id="sy_indexdomain" size="50" maxlength="255" value="<?php echo $this->_tpl_vars['config']['sy_indexdomain']; ?>
"/><font color="gray" style="display:none">提示：默认城市对应的域名 如全站对应域名 http://www.hr135.com 而不是 beijing.hr135.com</font></td>
        <td width="160">sy_indexdomain</td>
	</tr>
   
  <tr class="admin_table_trbg">
    	<th width="160">伪静态设置：</th>
		<td>
          <input type="radio" name="sy_seo_rewrite" value="0" id="RadioGroup2_12" <?php if ($this->_tpl_vars['config']['sy_seo_rewrite'] == '0'): ?>checked<?php endif; ?>>
          <label for="RadioGroup2_12">原链接</label>&nbsp;
          <input type="radio" name="sy_seo_rewrite" value="1" id="RadioGroup2_13" <?php if ($this->_tpl_vars['config']['sy_seo_rewrite'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup2_13">伪静态</label><br>
          <font color="gray" style="display:none">修改伪静态之前要先根据服务器添加伪静态规则</font>
        </td>
        <td width="160">sy_seo_rewrite</td>
    </tr>     

	<tr >
    	<th width="160">友情链接申请：</th>
		<td>
          <input type="radio" name="sy_linksq" value="0" id="sy_linksq_0" <?php if ($this->_tpl_vars['config']['sy_linksq'] == '0'): ?>checked<?php endif; ?>>
          <label for="sy_linksq_0">开启</label>&nbsp;
          <input type="radio" name="sy_linksq" value="1" id="sy_linksq_1" <?php if ($this->_tpl_vars['config']['sy_linksq'] == '1'): ?>checked<?php endif; ?>>
          <label for="sy_linksq_1">关闭</label>
        </td>
        <td width="160">sy_linksq</td>
    </tr>
    <tr class="admin_table_trbg">
		<th width="160">后台列表页显示条数：</th>
		<td><input class="input-text tips_class" type="text" name="sy_listnum" id="sy_listnum" value="<?php echo $this->_tpl_vars['config']['sy_listnum']; ?>
" size="10" maxlength="255" /> 条</td>
         <td width="160">sy_listnum</td>
	</tr>
    <tr class="admin_table_trbg">
    	<th width="160">网站关闭原因：</th>
		<td>
          <textarea name="sy_webclose" id="sy_webclose" rows="3" cols="50" class="text"><?php echo $this->_tpl_vars['config']['sy_webclose']; ?>
</textarea>
        </td>
        <td width="160">sy_webclose</td>
    </tr>  
  <tr >
		<th width="160">网站关键词：</th>
		<td class="y-bg"><textarea name="sy_webkeyword" id="sy_webkeyword" rows="3" cols="50" class="text tips_class"><?php echo $this->_tpl_vars['config']['sy_webkeyword']; ?>
</textarea></td>
        <td width="160">sy_webkeyword</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">网站描述：</th>
		<td><textarea name="sy_webmeta" id="sy_webmeta" rows="3" cols="50" class="text"><?php echo $this->_tpl_vars['config']['sy_webmeta']; ?>
</textarea></td>
         <td width="160">sy_webmeta</td>
	</tr>
	<tr  >
		<th width="160">网站版权信息：</th>
        <td><textarea name="sy_webcopyright" id="sy_webcopyright" rows="3" cols="50" class="text"><?php echo $this->_tpl_vars['config']['sy_webcopyright']; ?>
</textarea></td>
        <td width="160">sy_webcopyright</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">站长EMAIL：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webemail" id="sy_webemail" value="<?php echo $this->_tpl_vars['config']['sy_webemail']; ?>
" size="30" maxlength="255" /></td>
         <td width="160">sy_webemail</td>
	</tr>
	<tr  >
		<th width="160">备案号：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webrecord" id="sy_webrecord" value="<?php echo $this->_tpl_vars['config']['sy_webrecord']; ?>
" size="30" maxlength="255" /></td>
        <td width="160">sy_webrecord</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">电 话：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webtel" id="sy_webtel" value="<?php echo $this->_tpl_vars['config']['sy_webtel']; ?>
" size="30" maxlength="255"/> <font color="gray" style="display:none">如：021-61190281</font></td>
        <td width="160">sy_webtel</td>
	</tr>
	<tr >
		<th width="160">免费电话：</th>
		<td><input class="input-text tips_class" type="text" name="sy_freewebtel" id="sy_freewebtel" value="<?php echo $this->_tpl_vars['config']['sy_freewebtel']; ?>
" size="30" maxlength="255"/> <font color="gray" style="display:none">如：400-8888-888</font></td>
        <td width="160">sy_freewebtel</td>
	</tr>
	<tr class="admin_table_trbg">
		<th width="160">客服QQ：</th>
		<td><input class="input-text tips_class" type="text" name="sy_qq" id="sy_qq" value="<?php echo $this->_tpl_vars['config']['sy_qq']; ?>
" size="30" maxlength="255"/> <font color="gray" style="display:none">多个则用半角逗号隔开！</font></td>
        <td width="160">sy_qq</td>
	</tr>
	<tr >
		<th width="160">公司地址：</th>
		<td><input class="input-text tips_class" type="text" name="sy_webadd" id="sy_webadd" value="<?php echo $this->_tpl_vars['config']['sy_webadd']; ?>
" size="60" maxlength="255"/><font color="gray" style="display:none">如：上海徐汇区零陵路爱和大厦14A座</font></td>
        <td width="160">sy_webadd</td>
	</tr>
    
<tr  >
		<td colspan="3" align="center"><input class="admin_submit4" id="config" type="button" name="config" value="提交">&nbsp;&nbsp;<input class="admin_submit4" type="reset" value="重置"/></td>
	</tr>
</table>  
</div>
<div class="hiddendiv"> 
    <table width="100%" class="table_form">
      <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
	<tr>
		<th width="160">系统安全码：</th>
		<td><input class="input-text tips_class" type="text" name="sy_safekey" id="sy_safekey" value="<?php echo $this->_tpl_vars['config']['sy_safekey']; ?>
" size="40" maxlength="255"/><font color="gray" style="display:none">系统部分功能使用的加密串，请自定义修改，如：986jhgyutw.*x</font></td>
        <td width="160">sy_safekey</td>
	</tr>
    <tr class="admin_table_trbg">
    	<th width="160">后台修改模板：</th>
		<td  >
          <input type="radio" name="sy_istemplate" value="1" id="sy_istemplate" <?php if ($this->_tpl_vars['config']['sy_istemplate'] == '1'): ?>checked<?php endif; ?>>
          <label for="RadioGroup1_12">开启</label>&nbsp;
          <input type="radio" name="sy_istemplate" value="2" id="sy_istemplate" <?php if ($this->_tpl_vars['config']['sy_istemplate'] == '2'): ?>checked<?php endif; ?>>
          <label for="RadioGroup1_13">关闭</label>
        </td>
        <td width="160">sy_template</td>
    </tr>
    
        <tr >
            <th width="160">过滤关键词：</th>
            <td><textarea name="sy_fkeyword" id="sy_fkeyword" rows="3" cols="50" class="text tips_class"><?php echo $this->_tpl_vars['config']['sy_fkeyword']; ?>
</textarea>
            <font color="gray" style="display:none">如：台湾,台独</font></td>
             <td width="160">sy_fkeyword</td>
        </tr>
        <tr class="admin_table_trbg">
            <th width="160">替换过滤关键词：</th>
            <td><textarea name="sy_fkeyword_all" id="sy_fkeyword_all" rows="3" cols="50" class="text tips_class"><?php echo $this->_tpl_vars['config']['sy_fkeyword_all']; ?>
</textarea>
            <font color="gray" style="display:none">将敏感关键词替换</font></td>
            <td width="160">sy_fkeyword_all</td>
        </tr>
        <tr  >
		<th>禁止IP访问：</th>
			<td><textarea id="sy_bannedip" class='tips_class' name="sy_bannedip" cols="100" rows="2" style="width:317px;height:100px;"><?php echo $this->_tpl_vars['config']['sy_bannedip']; ?>
</textarea><font color="gray" style="display:none">多个IP用|(竖线)隔开,例：127.0.0.1|192.168.1.1</font>
            </td>
             <td width="160">sy_bannedip</td>
		</tr>
        <tr class="admin_table_trbg">
            <th width="160">禁止IP访问提示：</th>
            <td><textarea name="sy_bannedip_alert" id="sy_bannedip_alert" rows="3" cols="50" class="text tips_class"><?php echo $this->_tpl_vars['config']['sy_bannedip_alert']; ?>
</textarea>
            <font color="gray" style="display:none">禁止访问提示</font></td>
            <td width="160">sy_bannedip_alert</td>
        </tr>
        <tr >
            <th width="160">限制注册用户名：</th>
            <td><textarea name="sy_regname" id="sy_regname" rows="3" cols="50" class="text tips_class"><?php echo $this->_tpl_vars['config']['sy_regname']; ?>
</textarea>
            <font color="gray" style="display:none">多个请用,(半角逗号)隔开。</font></td>
            <td width="160">sy_regname</td>
        </tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="otherconfig" type="button" name="otherconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>            
        </tr>
    </table> 
	
    </form>
</div>
<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
	<tr>
		<th width="160">开启系统验证码：</th>
		<td>
        <input type="checkbox" name="code_web" value="注册会员" id="checkboxgroup1_0" <?php if (strstr ( $this->_tpl_vars['config']['code_web'] , '注册会员' )): ?>checked<?php endif; ?>>
        <label for="checkboxgroup1_0">注册会员</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="前台登陆" id="checkboxgroup1_1" <?php if (strstr ( $this->_tpl_vars['config']['code_web'] , '前台登陆' )): ?>checked<?php endif; ?>>
        <label for="checkboxgroup1_1">前台登陆</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="一句话招聘" id="checkboxgroup1_2" <?php if (strstr ( $this->_tpl_vars['config']['code_web'] , '一句话招聘' )): ?>checked<?php endif; ?>>
        <label for="checkboxgroup1_2">一句话招聘</label>&nbsp;&nbsp;
        <input type="checkbox" name="code_web" value="后台登陆" id="checkboxgroup1_3" <?php if (strstr ( $this->_tpl_vars['config']['code_web'] , '后台登陆' )): ?>checked<?php endif; ?>>
        <label for="checkboxgroup1_3">后台登陆</label>
          </td>
         <td width="160">code_web</td> 
	</tr>
      <tr class="admin_table_trbg">
		<th width="160">验证码生成类型：</th>
		<td>
		    <input type="radio" name="code_type" value="1" id="RadioGroup3_0" <?php if ($this->_tpl_vars['config']['code_type'] == '1'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup3_0">数字</label>&nbsp;&nbsp;
		    <input type="radio" name="code_type" value="2" id="RadioGroup3_1" <?php if ($this->_tpl_vars['config']['code_type'] == '2'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup3_1">英文</label>&nbsp;&nbsp;
            <input type="radio" name="code_type" value="3" id="RadioGroup3_2" <?php if ($this->_tpl_vars['config']['code_type'] == '3'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup3_2">英文+数字</label>
		  </td>
          <td width="160">code_type</td> 
 
	</tr>
    <tr>
		<th width="160">选择验证码文件类型：</th>
		<td>
        	<input type="radio" name="code_filetype" value="jpg" id="RadioGroup4_0" <?php if ($this->_tpl_vars['config']['code_filetype'] == 'jpg'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup4_0">jpg</label>&nbsp;&nbsp;
		    <input type="radio" name="code_filetype" value="png" id="RadioGroup4_2" <?php if ($this->_tpl_vars['config']['code_filetype'] == 'png'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup4_2">png</label>&nbsp;&nbsp;
            <input type="radio" name="code_filetype" value="gif" id="RadioGroup4_3" <?php if ($this->_tpl_vars['config']['code_filetype'] == 'gif'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup4_3">gif</label></td>
           <td width="160">code_filetype</td>  
	</tr>
  <tr class="admin_table_trbg">
		<th width="160">验证码图片大小：</th>
		<td>宽：<input class="input-text" type="text" name="code_width" id="code_width" value="<?php echo $this->_tpl_vars['config']['code_width']; ?>
" size="10" maxlength="255"/>px&nbsp;&nbsp;
        高：<input class="input-text" type="text" name="code_height" id="code_height" value="<?php echo $this->_tpl_vars['config']['code_height']; ?>
" size="10" maxlength="255"/>px
        </td>
        <td width="160">code_width</td> 
	</tr>
    <tr>
		<th width="160">验证码字符数：</th>
		<td><input class="input-text" type="text" name="code_strlength" id="code_strlength" value="<?php echo $this->_tpl_vars['config']['code_strlength']; ?>
" size="10" maxlength="1" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"/>&nbsp;&nbsp;提示：字符数不要大于5</td>
         <td width="160">code_strlength</td> 
	</tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="codeconfig" type="button" name="codeconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>
<div class="hiddendiv">
	<iframe id="supportiframe"  name="supportiframe" onload="returnmessage('supportiframe');" style="display:none"></iframe> 
    <form action="index.php?m=config&c=save_logo" method="post" enctype= "multipart/form-data" target="supportiframe">
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
    
        <tr>
		<th width="160">整站LOGO：</th>
		<td><input  type="file" size="45" name="logo" class="input-text">
        <?php if ($this->_tpl_vars['config']['sy_logo'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_logo']; ?>
" >
        <?php endif; ?>
            </td>
             <td width="160">sy_logo</td>
		</tr>
        
         <tr>
		<th width="160">朋友圈LOGO：</th>
		<td><input  type="file" size="45" name="friend_logo" class="input-text">
        <?php if ($this->_tpl_vars['config']['sy_friend_logo'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_friend_logo']; ?>
">
        <?php endif; ?>
          </td>
           <td width="160">sy_friend_logo</td>
		</tr>
         <tr class="admin_table_trbg">
		<th width="160">个人会员中心LOGO：</th>
		<td><input  type="file" size="45" name="member_logo" class="input-text">
                <?php if ($this->_tpl_vars['config']['sy_member_logo'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_logo']; ?>
">
        <?php endif; ?>
          </td>
          <td width="160">sy_member_logo</td>
		</tr>
         <tr>	
		<th width="160">企业会员中心LOGO：</th>
		<td><input  type="file" size="45" name="unit_logo" class="input-text">
            <?php if ($this->_tpl_vars['config']['sy_unit_logo'] != ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_unit_logo']; ?>
">
        <?php endif; ?>
          </td>
          <td width="160">sy_unit_logo</td>
		</tr>
		 <tr>	
		<th width="160">微信展示LOGO</th>
		<td><input  type="file" size="45" name="wx_logo" class="input-text">
            <?php if ($this->_tpl_vars['config']['wx_logo'] == ""): ?>
        <img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_wx_logo']; ?>
">
        <?php endif; ?>
          </td>
          <td width="160">sy_wx_logo</td>
		</tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4"  type="submit" name="waterconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table> 
	<input type="hidden" name="pytoken" id='pytoken' value="<?php echo $this->_tpl_vars['pytoken']; ?>
">
    </form>
</div>

<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th>参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
    <tr>
		<th>IP跳转到当前城市：</th>
		<td>
        <input type="radio" name="map_tocity" value="1" id="map_0" <?php if ($this->_tpl_vars['config']['map_tocity'] == '1'): ?>checked<?php endif; ?>>
		    <label for="map_0">跳转</label>&nbsp;&nbsp;
		    <input type="radio" name="map_tocity" value="2" id="map_1" <?php if ($this->_tpl_vars['config']['map_tocity'] == '2'): ?>checked<?php endif; ?>>
		    <label for="map_1">保持默认坐标</label>
        </td>
        <td width="160">map_tocity</td>
	</tr>
    <tr class="admin_table_trbg">
		<th>百度地图KEY：</th>
		<td><input class="input-text  " type="text" name="map_key" id="map_key" value="<?php echo $this->_tpl_vars['config']['map_key']; ?>
" size="45" maxlength="255"/>
        <font color="gray"><a href="http://lbsyun.baidu.com/apiconsole/key?application=key">申请地址</a> 地图版本：1.5</font>
        </td>
        <td width="160">map_key</td>
	</tr>
        <tr>
			<th>默认坐标：</th>
			<td>X：<input class="input-text" type="text" name="map_x" id="map_x" value="<?php echo $this->_tpl_vars['config']['map_x']; ?>
" size="20" maxlength="255"/>&nbsp;&nbsp;Y：<input class="input-text" type="text" name="map_y" id="map_y" value="<?php echo $this->_tpl_vars['config']['map_y']; ?>
" size="20" maxlength="255"/> 
        <a href="javascript:;" id="getclick">点击获取坐标</a>
        </td>
        <td width="160">map_x / map_y</td>       
    <tr id="getmapxy" style="display:none;" class="admin_table_trbg">
			<th>获取坐标：</th>
			<td style=" position:relative; z-index:0px"><div id="map_container" style="width:100%;height:300px; position:relative; z-index:1"></div></td>
            <td width="160"></td>
        </tr>
        <tr class="admin_table_trbg">
            <td colspan="3" align="center">
            <input class="admin_submit4" id="mapconfig" type="button" name="mapconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>

<div class="hiddendiv"> 
    <table width="100%" class="table_form">
     <tr class="admin_table_trbg">
          <th width="160">参数说明：</th>
          <td>参数值</td>
          <td width="160">变量</td>
    </tr>
        <tr>
		<th width="160">Memcache缓存：</th>
		<td>
		    <input type="radio" class='tips_class' name="ismemcache" value="1" id="RadioGroup3_0" <?php if ($this->_tpl_vars['config']['ismemcache'] == '1'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup3_0">开启</label>&nbsp;&nbsp;
		    <input type="radio" name="ismemcache" class='tips_class' value="2" id="RadioGroup3_1" <?php if ($this->_tpl_vars['config']['ismemcache'] == '2'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup3_1">关闭</label>&nbsp;&nbsp;
            <font color="gray" style="display:none">注：服务器上未安装Memcache,请不要打开。</font>
		  </td>
          <td width="160">ismemcache</td>
		</tr>

        <tr class="admin_table_trbg">
        <th width="160">Memcache服务器：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcachehost" id="memcachehost3" value="<?php echo $this->_tpl_vars['config']['memcachehost']; ?>
" size="20" maxlength="255"/><font color="gray" style="display:none">服务器IP，本机127.0.0.1</font>
		  </td>
           <td width="160">memcachehost</td>
		</tr>
        <tr>
        <th width="160">Memcache端口：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcacheport" id="memcacheport3" value="<?php echo $this->_tpl_vars['config']['memcacheport']; ?>
" size="20" maxlength="255"/><font color="gray" style="display:none">默认11211</font>
		  </td>
          <td width="160">memcacheport</td>
		</tr>
        <tr class="admin_table_trbg">
        <th width="160">Memcache缓存时间：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="memcachetime" id="memcachetime" value="<?php echo $this->_tpl_vars['config']['memcachetime']; ?>
" size="20" maxlength="255"/><font color="gray" style="display:none">秒为单位,一般为3600秒</font>
		  </td>
          <td width="160">memcachetime</td>
		</tr>  
        <tr>
		<th width="160">页面缓存：</th>
		<td>
		    <input type="radio" class="tips_class" name="webcache" value="1" id="RadioGroup3_0" <?php if ($this->_tpl_vars['config']['webcache'] == '1'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup3_0">开启</label>&nbsp;&nbsp;
		    <input type="radio" name="webcache" value="2" id="RadioGroup3_1" <?php if ($this->_tpl_vars['config']['webcache'] == '2'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup3_1">关闭</label>&nbsp;&nbsp;
		  </td>
          <td width="160">webcache</td>
		</tr>   
        <tr class="admin_table_trbg">
        <th width="160">页面缓存时间：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="webcachetime" id="webcachetime" value="<?php echo $this->_tpl_vars['config']['webcachetime']; ?>
" size="20" maxlength="255"/><font color="gray" style="display:none">秒为单位,一般为3600秒</font>
		  </td>
          <td width="160">webcachetime</td>
		</tr>    
        <tr style="display:none;">
		<th width="160">smarty缓存：</th>
		<td>
		    <input type="radio" name="issmartycache" value="1" id="RadioGroup4_0" <?php if ($this->_tpl_vars['config']['issmartycache'] == '1'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup4_0">开启</label>&nbsp;&nbsp;
		    <input type="radio" name="issmartycache" value="2" id="RadioGroup4_1" <?php if ($this->_tpl_vars['config']['issmartycache'] == '2'): ?>checked<?php endif; ?>>
		    <label for="RadioGroup4_1">关闭</label>&nbsp;&nbsp;
		  </td>
          <td width="160">issmartycache</td>
		</tr>
        <tr style="display:none;">
        <th width="160">smarty缓存时间：</th>
		<td>
		    <input class="input-text tips_class" type="text" name="smartycachetime" id="smartycachetime" value="<?php echo $this->_tpl_vars['config']['smartycachetime']; ?>
" size="20" maxlength="255"/><font color="gray" style="display:none">秒为单位,一般为3600秒</font>
		  </td>
           <td width="160">smartycachetime</td>
		</tr>        
        <tr>
            <td colspan="3" align="center">
            <input class="admin_submit4" id="cacheconfig" type="button" name="mapconfig" value="提交" />&nbsp;&nbsp;
            <input class="admin_submit4" type="reset" value="重置" /></td>
        </tr>
    </table>  
</div>
</div>
</div>
<script> 
var $switchtag = $("div.main_tag ul li");
$switchtag.click(function(){
	$(this).addClass("on").siblings().removeClass("on");
	var index = $switchtag.index(this);
	$("div.tag_box > div")
		.eq(index).show()
		.siblings().hide();
});

$(".tips_class").hover(function(){ 
	var msg_id=$(this).attr('id'); 
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.tips(msg, this, {
		guide: 1, 
		style: ['background-color:#F26C4F; color:#fff;top:-7px', '#F26C4F']
		}); 
	} 
},function(){
	var msg_id=$(this).attr('id');
	var msg=$('#'+msg_id+' + font').html();
	if($.trim(msg)!=''){
		layer.closeTips();
	} 
});
getmapnoshowcont('map_container',"<?php if ($this->_tpl_vars['config']['map_x']): ?><?php echo $this->_tpl_vars['config']['map_x']; ?>
<?php else: ?>116.404<?php endif; ?>","<?php if ($this->_tpl_vars['config']['map_y']): ?><?php echo $this->_tpl_vars['config']['map_y']; ?>
<?php else: ?>39.915<?php endif; ?>","map_x","map_y");
$(function(){  
	$("#getclick").click(function(){
		$('#getmapxy').toggle();
		var bodycont=$('#getmapxy').css("display");
		if(bodycont=="none"){
			$(this).html("点击获取坐标");
		}else{
			$(this).html("关闭获取坐标");
		}
	})
	$("#cacheconfig").click(function(){
		$.post("index.php?m=config&c=save",{
			config : $("#cacheconfig").val(),
			ismemcache : $("input[name=ismemcache]:checked").val(),
			issmartycache : $("input[name=issmartycache]:checked").val(),
			memcachehost : $("input[name=memcachehost]").val(),
			memcacheport : $("input[name=memcacheport]").val(),
			memcachetime : $("input[name=memcachetime]").val(),
			smartycachetime : $("input[name=smartycachetime]").val(),
			webcache : $("input[name=webcache]:checked").val(),
			pytoken : $("#pytoken").val(),
			webcachetime : $("input[name=webcachetime]").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#mapconfig").click(function(){
		$.post("index.php?m=config&c=save",{
			config : $("#mapconfig").val(),
			map_tocity : $("input[name=map_tocity]:checked").val(),
			map_key : $("#map_key").val(),
			pytoken : $("#pytoken").val(),
			map_x : $("#map_x").val(),
			map_y : $("#map_y").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#regconfig").click(function(){
		$.post("index.php?m=config&c=save",{
			config : $("#regconfig").val(),
			sy_webistration : $("#sy_webistration").val()
		},function(data,textStatus){ 
			parent.layer.msg('修改成功！', 2,9);return false;
		});
	});
	$("#otherconfig").click(function(){
		$.post("index.php?m=config&c=save",{
			config : $("#otherconfig").val(),
			sy_safekey : $("#sy_safekey").val(),
			sy_istemplate : $("input[name=sy_istemplate]:checked").val(),
			sy_bannedip : $("#sy_bannedip").val(),
			sy_fkeyword_all : $("#sy_fkeyword_all").val(),
			sy_bannedip_alert : $("#sy_bannedip_alert").val(),
			sy_regname : $("#sy_regname").val(),
			pytoken : $("#pytoken").val(),
			sy_fkeyword : $("#sy_fkeyword").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
	$("#codeconfig").click(function(){
		var codewebarr="";
		$("input[name=code_web]:checked").each(function(){
			if(codewebarr==""){codewebarr=$(this).val();}else{codewebarr=codewebarr+","+$(this).val();}
		}); 
		$.post("index.php?m=config&c=save",{
			config : $("#codeconfig").val(),
			code_web : codewebarr,
			code_type : $("input[name=code_type]:checked").val(),
			code_filetype : $("input[name=code_filetype]:checked").val(),
			code_width : $("#code_width").val(),
			code_height : $("#code_height").val(),
			pytoken : $("#pytoken").val(),
			code_strlength:$("#code_strlength").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	}); 
	$("#config").click(function(){
		$.post("index.php?m=config&c=save",{
			config : $("#config").val(),
			sy_webname : $("#sy_webname").val(),
			sy_weburl : $("#sy_weburl").val(),
			sy_webkeyword : $("#sy_webkeyword").val(),
			sy_seo_rewrite : $("input[name=sy_seo_rewrite]:checked").val(), 
			sy_linksq : $("input[name=sy_linksq]:checked").val(),
			sy_webmeta : $("#sy_webmeta").val(),
			sy_webcopyright : $("#sy_webcopyright").val(),
			sy_webemail : $("#sy_webemail").val(),
			sy_webrecord : $("#sy_webrecord").val(),
			sy_webtel : $("#sy_webtel").val(),
			sy_qq : $("#sy_qq").val(),
			sy_freewebtel : $("#sy_freewebtel").val(),
			sy_listnum : $("#sy_listnum").val(),
			sy_webadd : $("#sy_webadd").val(),
			sy_rand : $("#sy_rand").val(),
			sy_city_online: $("input[name=sy_city_online]:checked").val(),
			sy_webclose: $("#sy_webclose").val(),
			sy_indexcity: $("#sy_indexcity").val(),
			sy_onedomain: $("#sy_onedomain").val(),
			sy_indexdomain: $("#sy_indexdomain").val(),
			sy_web_online: $("input[name=sy_web_online]:checked").val(),
			pytoken : $("#pytoken").val(),
			sy_web_site: $("input[name=sy_web_site]:checked").val()
		},function(data,textStatus){ 
			config_msg(data); 
		});
	});
});
</script>
</div>
</body>
</html>