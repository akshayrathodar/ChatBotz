<?php
		session_start();
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("community",$cn);
		
	extract($_POST);
		
	$qry="insert into message(msgfrom,msgto,msg) values('$msgfrom','$msgto','$msgbox')";
	$rs=mysql_query($qry);
	//$_SESSION['user']=$user;
	header("location:userhome.php");		
?>