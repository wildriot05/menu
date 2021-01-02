<?php include('server3.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="clireg.php">
  	<?php include('errors.php'); ?>
	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
	<div class="input-group">
	  <label>Gender</label>
  	  <select name="gender">
	  <option>--select gender--</option>
	  <option value="m">male</option>
	  <option value="f">female</option>
	  <option value="o">others</option>
	  </select>
  	</div>
	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="tel" name="phno" value="<?php echo $phno; ?>">
  	</div>
	<div class="input-group">
  	  <label>Aadhar Number</label>
  	  <input type="text" name="ano" value="<?php echo $ano; ?>">
  	</div>
	<div class="input-group">
  	  <label>PAN Number</label>
  	  <input type="text" name="pno" value="<?php echo $pno; ?>">
  	</div>
	<div class="input-group">
  	  <label>Account Number</label>
  	  <input type="text" name="accno" value="<?php echo $accno; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="clilog.php">Sign in</a>
  	</p>
  </form>
</body>
</html>