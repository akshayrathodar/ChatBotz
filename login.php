
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<center>
<?php
include 'nav.php';
?>
  <h2>Registration Form</h2>
  <form action="log.php" method="POST">
    <div class="form-group">
      <label for="user">User Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Username" name="user" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
  </form>
<?php
include 'navend.php';
?>

</body>

</html>