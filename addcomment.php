<?php
		session_start();
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("community",$cn);
		
	$comm=$_POST["comm"];
	$us = $_SESSION['user'];
		
	$qry="insert into comment(comment,user) values('$comm','$us')";
	$rs=mysql_query($qry);
	//$_SESSION['user']=$user;
	header("location:showcom.php");		
?>