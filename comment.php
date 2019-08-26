<html>
<body>
<?php
include 'nav.php';
?>
	  <center><h2>Add Your Comments</h2></center>
		  <form action="addcomment.php" method="POST">
			<div class="form-group">
			  <label for="user">Add Your Comment:</label>
			  <input type="text" class="form-control" id="email" placeholder="Enter Comments" name="comm">
			</div>
						<center><button type="submit" class="btn btn-success">Submit</button></center>

			</form>
<?php
include 'navend.php';
?>
</body>
</html>