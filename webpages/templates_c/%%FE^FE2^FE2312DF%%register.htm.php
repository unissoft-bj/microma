<?php /* Smarty version 2.6.26, created on 2014-11-13 21:23:41
         compiled from wap/register.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'wapurl', 'wap/register.htm', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/header_cont.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<link rel="stylesheet" type="text/css" href="../ma/css/css.css">
<script type="text/javascript" src="../ma/js/jquery-1.7.1.min.js"></script>
	
    <!-- 
    <ul id="note_menu">
        <li class="left"><a href="/wap/index.php?m=register&usertype=2">Ԥע�����</a></li>
        <li class="right"><a href="/wap/index.php?m=register&usertype=1">�ֳ�ע�����</a></li>
    </ul>
	 -->
<nav class="footer_nav">
<a href="javascript:window.scrollTo(0,0);">TOP</a>
<a href="/wap">��ҳ</a> &nbsp;-<?php if (! $this->_tpl_vars['cookie']['uid']): ?>
&nbsp;
<!--
<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">���˵�¼</a>&nbsp;&nbsp;-
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">��ҵ��¼</a>&nbsp;&nbsp;<br/>
  -->
<?php else: ?>
��ӭ,<a href="member"><strong><?php echo $this->_tpl_vars['cookie']['username']; ?>
</strong> </a>
<?php endif; ?>
</nav>
<br>
<h1> &nbsp;����ͨ����</h1>
<hr>
<iframe  width="100%" frameborder="0" src="/wap/user.php"  height=60/></iframe>
	
<script src="<?php echo $this->_tpl_vars['config']['sy_weburl']; ?>
/js/jquery-1.8.0.min.js"></script>
<script>
//getInfoByRegPhone
//����Ԥע���ֻ� �ж��Ƿ���ע���û�
function getInfoByRegPhone(str)
{
var xmlhttp;
if (str=="")
  {
  //document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	//�õ����صĶ��username ����|���зָ�
    var names=xmlhttp.responseText;
	//����õ��ַ���Ϊ0 �����Ŵ���
	
	if(names==0){
		//alert("===");
		document.getElementById("regInfo").innerHTML="����Ŵ���<br>Ԥע���û���������Ԥע���ֻ��ţ�<br>���������·������ֻ���";
		document.getElementById("yuzhuce1").style.display="none";
		document.getElementById("usertype").value=1;
	}else{
		
		document.getElementById("usertype").value=2;
		document.getElementById("yuzhuce2").style.display="none";
		var array = names.split("|");
	   
	    document.getElementById("username").value=array[0];
	    document.getElementById("phone").value=array[1];
	    document.getElementById("danwei").value=array[2];
	    document.getElementById("zhiwu").value=array[3];
	    if(array[4]=="����"){
	    	document.getElementById("shenfen").innerHTML="<input type=radio name=shenfen value=����  checked=checked>����<input type=radio name=shenfen value=ר�� >ר��<input type=radio name=shenfen value=���� >����<input type=radio name=shenfen value=ý�� >ý��";
	    }
	    if(array[4]=="ר��"){
	    	document.getElementById("shenfen").innerHTML="<input type=radio name=shenfen value=���� >����<input type=radio name=shenfen value=ר��  checked=checked>ר��<input type=radio name=shenfen value=���� >����<input type=radio name=shenfen value=ý�� >ý��";
	    }
	    if(array[4]=="����"){
	    	document.getElementById("shenfen").innerHTML="<input type=radio name=shenfen value=���� >����<input type=radio name=shenfen value=ר�� >ר��<input type=radio name=shenfen value=����  checked=checked>����<input type=radio name=shenfen value=ý�� >ý��";
	    }
	    if(array[4]=="ý��"){
	    	document.getElementById("shenfen").innerHTML="<input type=radio name=shenfen value=���� >����<input type=radio name=shenfen value=ר�� >ר��<input type=radio name=shenfen value=����  >����<input type=radio name=shenfen value=ý��  checked=checked>ý��";
	    }
	    
	}
    
    }
  }

var usertype= document.getElementById("usertype").value;
xmlhttp.open("GET","ajax.php?regPhone="+str+"&usertype="+usertype,true);
xmlhttp.send();
}



//����ע���ֻ� �ж��Ƿ���ע���û�
function getInfoByPhone(str)
{
var xmlhttp;
if (str=="")
  {
  //document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	//�õ����صĶ��username ����|���зָ�
    var names=xmlhttp.responseText;
    var array = names.split("|");
    var inner ="";
    for (var i=0 ; i< array.length-1 ; i++){
    	 inner = inner+"<input type=radio name=username2 value="+array[i]+" onclick=setName(this.value)>"+array[i]+"</input>";
    }
    document.getElementById("username2").innerHTML=inner;
    }
  }

var usertype= document.getElementById("usertype").value;

xmlhttp.open("GET","ajax.php?phone="+str+"&usertype="+usertype,true);
xmlhttp.send();
}

//������֤�� У���ֻ��ź�
function sendMsg()
{
var xmlhttp;
var usertype= document.getElementById("usertype").value;
//var phone= document.getElementById("phone").value;
var phone=$("#phone").val();
phone = isjsMobile(phone);	
if(phone==false){alert('����ȷ��д�ֻ����룡');return false;}
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	document.getElementById("sendmsg").value="��֤�뷢�ͳɹ�";
    document.getElementById("msgInfo").innerHTML=xmlhttp.responseText;
    document.getElementById("regmsg").value=xmlhttp.responseText;
    
    }
  }


xmlhttp.open("GET","ajax.php?sendmsg="+phone+"&usertype="+usertype,true);
xmlhttp.send();
}

//У�����Ϣ����
function checkfrom(){
	
	//У���û���
	var username=$("#username").val();
	if(username==""){
		alert("�û�������Ϊ�գ�");
		return false;
	}else if(username.length<2||username.length>16){
		alert("�û�������Ӧ��2-16λ��");
		return false;
	}
	
	//У���ֻ���
	var phone=$("#phone").val();
	phone = isjsMobile(phone);	
	if(phone==false){alert('����ȷ��д�ֻ����룡');return false;}
	
	//У�������֤��
	/*
	var regmsg=$("#regmsg").val();
	if(regmsg==""){
		alert("У���벻��Ϊ�գ�");
		return false;
	}else if(regmsg.length!=6){
		alert("У���볤��Ӧ��6λ��");
		return false;
	}
	*/
	
}

