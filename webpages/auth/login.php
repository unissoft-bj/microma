<html>
<title>usspoint</title>
<body>
<h3>Welcome to Hotspot</h3>
<?php
// sql injection inspection
include "orgchkpost.php";
if (!empty($_POST['token'])){
    $_POST['token'] = str_replace(" ","",$_POST['token']);
    $_POST['token'] = str_replace("%20","",$_POST['token']);
    $_POST['token'] = str_replace("\t","",$_POST['token']);
    if (strlen($_POST['token']) > 20){ $_POST['token'] = substr($_POST['token'],0,20); }
    }
//
?>
<div style= 'font-size: 12px;'>
<form name="input" action="infochk.php" method="post"> 
���������ע���û���<br />
������ע��ʱ���õ���Ϣ��<br />
If you had ever registerd before,<br />
please input your<br />
registration informations here:<br />
<br />
ע��ʱ����֤�����룺<br />
ID Nmuber used for registration :
<br />
<input type="text" size="30" name="cid" value="" /> 
<br /><br />
ע��ʱ�����ֻ����룺<br />
Phone number used for registration :
<br />
<input type="text" size="30" name="phone" value="" /> 
<br />
<input type="radio" name="scope" checked="checked" value="near" /> ���һ��ʹ�ù� / used in last week<br />
<input type="radio" name="scope" value="far" /> ���һ��δʹ�ù� / not used in last week<br />
<input type="radio" name="scope" value="notsure" /> ��ȷ�� / not sure<br />
<br />
<?php include "orgpostform.php"; ?>
<input type ="submit" value ="    �ύ / Submit   ">
</form>
<?php
echo "<form name=\"goreg\" action=\"reg1.php\" method=\"post\">"; 
include "orgpostform.php";
echo "<input type=\"hidden\" name=\"token\" value=\"" . $_POST['token'] . "\" />";
echo "<input type =\"submit\" size=\"30\" value =\"������������ƾ֤ &#13;&#10; Online Registration\">";
echo "</form>";
?>
<br />
ע�������Ҫ�ϴ�֤����Ƭ<br />
��׼��һ�Ŵ�ͷ���ID�ŵ�֤����Ƭ<br />
A photo of ID Card is need<br />
Please prepare a photo<br />
with your face and id number in it<br />
��ʽ/format: jpg<br>
��С/size: < 1000k bytes
<br />
ʾ�� / examples :<br />
<a href="sample.jpg">���֤</a>    
<a href="passport.jpg">Passport</a>
</div>
</body>
</html>

