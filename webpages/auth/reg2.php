<html>
<title>usspoint</title>
<body>

<div style= 'font-size: 12px;'>
<?php

include "dbconn.php";
// sql injection inspection
if (!empty($_POST['cid'])){
    $_POST['cid'] = str_replace(" ","",$_POST['cid']);
    $_POST['cid'] = str_replace("%20","",$_POST['cid']);
    $_POST['cid'] = str_replace("\t","",$_POST['cid']);
    if (strlen($_POST['cid']) > 30){ $_POST['cid'] = substr($_POST['cid'],0,30); }
    }
if (!empty($_POST['phone'])){
    $_POST['phone'] = str_replace(" ","",$_POST['phone']);
    $_POST['phone'] = str_replace("%20","",$_POST['phone']);
    $_POST['phone'] = str_replace("\t","",$_POST['phone']);
    if (strlen($_POST['phone']) > 30){ $_POST['phone'] = substr($_POST['phone'],0,30); }
    }
if (!empty($_POST['plan'])){
    $_POST['plan'] = str_replace(" ","",$_POST['plan']);
    $_POST['plan'] = str_replace("%20","",$_POST['plan']);
    $_POST['plan'] = str_replace("\t","",$_POST['plan']);
    if (strlen($_POST['plan']) > 20){ $_POST['plan'] = substr($_POST['plan'],0,20); }
    }
include "orgchkpost.php";
if (!empty($_POST['token'])){
    $_POST['token'] = str_replace(" ","",$_POST['token']);
    $_POST['token'] = str_replace("%20","",$_POST['token']);
    $_POST['token'] = str_replace("\t","",$_POST['token']);
    if (strlen($_POST['token']) > 20){ $_POST['token'] = substr($_POST['token'],0,20); }
    }
//

// validation
include "valid.php";
include "valphone.php";

$token=rand();

$sql = "  insert into authclient set cid = '" . $_POST['cid'] . 
       "',  phone ='" . $_POST['phone'] .
       "',  plan ='" . $_POST['plan'] .  
       "',  question ='" .  
       "',  answer ='" .
       "',  mac ='" . $_POST['mac'] .
       "',  token ='" . $token .        
       "',  rectime = now()" ;
//echo $sql;
$result = mysql_query($sql);
if (!$result){
    echo "��������������<br /> Error, please try again";
    die();
}

//echo "<br />".$result;
mysql_free_result($result);

echo "�������������Ϣ��<br />";
echo "Please check your informations: <br />";
echo "֤����/ID Number��" . $_POST['cid'] . "<br />";
echo "�ֻ���/Phone Number��" . $_POST['phone'] . "<br />";
echo "<br />";
echo "���ϴ���֤����Ƭ<br/>";
echo "Please upload a photo of the ID Card<br />";

echo "<form name=\"regphoto\" action=\"reg3.php\" method=\"POST\" enctype=\"multipart/form-data\">" . 
    "<input type=\"hidden\" name=\"token\" value=\"" . $token . "\"/> " .
    "<input type=\"hidden\" name=\"cid\" value=\"" .  $_POST['cid'] . "\"/> " . 
    "<input type=\"hidden\" name=\"phone\" value=\"" . $_POST['phone'] . "\"/> " .  
    "<input type=\"hidden\" name=\"urltoken\" value=\"" . $_POST['token'] . "\"/> " .   
    "<label>֤����Ƭ/ID Photo: </label><br />" . 
    "<input type=\"file\" name=\"image\" value=\"\" accept=\".jpeg,.jpg\" /><br /><br />";
include "orgpostform.php"; 
echo "<input type=\"submit\" name=\"button\" value=\"�ϴ�/upload\" /></form>";

echo "<br />";
echo "���û��֤����Ƭ���볢�Զ���ע�᣺<br />";
echo "If you have difficulty<br />";
echo "with uploading ID photo<br />";
echo "Please try registration with SMS<br />";
echo "<form name=\"regsms\" action=\"regsms1.php\" method=\"POST\">" . 
    "<input type=\"hidden\" name=\"token\" value=\"" . $token . "\"/> " .
    "<input type=\"hidden\" name=\"cid\" value=\"" .  $_POST['cid'] . "\"/> " . 
    "<input type=\"hidden\" name=\"phone\" value=\"" . $_POST['phone'] . "\"/> " .              
    "<input type=\"hidden\" name=\"urltoken\" value=\"" . $_POST['token'] . "\"/> ";
include "orgpostform.php";   
echo "<input type=\"submit\" name=\"button\" value=\"����ע�� &#13;&#10; Registration via SMS\" />";
echo "</form>";
?>
</div>
</body>
</html>