function isjsMobile(obj){
	if(obj.length!=11) return false;
	else if(obj.substring(0,2)!="13" && obj.substring(0,2)!="15" && obj.substring(0,2)!="18") return false;
	else if(isNaN(obj)) return false;
	else  return true;
}

/**
 * ���ݵ�ѡ��ť���username
 */
function setName(str){
	
	document.getElementById("username").value=str;
}

</script>
<section class="wap_login">
	
	
	<hr>
	
  <form action="" method="post" onSubmit="return checkfrom();">
    <input name="usertype" id ="usertype" type="hidden" value="1"/>
    
     
    <p>
    
      <input name="regphone" id="regphone" type="text" class="input-common placeholder" placeholder="������Ԥע���ֻ���" onblur="return getInfoByRegPhone(this.value);"/>
      <div id="regInfo"></div>
    
    <div id="yuzhuce1" style="display: block;">
    ��
    </div>
    <p>
      <input name="phone" id="phone" type="text" class="input-common placeholder" placeholder="�������ֻ���" onblur="return getInfoByPhone(this.value);"/>
    </p>
    <div id="yuzhuce2" style="display: block;">
    <p>
      <input name="sendmsg" id="sendmsg" type="button"  value="������֤��" size="30" onclick="return sendMsg(this.value);"/> 
      <font id="msgInfo"></font>
    </p>
    <p>
      <input name="regmsg" id="regmsg" type="text" class="input-common placeholder" placeholder="������֤��" />
      <font id="checkMsg"></font>
    </p>
    </div>
    <p>
      <div id="username2"></div>
      <input name="username" id="username" type="text" class="input-common placeholder" placeholder="����" />
      
    </p>
    
    <p>
      
      <input name="danwei" id="danwei" type="text" class="input-common placeholder" placeholder="������λ" />
      
    </p>
    <p>
      	
      <input name="zhiwu" id="zhiwu" type="text" class="input-common placeholder" placeholder="ְ��" />
      
    </p>
    <p class="input-common placeholder" id="shenfen">
      <input type="radio" name="shenfen" value="����" checked=checked>����	
      <input type="radio" name="shenfen" value="ר��" >ר��
      <input type="radio" name="shenfen" value="����" >����
      <input type="radio" name="shenfen" value="ý��" >ý��
      
      
    </p>
    
    <!-- p class="input-common placeholder">
      <input name="baomi0" id="baomi0" type="checkbox" checked/>Ϊ����ǩ��
    </p>
    <p class="input-common placeholder">
      <input name="baomi1" id="baomi1" type="checkbox"  checked/>���ֳ���Ƹ�߹����ҵ���Ϣ
    </p>
     <p class="input-common placeholder">
      <input name="baomi2" id="baomi2" type="checkbox" class="selecter placeholder" />���ֳ�������ְ�߱���
    </p>
     <p class="input-common placeholder">
      <input name="baomi3" id="baomi3" type="checkbox" class=""  checked/>�ö�����ǿ��ȫ��
    </p-->
    <p>
      <input name="email" id="email" type="hidden"class="input-common placeholder" placeholder="����"/>
    </p>
    <p>
      <input name="password" id="password" type="hidden"class="input-common placeholder" placeholder="����"  value="111111"/>
    </p>
    <p>
      <input name="password2" id="password2" type="hidden"class="input-common placeholder" placeholder="�ظ�����" value="111111"/>
    </p>
    <input type="submit" name="submit" value="ǩ��" class="btn-large" />
  </form>
  
  
  
  <!-- section class="wap_login_no">�����˺ţ�
  <?php if ($_GET['usertype'] == 2): ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'login','url' => "usertype:2"), $this);?>
">������¼</a>
<?php else: ?>
<a href="<?php echo smarty_function_wapurl(array('m' => 'login'), $this);?>
">������¼</a>
<?php endif; ?>
  </section-->
</section>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['wapstyle'])."/footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 