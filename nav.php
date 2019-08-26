
<?php
session_start();?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/commu.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
			<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<ul>
		
		<li><a class="active" href="showcom.php">Home</a></li>
		<?php
if(!isset($_SESSION['user']))
			{
			echo '<li><a href="login.php">Login</a></li>
		<li><a href="register.php">Register</a></li>';	
			}
?>
		<li><a href="about.php">About</a></li>
		<li><?php
			if(isset($_SESSION['user']))
			{ 
			echo "<a href='comment.php'><i class='fa fa-comments-o' style='font-size:48px;color:white;'></i></a>";
			}?>
		</li>
		<li>
			<?php
			if(isset($_SESSION['user']))
			{ 
			echo "<a href='userhome.php'>SendMessage</a>";
			}
			?>
		</li>
		<li>
		<?php
			if(isset($_SESSION['user']))
			{ 
			echo "<a href='viewmsg.php'>ChatBox</a>";
			}
		?>
		</li>
		<li> <?php
			if(isset($_SESSION['user']))
			{
				echo"<center><font size='+2' color='white'>WEL-COME :".$_SESSION['user']."</font></center></li><li>";
				echo"<a href='logout.php'>Logout</a>";
			}
			?>
		</li>
		
		</ul>
		
</body>
</html>
