<?php include('check1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Getlift Signup</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Sign up</h2>
  </div>
	
  <form method="post" action="signin_page.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" id="username" name="username" >
  	</div>
  	<div class="input-group">
  	  <label>Mobile number</label>
  	  <input type="text" id="mobile_num" name="mobile_num" >
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
  	  <button type="submit" class="btn" name="reg_user">Sign up</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Login</a>
  	</p>
  </form>
</body>
</html>