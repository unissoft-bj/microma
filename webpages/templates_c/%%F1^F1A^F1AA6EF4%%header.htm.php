<?php /* Smarty version 2.6.26, created on 2014-10-20 16:35:38
         compiled from C:%5CUsers%5Cycyn521%5Cgit%5Cmicroma%5Cwebpages//template/default/header.htm */ ?>
<div class="top icon3">
  <div class="top_cot">
   <div class="top_cot_content icon3">
    <div class="top_left fl">��ӭ����<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
��&nbsp;| <a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/wap" class="wap_icon">�ֻ�վ</a></div>
    <div class="top_right fr yundown"> 
      <SCRIPT LANGUAGE='JavaScript' src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=includejs&c=RedLoginHead'></SCRIPT> 
      <a onClick="setHomepage('<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
');" href="javascript:;">��Ϊ��ҳ</a> | <a href="javascript:addwebfav('<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
','<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
')" >�����ղ�</a> </div>
  </div>
</div>
</div>
<div class="header">
  <div class="logo fl"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_logo']; ?>
" class="png"></a></div>
  <div class="header_city fl"> 
    <SCRIPT LANGUAGE='JavaScript' src='<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php?m=includejs&c=Site'></SCRIPT> 
  </div>
  <div class="header_seach fr">
    <form action="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/index.php" method="get" onsubmit="return check_keyword('��������');">
      <input type="hidden" name="m" value="com" />
      <input type="hidden" name="c" value="search" id="search" />
      <input type="text" id="keyword" name="keyword" class="header_seach_txt icon2 placeholder" value='' placeholder='��������'>
      <div class="header_seach_find">
      <span id='search_name'>�ҹ���</span>
      <div class="header_seach_find_list" style="display:none">
		  <a href="javascript:void(0)" onclick="top_search('com','�ҹ���');$('#search').attr('name','c');">>�ҹ���</a>
		  <a href="javascript:void(0)" onclick="top_search('user','���˲�');$('#search').attr('name','c');">>���˲�</a>
		  <a href="javascript:void(0)" onclick="top_search('tiny','΢����');$('#search').attr('name','');">>΢����</a>
		  <a href="javascript:void(0)" onclick="top_search('news','����');$('#search').attr('name','');" style="display:none">>����</a>
		  <a href="javascript:void(0)" onclick="top_search('once','΢��Ƹ');$('#search').attr('name','');">>΢��Ƹ</a>
      </div>
      </div>
      <input type="submit" value="" class="header_seach_sub">
    </form>
    <div class="header_seach_tag">�ؼ��֣�<?php $_from = $this->_tpl_vars['top_key']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['top_key']):
?> <a href="<?php echo $this->_tpl_vars['top_key']['url']; ?>
"><?php echo $this->_tpl_vars['top_key']['key_name']; ?>
</a><?php endforeach; endif; unset($_from); ?> </div>
  </div>
</div>
<div class="nav icon3"> 
<div class="nav_bg2">
<div class="nav_cont_content icon3">
  <div class="nav_cont">
    <ul class="nav_list">
      <?php $_from = $this->_tpl_vars['navlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navlist']):
?>
      <li class="<?php echo $this->_tpl_vars['navlist']['navclass']; ?>
"> <a href="<?php echo $this->_tpl_vars['navlist']['url']; ?>
" <?php if ($this->_tpl_vars['navlist']['eject']): ?> target="_blank"<?php endif; ?>> <em></em><span style="<?php if ($this->_tpl_vars['navlist']['color']): ?>color:<?php echo $this->_tpl_vars['navlist']['color']; ?>
;<?php endif; ?><?php if ($this->_tpl_vars['navlist']['bold'] == 1): ?>font-weight:bolder;<?php endif; ?>"><?php echo $this->_tpl_vars['navlist']['name']; ?>
</span> </a> 
      <div class="nav_icon">
      <?php if ($this->_tpl_vars['navlist']['model'] == 'new'): ?>
      <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/new.gif">
      <?php elseif ($this->_tpl_vars['navlist']['model'] == 'hot'): ?>
      <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/hotn.gif">
      <?php endif; ?></div>
      </li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  <div class="nav_right_content">
  <div class="nav_right icon3">
    <div class="nav_right_a"> <?php $_from = $this->_tpl_vars['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?> <a href="<?php echo $this->_tpl_vars['nav']['url']; ?>
" style=" position:relative;<?php if ($this->_tpl_vars['nav']['color']): ?>color:<?php echo $this->_tpl_vars['nav']['color']; ?>
;<?php endif; ?><?php if ($this->_tpl_vars['nav']['bold'] == 1): ?>font-weight:bolder;<?php endif; ?>"><?php echo $this->_tpl_vars['nav']['name']; ?>
      <div class="nav_icon">
      <?php if ($this->_tpl_vars['nav']['model'] == 'new'): ?>
      <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/new.gif">
      <?php elseif ($this->_tpl_vars['nav']['model'] == 'hot'): ?>
      <img src="<?php echo $this->_tpl_vars['style']; ?>
/images/hotn.gif">
      <?php endif; ?></div></a> 
      
    <?php endforeach; endif; unset($_from); ?> </div>
  </div>
  </div>
   </div>
    </div>
</div>
<!--header  end-->