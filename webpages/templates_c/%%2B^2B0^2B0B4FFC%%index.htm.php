<?php /* Smarty version 2.6.26, created on 2014-11-14 19:25:18
         compiled from default/news/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'default/news/index.htm', 68, false),array('modifier', 'count', 'default/news/index.htm', 80, false),array('modifier', 'date_format', 'default/news/index.htm', 96, false),)), $this); ?>
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
/style/news.css" type="text/css">
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
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="yun_content">
<div class="current_Location icon"> 您当前的位置：<a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">首页</a> > 职场资讯</div>
<div class="news_Slideshow fl">
	<?php $_from = $this->_tpl_vars['adlist_16']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['adlist_16']):
?>
	<input name="picurl" id="<?php echo $this->_tpl_vars['key']+1; ?>
" type="hidden" value="<?php echo $this->_tpl_vars['adlist_16']['pic']; ?>
+<?php echo $this->_tpl_vars['adlist_16']['src']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>
	<script language='javascript'>
		linkarr = new Array();
		picarr = new Array();
		textarr = new Array();
		var swf_width=284;
		var swf_height=210;
		var files = "";
		var links = "";
		var texts = "";
		var url;
		$("input[name=picurl]").each(function(){
			url = this.value.split("+");
			linkarr[this.id] = url[1];
			picarr[this.id]  = url[0];
		});
		for(i=1;i<picarr.length;i++){
			if(files=="") files = picarr[i];
			else files += "|"+picarr[i];
		}
		for(i=1;i<linkarr.length;i++){
			if(links=="") links = escape(linkarr[i]);
			else links += "|"+escape(linkarr[i]);
		}
		for(i=1;i<textarr.length;i++){
			if(texts=="") texts = textarr[i];
			else texts += "|"+textarr[i];
		}
		document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+swf_height+'">');
		document.write('<param name="movie" value="<?php if ($this->_tpl_vars['config']['sy_indexdomain'] == ""): ?><?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php else: ?><?php echo $this->_tpl_vars['config']['sy_indexdomain']; ?>
<?php endif; ?>/template/default/images/bcastr3.swf"><param name="quality" value="high">');
		document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
		document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_config=0xffffff|2|0x8CA2AD|60|0xffffff|0xff9900|0x000033|2|3|1|_blank">');
		document.write('<embed src="<?php if ($this->_tpl_vars['config']['sy_indexdomain'] == ""): ?><?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
<?php else: ?><?php echo $this->_tpl_vars['config']['sy_indexdomain']; ?>
<?php endif; ?>/template/default/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>');
	</script>
</div>
<div class="news_top_right fr">
<?php $_from = $this->_tpl_vars['news_tian']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news_tian']):
?>
<dl>
<dt><a href="<?php echo $this->_tpl_vars['news_tian']['url']; ?>
" title="<?php echo $this->_tpl_vars['news_tian']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news_tian']['title']; ?>
</a>  <em><?php echo $this->_tpl_vars['news_tian']['datetime']; ?>
</em></dt>
<dd><?php echo ((is_array($_tmp=$this->_tpl_vars['news_tian']['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
 <a href="<?php echo $this->_tpl_vars['news_tian']['url']; ?>
" target="_blank">[详情]</a>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>
<ul>
<?php $_from = $this->_tpl_vars['news_hits']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news_hits']):
?>
<li><a href="<?php echo $this->_tpl_vars['news_hits']['url']; ?>
" title="<?php echo $this->_tpl_vars['news_hits']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news_hits']['title']; ?>
</a><em><?php echo $this->_tpl_vars['news_hits']['datetime']; ?>
</em></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<div class="news_cont fl">
<?php $_from = $this->_tpl_vars['arcgroupright']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arcgroupright']):
?>
<?php if (is_array ( $this->_tpl_vars['arcgroupright']['arclist'] ) || is_array ( $this->_tpl_vars['arcgroupright']['arcpic'] ) && count($this->_tpl_vars['arcgroupright']['arclist']) > 0): ?>
<div class="news_sort_list fl">
	<div><div class="news_sort_title yun_bth_icon"><span><?php echo $this->_tpl_vars['arcgroupright']['name']; ?>
</span></div></div>
    <?php $_from = $this->_tpl_vars['arcgroupright']['arcpic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['acrpicsright']):
?>
    <dl>
        <dt><a href="<?php echo $this->_tpl_vars['acrpicsright']['url']; ?>
" title="<?php echo $this->_tpl_vars['acrpicsright']['title']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['acrpicsright']['s_thumb']; ?>
"  width="89" height="80" alt="<?php echo $this->_tpl_vars['acrpicsright']['title']; ?>
"></a></dt>
        <dd>
        <strong><a  target="_blank" href="<?php echo $this->_tpl_vars['acrpicsright']['url']; ?>
" title="<?php echo $this->_tpl_vars['acrpicsright']['title']; ?>
"><?php echo $this->_tpl_vars['acrpicsright']['title']; ?>
</a></strong>
        <span><?php echo ((is_array($_tmp=$this->_tpl_vars['acrpicsright']['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
...</span><a  target="_blank" href="<?php echo $this->_tpl_vars['acrpicsright']['url']; ?>
">[详细]</a>
        </dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?>
    <ul>
    <?php $_from = $this->_tpl_vars['arcgroupright']['arclist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arclistright']):
?>
        <li class="png">
            <a href="<?php echo $this->_tpl_vars['arclistright']['url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['arclistright']['title']; ?>
"><?php echo $this->_tpl_vars['arclistright']['title']; ?>
</a>
            <em><?php echo ((is_array($_tmp=$this->_tpl_vars['arclistright']['datetime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d") : smarty_modifier_date_format($_tmp, "%m-%d")); ?>
</em>
        </li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
	<div class="news_more fl"><a href="<?php echo $this->_tpl_vars['arcgroupright']['url']; ?>
">[更多]</a></div>
</div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tplstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>