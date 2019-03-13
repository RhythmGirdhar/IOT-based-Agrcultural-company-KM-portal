<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="containermain">
<div id="logindiv">
  <h2 style="text-align:center;">Login</h2>
	<form method="POST" action="register.php">
		<?php include('errors.php'); ?>
		<!-- Name, Username, Password, Confirm Password, Phone Number, Email ID, Area -->
		<div class="input-group">
	  		<label>Name</label>
	  		<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		
		<div class="input-group">
	  		<label>Email</label>
	  		<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		
		<div class="input-group">
	  		<label>Phone Number</label>
	  		 <input type="tel" name="phone" value="<?php echo $phone; ?>">
		</div>

		<div class="input-group">
	  		<label>Area</label>
	  		 <input type="text" name="area" value="<?php echo $area; ?>">
		</div>
		
		<div class="input-group">
	  		<label>Username</label>
	  		<input type="text" name="username" value="<?php echo $username; ?>">
		</div>

		<div class="input-group">
	  		<label>Password</label>
	  		<input type="password" name="password_1">
		</div>
		
		<div class="input-group">
	  		<label>Confirm password</label>
	  		<input type="password" name="password_2">
		</div>
		
		<div style="text-align:center">  
	  		<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		
		<br><br>
		<p style="text-align: center;">
	  		Already a member? <a href="login.php">Sign in</a>
		</p>
  </form>
</div>
</div>

</body>
</html>