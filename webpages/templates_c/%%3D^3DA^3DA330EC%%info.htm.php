<?php /* Smarty version 2.6.26, created on 2014-10-09 20:11:21
         compiled from wap/member/com/info.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/cheader.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script> 
<script src="<?php echo $this->_tpl_vars['wapstyle']; ?>
/js/jobadd.js" language="javascript"></script> 
<script>var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";</script>
<section class="wap_member">
  <div class="wap_member_comp_h1" style="position:relative"><span>��ҵ����</span><em class="wap_member_comp_em">����<font color="#ff0000">*</font> ��Ϊ������</em></div>
  <div class="resume-cont">
    <div class="resume-cont_zk">
      <div class="resume-cont_wate">
      <form method="post" action="" onsubmit="return checkinfo();">
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font>��ҵȫ�ƣ�</dt>
          <dd>
            <input type="text" name="name" id='name' value="<?php echo $this->_tpl_vars['row']['name']; ?>
" class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font>������ҵ��</dt>
          <dd>
            <div class="mLeft12 relative">
              <div class="selectOption" style="width:100%">
              <select name="hy">
				<?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['row']['hy'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['industry_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
              </div>
            </div>
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font>��ҵ���ʣ�</dt>
          <dd>
            <div class="mLeft12 relative">
              <div class="selectOption" style="width:100%">
              <select name="pr">
				<?php $_from = $this->_tpl_vars['comdata']['job_pr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['row']['pr'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
              </div>
            </div>
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font> ��ҵ��ַ��</dt>
          <dd>
            <div class="mLeft12 relative">
            <div class="selectOption" style="width:30%">
              <select name="provinceid" onchange="checkcity(this.value,'1');">
                <option value="">��ѡ��</option>
                <?php $_from = $this->_tpl_vars['city_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['row']['provinceid'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
            <div class="selectOption" style="width:30%">
              <select name="cityid" id="cityid">
                <option value="">��ѡ��</option>
                <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['row']['provinceid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['row']['cityid'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
            </div>
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font> ��ҵ��ģ��</dt>
          <dd>
            <div class="mLeft12 relative">
              <div class="selectOption" style="width:100%">
              <select name="mun">
				<?php $_from = $this->_tpl_vars['comdata']['job_mun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['row']['mun'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['comclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
              </div>
            </div>
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font> ��˾��ַ��</dt>
          <dd>
            <input type="text" name="address" id='address' value="<?php echo $this->_tpl_vars['row']['address']; ?>
" class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font> �̶��绰��</dt>
          <dd>
           <input type="text" name="linkphone" id='linkphone' value="<?php echo $this->_tpl_vars['row']['linkphone']; ?>
" class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font> ��ϵ�ʼ���</dt>
          <dd>
            <input type="text" name="linkmail" id='linkmail' value="<?php echo $this->_tpl_vars['row']['linkmail']; ?>
" class="reinputText">
            �޸ĺ��ʼ���������֤ </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt><font color="#ff0000">*</font> ��ҵ��飺</dt>
          <dd>
           <textarea class="textAreaMsg tip" id="content" name="content" placeholder="������ְλ����500������" en="Please input your career direction,limited to 500 characters."><?php echo $this->_tpl_vars['row']['content']; ?>
</textarea>
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt>����ʱ�䣺</dt>
          <dd>
            <input type="text" name="sdate" value="<?php echo $this->_tpl_vars['row']['sdate']; ?>
" class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt>ע���ʽ�</dt>
          <dd>
            <input type="text" name="money" value="<?php echo $this->_tpl_vars['row']['money']; ?>
" class="reinputText" style="width:70%">��Ԫ
          </dd>
        </dl>
       
        <dl class="resume-cont_wate_list">
          <dt>�������룺</dt>
          <dd>
            <input type="text" name="zip" value="<?php echo $this->_tpl_vars['row']['zip']; ?>
" class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt>�� ϵ �ˣ�</dt>
          <dd>
            <input type="text" name="linkman" value="<?php echo $this->_tpl_vars['row']['linkman']; ?>
" class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt>����ְλ��</dt>
          <dd>
            <input type="text" name="linkjob" value="<?php echo $this->_tpl_vars['row']['linkjob']; ?>
" class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt>�� ϵ QQ��</dt>
          <dd>
            <input type="text" name="linkqq" value="<?php echo $this->_tpl_vars['row']['linkqq']; ?>
"class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt>��ϵ�绰��</dt>
          <dd>
            <input type="text" name="linktel" value="<?php echo $this->_tpl_vars['row']['linktel']; ?>
" class="reinputText" style="width:70%">
            �޸ĺ��ʼ���������֤</dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt>��ҵ��ַ��</dt>
          <dd>
            <input type="text" name="website" value="<?php echo $this->_tpl_vars['row']['website']; ?>
" class="reinputText">
          </dd>
        </dl>
        <dl class="resume-cont_wate_list">
          <dt>&nbsp;</dt>
          <dd>
            <input type="submit" name="submit" value="�ύ����" class="reinputText2">
          </dd>
        </dl>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 