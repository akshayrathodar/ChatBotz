<?php 
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("community",$cn);
		session_start();
		$user=$_POST["user"];
		$pass=$_POST["pwd"];
			
			$qry=mysql_query("select * from register where Username='$user' && pass='$pass'");
			
				if(mysql_num_rows($qry)>0)
				{
					$_SESSION['user']=$user;
					$_SESSION['pass']=$pass;

					
					header("location:comment.php");
				}
				else
				{
					
					header("location:login.php");
				}
				mysql_close($cn);
				
		
?>


