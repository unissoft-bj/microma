<?php /* Smarty version 2.6.26, created on 2014-09-10 23:42:11
         compiled from ../template/member/user/left.htm */ ?>
<div class="mian_left mt20 fltL">
  <div class="mian_left_top">
    <div class="userinfobox mt10">
      <dl class="per_Data">
        <dt> <a href="index.php?c=uppic"> <img src=".<?php echo $this->_tpl_vars['user_photo']; ?>
" border="0" height="100" width="80" onerror="showImgDelay(this,'<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/<?php echo $this->_tpl_vars['config']['sy_member_icon']; ?>
',2);"/></a> </dt>
        <dd>
          <div class="text-name"><span><?php echo $this->_tpl_vars['username']; ?>
</span></div>
          <div class="text"><span>认证：</span><?php if ($this->_tpl_vars['idcard_pic'] && $this->_tpl_vars['idcard_status'] == '1'): ?><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/yun_m_rz.gif"><?php else: ?><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/yun_m_wrz.gif"><?php endif; ?></div>
          <div class="text mt5"><span><?php echo $this->_tpl_vars['useremail']; ?>
</span></div>
          <div class="text_xx"><a href="index.php?c=uppic" title="更换形象照">更换形象照</a></div>
          
      <span class="header_Remind header_Remind_hover" onMouseMove="Remind_show();"> <em class="header_Remind_em">提醒（<b><?php echo $this->_tpl_vars['cookie']['remind_num']; ?>
</b>）</em>
      <div class="header_Remind_list" style="display:none;">
      <div class="header_Remind_close"><a href="javascript:Remind_hide();" title="关闭"></a></div>
      <p class="header_Remind_icon1"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=msg">邀请面试(<font color="#FF0000"><?php echo $this->_tpl_vars['cookie']['userid_msg']; ?>
</font>)</a></p>
      <p class="header_Remind_icon2"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/friend/index.php?c=applyfriend">邀请好友(<font color="#FF0000"><?php echo $this->_tpl_vars['cookie']['friend1']; ?>
</font>)</a></p>
      <p class="header_Remind_icon3"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=xin">私信(<font color="#FF0000"><?php echo $this->_tpl_vars['cookie']['friend_message1']; ?>
</font>)</a></p>
      <p class="header_Remind_icon4"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=seemessage">站内信(<font color="#FF0000"><?php echo $this->_tpl_vars['cookie']['message1']; ?>
</font>)</a></p>
      <p class="header_Remind_icon5"><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/member/index.php?c=commsg">企业回复咨询(<font color="#FF0000"><?php echo $this->_tpl_vars['cookie']['usermsg']; ?>
</font>)</a></p>
 
   </div>
      </span> 
        </dd>
      </dl>
    </div> 
    <div class="clear"></div>
    <div class="per_Data_msg"><a href="index.php?c=info" title="个人基本信息">个人基本信息</a></div>
    <div class="clear"></div>
    <div class="left_nav">
      <ul>
        <li><a href="index.php?c=info">修改资料</a></li>
        <li class="left_nav_end"> <a href="index.php?c=passwd">修改密码</a></li>
        <li><a href="index.php?c=verifica">身份验证</a></li>
        <li class="left_nav_end"> <a href="index.php?c=message">留言反馈</a> </li>
      
      </ul>
      <div class="clear"></div>
      <div class="per_Data_msg perleft_nav_logout"><a href="javascript:void(0)" onclick="logout('index.php?c=logout')" title="安全退出">安全退出</a></div>
    </div>
  </div>
 
  <div class="mian_left_top mt10">
    <div class="mian_left_h1">快捷方式</div>
    <div class="subnav_left">
      <dl class="subnav_left_list">
        <dt><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/icon3.jpg"></dt>
        <dd> <a href="index.php?c=seemessage">消息管理</a>
          <p>设置账号的相关信息</p>
        </dd>
      </dl>
      <dl class="subnav_left_list">
        <dt><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/icon5.jpg"></dt>
        <dd><a href="index.php?c=my_question&type=0">问答管理</a>
          <p>向网友咨询心中疑问</p>
        </dd>
      </dl>
      <dl class="subnav_left_list">
        <dt><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/icon6.jpg"></dt>
        <dd><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/friend/">好友管理</a>
          <p>了解职场上的相关问题</p>
        </dd>
      </dl>
      <dl class="subnav_left_list">
        <dt><img src="<?php echo $this->_tpl_vars['userstyle']; ?>
/images/icon1.jpg"></dt>
        <dd><a href="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
">返回首页</a>
          <p>返回<?php echo $this->_tpl_vars['config']['sy_webname']; ?>
首页</p>
        </dd>
      </dl>
    </div>
  </div>
</div>