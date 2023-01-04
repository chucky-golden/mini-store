<?php

	require_once('connection.php');
	require_once('functions.php');
	if(isset($_POST['submit'])){
		$sanitizer = sanitizer($_POST);

		$email = mysql_prep($connect, trimData($sanitizer['email']));
		$password = mysql_prep($connect, trimData($sanitizer['password']));
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = "Please enter a correct email format";
			header("Location: ../login.php?error=".$error);
		}
		if (empty($email) OR empty($password)) {
			$error = "All fields are required";
			header("Location: ../login.php?error=".$error);
		}else{
			$new_pass = password_encrypt($password);
			$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$new_pass' AND deleted = 1";
			$result = mysqli_query($connect, $sql);

			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					session_start();
					$_SESSION['id'] = $row['id'];
					$_SESSION['email'] = $row['email'];
					if(isset($_SESSION['id'])){
						header('location: ../index.php');
					}else{
						$failed = "email or password is incorrect";
						header('location: ../login.php?error='.$failed);
					}					
				}
			}else{
				$notfound = "user not found";
				header('location: ../login.php?error='.$notfound);
			}
		}
	}












?>