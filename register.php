<?php 
include('server.php') 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#b9ae0c">
    <title>Registration Form.</title>
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="apple-touch-icon" href="image/192.png">>
	<link rel="stylesheet" type="text/css" href="firstdesign.css">
</head>
<body>
	<div class="row">
    	<div class="column">
	<img src="./image/itst.png" id="logo">
		</div>
		<div class="column">
	<form method="post" action="register.php" class="formcontent">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name">
		</div>
		<div class="input-group">
			<label>Date of Birth</label>
			<input type="date" name="date_of_birth" value="<?php echo $date_of_birth; ?>" placeholder="Date of Birth">
		</div>
		<div class="input-group">
			<input type="number" name="contact_details" value="<?php echo $contact_details; ?>" placeholder="Contact Details">
		</div>
		<div class="input-group">
			<input type="text" name="address" value="<?php echo $address; ?>" placeholder="Address">
		</div>
		<div class="input-group">
			<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
		</div>
		<div class="input-group">
			<input type="password" name="password_1" value="" placeholder="Password">
		</div>
		<div class="input-group">
			<input type="password" name="password_2" value="" placeholder="Confirm password">
		</div>
		<div class="input-group">
			<button type="submit" class="button" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? 
			<a href="index.php">Log in</a>
		</p>
	</form>
	</div>
		</div>
		<script src="src/index.js"></script>
</body>
</html>