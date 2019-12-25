<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>first-name</label>
			<input type="text" name="first_name" >
		</div>
		<div class="input-group">
			<label>last-name</label>
			<input type="text" name="last_name" >
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>email</label>
			<input type="text" name="email">
		</div>
		
		<div class="input-group">
			<label>password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>dept</label>
			<input type="text" name="dept">
		</div>
		<div class="input-group">
			<label>sex</label>
			<select name="sex">
			  <option value="male">male</option>
			  <option value="female">female</option>
	  
			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>