
<?php
  session_start();

  if(!isset($_SESSION['uname'])){
  	header('location:login.php');
  }


  ?>
<!DOCTYPE html>
<html>
<body>



<p><a href="logout.php">Log out</a></p>

</body>
</html>