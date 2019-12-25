<?php 
	session_start();

	// variable declaration
	$username = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	include '../php/db.php';

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO admin (username,  password) 
					  VALUES('$username',  '$password')";
			mysqli_query($conn, $query);

			$_SESSION['user_name'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../php/blog.php');
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
			$query = "SELECT * FROM hod WHERE username='$username' AND password='$password'
				UNION
				SELECT * FROM publicity WHERE username='$username' AND password='$password'
				UNION
				SELECT * FROM leaders WHERE username='$username' AND password='$password'
				UNION
				SELECT * FROM admin WHERE username='$username' AND password='$password'
				";
			$results = mysqli_query($conn, $query);
				
		if ($result = mysqli_query($conn, $query)){
            $row=mysqli_fetch_assoc($result);

            $position =$row['position'];

        }		
			

					
			
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['user_name'] = $username;
				$_SESSION['success'] = "You are now logged in";
				
				
				switch ($position) {
					case 'hod':
						# code...
						header('location: ../publicity/hod/blog.php?epr=hod');
						break;
					case 'leaders':
							# code...
							header('location: ../leaders/blog.php?epr=leaders');
							break;
					case 'publicity':
									# code...
							header('location: ../publicity/workers/blog.php?epr=publicity');
						break;

					case 'admin':
						# code...
						header('location: ../php/blog.php?epr=admin');
						break;
					default:
						# code...
						echo 'page not found';
						break;
				}
				
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>