<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: BMS.html');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div class="loggedin">
	<h1>Home Page</h1>
</div>
<div class="container">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p align="right"; style="margin-right:10px; padding:10px;">Welcome <strong><?php echo $_SESSION['name']; ?></strong></p>
		<p align="right"; style="margin-right:20px;"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<div class="container1">
		<h3 align="left"; style="margin-left:20px;"><a href="record.php">Show Client records</h3></a>
		<h3 align="left"; style="margin-left:20px;"><a href="#">Show Employee records</h3></a>
		
		
		</div>
    	
    <?php endif ?>
</div>
		
</body>
</html>