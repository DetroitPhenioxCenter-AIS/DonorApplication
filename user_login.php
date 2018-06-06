<?php
		
	session_start();

	if(isset($_POST['loginsubmit'])){

		include 'Includes/db.php';

		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		//login form validation
		//Checking whether inputs are empty
		if(empty($username) || empty($password)){
			header("Location: login.php?login=empty");
			exit();
		} else{

			$sql = "SELECT * FROM users WHERE user_name='$username' OR email='$username';";
			$result = mysqli_query($conn, $sql);
			$check = mysqli_num_rows($result);
			if($check < 1){
				header("Location: login.php?login=error");
				exit();
			} else{
				if($row = mysqli_fetch_assoc($result)) {
					// De-hashing password
					$hashedpwd = password_verify($password, $row['user_password']);
					if($hashedpwd == false){
						header("Location: login.php?login=passworderror");
						exit();
					} elseif($hashedpwd == true) {
						// Log in user
						$_SESSION['u_id'] = $row['id'];
						$_SESSION['u_full_name'] = $row['full_name'];
						$_SESSION['u_user_name'] = $row['user_name'];
						$_SESSION['u_email'] = $row['email'];
						$_SESSION['u_phone'] = $row['phone_number'];
						$_SESSION['u_password'] = $row['user_password'];
						$_SESSION['u_amount'] = $row['donation_amount'];
						$_SESSION['u_total'] = $row['total_donation_amount'];
						header("Location: home.php?login=loginsuccess");
						exit();
					}
				}
			}
		}
	}