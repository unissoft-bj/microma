<?php
/**
 * ά��online״̬
 * 
 */
//1.�жϵ�ǰ�û��Ƿ��¼������ǵ�¼�û���
if($_COOKIE["userid"]!=""){
  
  
  	echo "begin";
  
  	$sql = "select id from useractive where userid='".$_COOKIE['userid']."' order by id desc limit 1";
  	//echo $sql;
  	$result = mysql_query($sql);
  	if(mysql_num_rows($result)==0){
  		//��������
  		$sql_insert ="insert into useractive set
						mac ='".$_COOKIE['mymac']."' ,
						userid = '".$_COOKIE['userid']."',
						userrole = '".$_COOKIE['userrole']."',
						phone = '".$_COOKIE['phone']."',
						onsite='1',
						online='1',
						pagefirst=now(),
						pagelast=now(),
						insby='".$_SERVER['PHP_SELF'].$_SERVER["QUERY_STRING"]."',
						rectime = now(),
						pushflag = '32'";
  		//echo $sql_insert;
  		mysql_query($sql_insert);
  		//die();
  	}else{
  		//��������
  		$row = mysql_fetch_array($result);
  		$sql_update="update useractive set
				pushflag=pushflag+32,
				userid='".$_COOKIE['userid']."',
				onsite='1',
				online='1',
				pagefirst=if(pagefirst='1970-01-01 00:00:00',now(),pagefirst),
				pagelast=now(),
				updby='".$_SERVER['PHP_SELF'].$_SERVER["QUERY_STRING"]."',
				updtime=now() where id=".$row['id'];
  		echo $sql_update;
  		//die();
  		mysql_query($sql_update);
  	}
  
  
  
  }
?>