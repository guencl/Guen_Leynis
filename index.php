<?php 
	include('server.php')
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#b9ae0c">
    <title>Log In Form.</title>
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="apple-touch-icon" href="image/192.png">
	<link rel="stylesheet" type="text/css" href="firstdesign.css">
</head>
<body>
	<div class="row">
    	<div class="column">
	<img src="./image/itst.png" id="logo">
		</div>
	<div class="column">
	<form method="post" action="index.php" class="form">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="input-group">
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="input-group">
			<button type="submit" class="button" name="login_user">Log In</button>
		</div>
		<p class="reg">Need an account? </p>
		<a href="register.php">Create New Account</a>
	</form>
	</div>
	</div>
	<script src="src/index.js"></script>
</body>
</html>