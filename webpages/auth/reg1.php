<html>
<title>usspoint</title>
<body>
<div style= 'font-size: 12px;'>
Ϊ���ܹ�˳����ͨ�����˺ţ�<br />
���ύ��ʵ��Ч����Ϣ<br />
Please input correct<br />
informations<br />
ע��ǰ�����Ķ���Ԥ֪���<br />
Read terms & conditions first<br />
<a href="terms.html">Ԥ֪����/terms & conditions</a><br />
<form name="input" action="reg2.php" method="post">
������֤�����룺<br />
Please input your<br />
Identification Card Number:<br />
<input type="text" size="30" name="cid" value="" /><br />
<br />
�������ֻ����룺<br />
Phone number:<br />
<input type="text" size="30" name="phone" value="" /><br />
<br />
��ѡ����ѡ���ԣ�<br />
Select preferrd language:<br />
<select name="plan">
  <option value ="chinese">����</option>
  <option value ="english">English</option>
</select>
<br /><br />
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
include "orgpostform.php";
echo "<input type=\"hidden\" name=\"token\" value=\"" . $_POST['token'] . "\" />"; 
?>
<input type ="submit" value ="  �ύ / Submit">
</form>

</body>
</html>
