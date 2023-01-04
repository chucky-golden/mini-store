<?php

	require_once('connection.php');
	require_once('functions.php');
	if(isset($_POST['submit'])){
		$sanitizer = sanitizer($_POST);

		$email = mysql_prep($connect, trimData($sanitizer['email']));
		$fullname = mysql_prep($connect, trimData($sanitizer['fullname']));
		$state = mysql_prep($connect, trimData($sanitizer['state']));
		$address = mysql_prep($connect, trimData($sanitizer['address']));
		$phone = mysql_prep($connect, trimData($sanitizer['phone']));
		$password = mysql_prep($connect, trimData($sanitizer['password']));
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = "Please enter a correct email format";
			header("Location: ../register.php?error=".$error);
		}
		if (empty($email) OR empty($fullname) OR empty($address) OR empty($phone) OR empty($password) OR empty($state)) {
			$error = "All fields are required";
			header("Location: ../register.php?error=".$error);
		}else{
			$check = "SELECT * FROM users WHERE email = '$email'";
			$check_result = mysqli_query($connect, $check);
			if(mysqli_num_rows($check_result) == 1){
				$exist = "user with email address already exist";
				header("location: ../register.php?error=".$exist);
			}else{				
				$new_pass = password_encrypt($password);
				$main_date = date("Y-m-d");
				$sql = "INSERT INTO users(email,fullname,address,state,phone,password,createddate)VALUES('$email', '$fullname', '$address', '$state', '$phone', '$new_pass', '$main_date')";
				$result = mysqli_query($connect, $sql);
				if($result){
					$sql2 = "SELECT * FROM users WHERE email = '$email'";
					$result2 = mysqli_query($connect, $sql2);
					if(mysqli_num_rows($result2) > 0){
						while($row2 = mysqli_fetch_assoc($result2)){
							session_start();
							$_SESSION['id'] = $row2['id'];
							$_SESSION['email'] = $row2['email'];
							if(isset($_SESSION['id'])){
								header("location: ../index.php");
							}else{
								$failed = "registration failed";
								header("location: ../register.php?error=".$failed);
							}
						}
					}else{
						$failed = "registration failed";
						header("location: ../register.php?error=".$failed);
					}
					
				}else{
					$failed = "registration failed";
					header("location: ../register.php?error=".$failed);
				}
			}
		}
	}

?>