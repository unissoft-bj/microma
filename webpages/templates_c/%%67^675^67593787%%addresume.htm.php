<?php /* Smarty version 2.6.26, created on 2014-09-11 01:51:33
         compiled from wap/member/user/addresume.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'wap/member/user/addresume.htm', 315, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/member/header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js" language="javascript"></script>
<script src="<?php echo $this->_tpl_vars['wapstyle']; ?>
/js/resume.js" language="javascript"></script>
<script>var weburl="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
";</script>
<div class="resume-cont"> <a href="javascript:checkshow('info');" id="infobutton" class="resume-cont_p" style="display:none">
  <div class="resume-cont_h1" ><span>��������</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="info">
    <div class="resume-cont_h2" onclick="checkhide('info');"><span>��������</span></div>
    <div class="resume-cont_wate">
    <form action="index.php?c=info" method="post" onsubmit="return checkinfo()">
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> �� ��</dt>
        <dd>
          <input type="text" name="name" value="<?php echo $this->_tpl_vars['resume']['name']; ?>
" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> �� ��</dt>
        <dd>
          <div class="mLeft12 relative">
            <div class="selectOption" style="width:100%">
              <select name="sex">
              <?php $_from = $this->_tpl_vars['userdata']['user_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['resume']['sex'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
          </div>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><?php if ($this->_tpl_vars['config']['user_idcard'] == '1'): ?><font color="#ff0000">*</font><?php endif; ?>���֤����</dt>
        <dd>
          <input type="text" name="idcard" value="<?php echo $this->_tpl_vars['resume']['idcard']; ?>
" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> ��������</dt>
        <dd>
          <input type="text" name="birthday" id="birthday" value="<?php echo $this->_tpl_vars['resume']['birthday']; ?>
" class="reinputText" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')">
          <div style=" margin-left:-12px;">��ʽ��1988-08-08</div>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> �־�ס��</dt>
        <dd>
          <input type="text" name="living" id="living" value="<?php echo $this->_tpl_vars['resume']['living']; ?>
" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> �����̶�</dt>
        <dd>
          <div class="mLeft12 relative">
            <div class="selectOption" style="width:100%">
              <select name="edu">
              <?php $_from = $this->_tpl_vars['userdata']['user_edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['resume']['edu'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
          </div>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> ��������</dt>
        <dd>
          <div class="mLeft12 relative">
            <div class="selectOption" style="width:100%">
              <select name="exp">
              <?php $_from = $this->_tpl_vars['userdata']['user_word']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['resume']['exp'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
          </div>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> �ֻ�</dt>
        <dd>
          <input type="text" name="telphone" id="telphone" value="<?php echo $this->_tpl_vars['resume']['telphone']; ?>
" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> �����ʼ�</dt>
        <dd>
          <input type="text" name="email" id="email" value="<?php echo $this->_tpl_vars['resume']['email']; ?>
"  class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��ߣ�CM��</dt>
        <dd>
          <input type="text" name="height" value="<?php echo $this->_tpl_vars['resume']['height']; ?>
" class="reinputText" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>����</dt>
        <dd>
          <input type="text" name="nationality" value="<?php echo $this->_tpl_vars['resume']['nationality']; ?>
" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>���أ�kg��</dt>
        <dd>
          <input type="text" name="weight" value="<?php echo $this->_tpl_vars['resume']['weight']; ?>
" class="reinputText" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'')">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>����</dt>
        <dd>
          <input type="text" name="telhome" value="<?php echo $this->_tpl_vars['resume']['telhome']; ?>
"  class="reinputText" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'')">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt> ����</dt>
        <dd>
          <div class="mLeft12 relative">
            <div class="selectOption" style="width:100%">
              <select name="marriage">
              <?php $_from = $this->_tpl_vars['userdata']['user_marriage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['resume']['marriage'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
          </div>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>�������ڵ�</dt>
        <dd>
          <input type="text" name="domicile" value="<?php echo $this->_tpl_vars['resume']['domicile']; ?>
" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��ϸ��ַ</dt>
        <dd>
          <input type="text" name="address" value="<?php echo $this->_tpl_vars['resume']['address']; ?>
" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>������ҳ</dt>
        <dd>
          <input type="text" name="homepage" value="<?php echo $this->_tpl_vars['resume']['homepage']; ?>
" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> ��������</dt>
        <dd>
          <textarea class="textAreaMsg tip" name="description" id="description" placeholder="��������ķ�չ����500������" en="Please input your career direction,limited to 500 characters."><?php echo $this->_tpl_vars['resume']['description']; ?>
</textarea>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd>
          <input type="submit" name="submit" value="����" class="reinputText2">
        </dd>
      </dl>
      </form>
    </div>
  </div>
</div>
<div class="resume-cont"> <a href="javascript:checkshow('expect');" id="expectbutton" class="resume-cont_p">
  <div class="resume-cont_h1"><span>��ְ����</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="expect" style="display:none">
    <div class="resume-cont_h2" onclick="checkhide('expect');"><span>��ְ����</span></div>
    <div class="resume-cont_wate">
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font>��������</dt>
        <dd>
          <input type="text" value="<?php echo $this->_tpl_vars['row']['name']; ?>
" id="expect_name" class="reinputText">
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font>����������ҵ</dt>
        <dd>
          <div class="mLeft12 relative">
            <div class="selectOption" style="width:100%">
              <select id="hy">
              <?php $_from = $this->_tpl_vars['industry_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
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
        <dt><font color="#ff0000">*</font>��������ְλ</dt>
        <input type="hidden" id="job_classid" value="<?php echo $this->_tpl_vars['row']['job_classid']; ?>
" />
        <dd>
              <input type="button" id="jobclassbutton" value="<?php echo $this->_tpl_vars['jobname']; ?>
" class="reinputText" onclick="checkshowjob();" style="height:28px; background:#fff"/>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font>���������ص�</dt>
        <dd>
          <div class="mLeft12 relative">
            <div class="selectOption" style="width:31%">
              <select id="provinceid" onchange="checkcity(this.value,'1');">
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
            <div class="selectOption" style="width:31%">
              <select  id="cityid" onchange="checkcity(this.value,'2');">
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
            <div class="selectOption" style="width:31%">
              <select id="three_cityid">
                <option value="">��ѡ��</option>
                <?php $_from = $this->_tpl_vars['city_type'][$this->_tpl_vars['row']['cityid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['row']['three_cityid'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['city_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
          </div>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font> ������нˮ</dt>
        <dd>
          <div class="mLeft12 relative">
            <div class="selectOption" style="width:70%">
              <select id="salary">
				<?php $_from = $this->_tpl_vars['userdata']['user_salary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['row']['salary'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
            Ԫ/�� </div>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt><font color="#ff0000">*</font>����ʱ��</dt>
        <dd>
          <div class="mLeft12 relative">
            <div class="selectOption" style="width:100%">
              <select id="report">
				<?php $_from = $this->_tpl_vars['userdata']['user_report']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
" <?php if ($this->_tpl_vars['row']['report'] == $this->_tpl_vars['v']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']]; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
          </div>
        </dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd>
        <input type="hidden" id="eid" value="<?php echo $this->_tpl_vars['row']['eid']; ?>
" />
          <input type="submit" onclick="saveexpect();" value="����" class="reinputText2">
        </dd>
      </dl>
    </div>
  </div>
</div>
<div class="resume-cont"> <a href="javascript:checkshow('skill');" id="skillbutton" class="resume-cont_p">
  <div class="resume-cont_h1" ><span>רҵ����</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="skill" style="display:none">
    <div class="resume-cont_h2" onclick="checkhide('skill');"><span>רҵ����</span></div>
	<?php $_from = $this->_tpl_vars['skill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <div class="resume-cont_wate resume-cont_wate_yt">
      <dl class="resume-cont_wate_list">
        <dt>�������</dt>
        <dd><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']['skill']]; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>�����̶ȣ�</dt>
        <dd><?php echo $this->_tpl_vars['userclass_name'][$this->_tpl_vars['v']['ing']]; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>�������ƣ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['name']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>����ʱ�䣺</dt>
        <dd><?php echo $this->_tpl_vars['v']['longtime']; ?>
����</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd> <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=skill&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�޸�</a>
        <a class="resume_xg_a resume_sc" href="index.php?c=delresume&type=skill&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">ɾ��</a> </dd>
      </dl>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="resume-cont_wate resume-cont_wate_yt">
    <dl class="resume-cont_wate_list">
    <a class="resume_xg_a resume_tj" href="index.php?c=addresumeson&type=skill&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
">���</a>
    </dl>
    </div>
  </div>
</div>
<div class="resume-cont"> <a href="javascript:checkshow('work');" id="workbutton" class="resume-cont_p">
  <div class="resume-cont_h1" ><span>��������</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="work" style="display:none">
    <div class="resume-cont_h2" onclick="checkhide('work');"><span>��������</span></div>
	<?php $_from = $this->_tpl_vars['work']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <div class="resume-cont_wate resume-cont_wate_yt">
      <dl class="resume-cont_wate_list">
        <dt>��λ���ƣ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['name']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>����ʱ�䣺</dt>
        <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
��<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>���ڲ��ţ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['department']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>����ְλ��</dt>
        <dd><?php echo $this->_tpl_vars['v']['title']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>�������ݣ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['content']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd> <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=work&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�޸�</a>
        <a class="resume_xg_a resume_sc" href="index.php?c=delresume&type=work&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">ɾ��</a> </dd>
      </dl>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="resume-cont_wate resume-cont_wate_yt">
    <dl class="resume-cont_wate_list">
    <a class="resume_xg_a resume_tj" href="index.php?c=addresumeson&type=work&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
">���</a>
    </dl>
    </div>
  </div>
</div>
<div class="resume-cont"> <a href="javascript:checkshow('project');" id="projectbutton" class="resume-cont_p">
  <div class="resume-cont_h1" ><span>��Ŀ����</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="project" style="display:none">
    <div class="resume-cont_h2" onclick="checkhide('project');"><span>��Ŀ����</span></div>
	<?php $_from = $this->_tpl_vars['project']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <div class="resume-cont_wate resume-cont_wate_yt">
      <dl class="resume-cont_wate_list">
        <dt>��Ŀ���ƣ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['name']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��Ŀʱ�䣺</dt>
        <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
��<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��Ŀ������</dt>
        <dd><?php echo $this->_tpl_vars['v']['sys']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>����ְλ��</dt>
        <dd><?php echo $this->_tpl_vars['v']['title']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��Ŀ���ݣ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['content']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd> <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=project&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�޸�</a>
        <a class="resume_xg_a resume_sc" href="index.php?c=delresume&type=project&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">ɾ��</a> </dd>
      </dl>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="resume-cont_wate resume-cont_wate_yt">
    <dl class="resume-cont_wate_list">
    <a class="resume_xg_a resume_tj" href="index.php?c=addresumeson&type=project&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
">���</a>
    </dl>
    </div>
  </div>
</div>
<div class="resume-cont"> <a href="javascript:checkshow('edu');" id="edubutton" class="resume-cont_p">
  <div class="resume-cont_h1" ><span>��������</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="edu" style="display:none">
    <div class="resume-cont_h2" onclick="checkhide('edu');"><span>��������</span></div>
	<?php $_from = $this->_tpl_vars['edu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <div class="resume-cont_wate resume-cont_wate_yt">
      <dl class="resume-cont_wate_list">
        <dt>ѧУ���ƣ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['name']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��Уʱ�䣺</dt>
        <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
��<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��ѧרҵ��</dt>
        <dd><?php echo $this->_tpl_vars['v']['specialty']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>����ְλ��</dt>
        <dd><?php echo $this->_tpl_vars['v']['title']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>רҵ������</dt>
        <dd><?php echo $this->_tpl_vars['v']['content']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd> <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=edu&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�޸�</a>
        <a class="resume_xg_a resume_sc" href="index.php?c=delresume&type=edu&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">ɾ��</a> </dd>
      </dl>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="resume-cont_wate resume-cont_wate_yt">
    <dl class="resume-cont_wate_list">
    <a class="resume_xg_a resume_tj" href="index.php?c=addresumeson&type=edu&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
">���</a>
    </dl>
    </div>
  </div>
</div>
<div class="resume-cont"> <a href="javascript:checkshow('training');" id="trainingbutton" class="resume-cont_p">
  <div class="resume-cont_h1" ><span>��ѵ����</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="training" style="display:none">
    <div class="resume-cont_h2" onclick="checkhide('training');"><span>��ѵ����</span></div>
	<?php $_from = $this->_tpl_vars['training']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <div class="resume-cont_wate resume-cont_wate_yt">
      <dl class="resume-cont_wate_list">
        <dt>��ѵ���ģ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['name']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��ѵʱ�䣺</dt>
        <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
��<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��ѵ����</dt>
        <dd><?php echo $this->_tpl_vars['v']['title']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��ѵ������</dt>
        <dd><?php echo $this->_tpl_vars['v']['content']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd> <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=training&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�޸�</a>
        <a class="resume_xg_a resume_sc" href="index.php?c=delresume&type=training&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">ɾ��</a> </dd>
      </dl>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="resume-cont_wate resume-cont_wate_yt">
    <dl class="resume-cont_wate_list">
    <a class="resume_xg_a resume_tj" href="index.php?c=addresumeson&type=training&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
">���</a>
    </dl>
    </div>
  </div>
</div>
<div class="resume-cont"> <a href="javascript:checkshow('cert');" id="certbutton" class="resume-cont_p">
  <div class="resume-cont_h1" ><span>֤��</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="cert" style="display:none">
    <div class="resume-cont_h2" onclick="checkhide('cert');"><span>֤��</span></div>
	<?php $_from = $this->_tpl_vars['cert']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <div class="resume-cont_wate resume-cont_wate_yt">
      <dl class="resume-cont_wate_list">
        <dt>֤��ȫ�ƣ�</dt>
        <dd><?php echo $this->_tpl_vars['v']['name']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>��Чʱ�䣺</dt>
        <dd><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
��<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>�䷢��λ��</dt>
        <dd><?php echo $this->_tpl_vars['v']['title']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>֤��������</dt>
        <dd><?php echo $this->_tpl_vars['v']['content']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd> <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=cert&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�޸�</a>
        <a class="resume_xg_a resume_sc" href="index.php?c=delresume&type=cert&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">ɾ��</a> </dd>
      </dl>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="resume-cont_wate resume-cont_wate_yt">
    <dl class="resume-cont_wate_list">
    <a class="resume_xg_a resume_tj" href="index.php?c=addresumeson&type=cert&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
">���</a>
    </dl>
    </div>
  </div>
</div>
<div class="resume-cont"> <a href="javascript:checkshow('other');" id="otherbutton" class="resume-cont_p">
  <div class="resume-cont_h1" ><span>������Ϣ</span><i class="resume-icon"></i></div>
  </a>
  <div class="resume-cont_zk" id="other" style="display:none">
    <div class="resume-cont_h2" onclick="checkhide('other');"><span>������Ϣ</span></div>
	<?php $_from = $this->_tpl_vars['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <div class="resume-cont_wate resume-cont_wate_yt">
      <dl class="resume-cont_wate_list">
        <dt>�������⣺</dt>
        <dd><?php echo $this->_tpl_vars['v']['title']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>����������</dt>
        <dd><?php echo $this->_tpl_vars['v']['content']; ?>
</dd>
      </dl>
      <dl class="resume-cont_wate_list">
        <dt>&nbsp;</dt>
        <dd> <a class="resume_xg_a resume_xg" href="index.php?c=addresumeson&type=other&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">�޸�</a>
        <a class="resume_xg_a resume_sc" href="index.php?c=delresume&type=other&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">ɾ��</a> </dd>
      </dl>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    <div class="resume-cont_wate resume-cont_wate_yt">
    <dl class="resume-cont_wate_list">
    <a class="resume_xg_a resume_tj" href="index.php?c=addresumeson&type=other&eid=<?php echo $this->_tpl_vars['row']['id']; ?>
">���</a>
    </dl>
    </div>
  </div>
</div>

<div id="joblist" class="mask selecter hide " style="display:none; background-color: rgba(51, 51, 51, 0.8); height:100%; width:auto;right: 0;top:0;">
<!--<div class="f_left" style="width: 320px; height: auto;">
<i class="arrow_icon" style="position: relative; top: 342px; transition-property: top; transition-duration: 0.6s; transition-timing-function: ease; " onclick="Close();">
<i></i>
<i></i>
</i>
</div>-->
<div class="f_body" style="float: right; overflow: hidden; background: none repeat scroll 0% 0% transparent; width: 280px;">
<h2 style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">ְλ���<button class="ok selectorOk" onclick="realy();">ȷ��</button>
<button class="clear_sub selectorClear" onclick="Close();">���</button>
</h2>

<div class="contentbody position" style="transform: translate(0px, 0px); transition-duration: 0.4s; transition-timing-function: ease; transform-style: preserve-3d; backface-visibility: hidden;">
<?php $_from = $this->_tpl_vars['job_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<dl class="lookshow onelist" id="job<?php echo $this->_tpl_vars['v']; ?>
" style="position:relative">
<dt class="current position" onclick="checkjob1('<?php echo $this->_tpl_vars['v']; ?>
');"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['v']]; ?>
</dt>
<dd id="joblist<?php echo $this->_tpl_vars['v']; ?>
" class="lookhide" style="display: none;">
    <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['v']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
    <ul id="u2000" style="position:relative;" data-c="show">
    <li onclick="checkjob2('<?php echo $this->_tpl_vars['val']; ?>
');"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['val']]; ?>
</li>
    <div class="post_show_three" id="jobpost<?php echo $this->_tpl_vars['val']; ?>
" style="display: none;">
        <?php $_from = $this->_tpl_vars['job_type'][$this->_tpl_vars['val']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
        <li>
        <input id="r<?php echo $this->_tpl_vars['value']; ?>
" data="<?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['value']]; ?>
" type="checkbox" value="<?php echo $this->_tpl_vars['value']; ?>
" name="jobclass" onclick="checked_input('<?php echo $this->_tpl_vars['value']; ?>
');">
        <label for="r<?php echo $this->_tpl_vars['value']; ?>
"><?php echo $this->_tpl_vars['job_name'][$this->_tpl_vars['value']]; ?>
</label>
        </li>
        <?php endforeach; endif; unset($_from); ?>
    </div>
    </ul>
    <?php endforeach; endif; unset($_from); ?>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>
</div>
</div>
</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wap_style'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 