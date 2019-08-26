<?php
		session_start();
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("community",$cn);
		
	$users=$_POST["user"];
	$no=$_POST["number"];
	$emails=$_POST["email"];
	$pwds=$_POST["pwd"];
	
	$qry="insert into register(Username,mobile,email,pass) values('$users',$no,'$emails','$pwds')";
	$rs=mysql_query($qry);
	//$_SESSION['user']=$user;
	header("location:login.php");		
?>