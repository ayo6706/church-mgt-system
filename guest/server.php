<?php 
	session_start();

	// variable declaration
	$username = "";
	$firstname = "";
	$lastname = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	include '../php/db.php';

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
		$lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$dept = mysqli_real_escape_string($conn, $_POST['dept']);
		$sex = mysqli_real_escape_string($conn, $_POST['sex']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($firstname)) { array_push($errors, "firstname is required"); }
		if (empty($lastname)) { array_push($errors, "lastname is required"); }
		if (empty($email)) { array_push($errors, "email is required"); }
		if (empty($dept)) { array_push($errors, "dept is required"); }
		if (empty($sex)) { array_push($errors, "sex is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO guestusers (username, first_name, last_name, email, dept, sex,  password) 
					  VALUES('$username','$firstname','$lastname', '$email','$dept','$sex' , '$password')";
			mysqli_query($conn, $query);

			$_SESSION['username'] = $username;
			
			$_SESSION['success'] = "You are now logged in";
			header('location: blog.php?epr=guest');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM guestusers WHERE username='$username'  AND password='$password'";
			$results = mysqli_query($conn, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['first_name'] = $firstname;
				$_SESSION['last_name'] = $lastname;
				$_SESSION['success'] = "You are now logged in";
				header('location: blog.php?epr=guest');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>