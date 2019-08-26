<html>
<body>
<?php
include 'nav.php';
$msgto=$_REQUEST['param'];
?>
	  <center><h2>Message Page</h2></center>
		  <form action="addmessage.php" method="POST">
			<div class="form-group">
			  <label for="user">Message to <?php echo $msgto; ?>:</label>
			  <input type="hidden" name="msgto" value="<?php echo $msgto; ?>">
			  <input type="hidden" name="msgfrom" value="<?php echo $_SESSION['user']; ?>">
			  <input type="text" class="form-control" id="email" placeholder="Enter Message" name="msgbox">
			</div>
						<center><button type="submit" class="btn btn-success">Submit</button></center>

			</form>
<?php
include 'navend.php';
?>
</body>
</html>