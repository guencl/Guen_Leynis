<?php 
	session_start();

// variable declaration
	$name = "";
	$date_of_birth = "";
	$contact_details = "";
	$address = "";
	$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	//$db = mysqli_connect("sql301.0fees.us","0fe_29141758","05221226","0fe_29141758_mc_db");
	$db = mysqli_connect("localhost","root","","mc_db");
	
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$date_of_birth = mysqli_real_escape_string($db, $_POST['date_of_birth']);
		$contact_details = mysqli_real_escape_string($db, $_POST['contact_details']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		

		// form validation in Registration and login: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($date_of_birth)) { array_push($errors, "Date of Birth is required"); }
		if (empty($contact_details)) { array_push($errors, "Contact Details is required"); }
		if (empty($address)) { array_push($errors, "Address is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		$query = $query="SELECT * FROM mc_table WHERE username='$username'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) >0) {
		$query="SELECT * FROM mc_table WHERE username='$username'";

			array_push($errors, "Username has already been taken");

			}else{
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO mc_table ( name, date_of_birth, contact_details, address, username, password) VALUES ('" . $name . "', '" . $date_of_birth . "', '"  . $contact_details . "', '"  . $address . "', '"  .$username . "', '"  . $password  ."')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}
}
	// LOGIN USER
	if (isset($_POST['login_user'])) {

		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

			$password = ($password);
			$query = "SELECT * FROM mc_table WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: home.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
	}

?>