<?php

	include_once 'Includes/db.php';

	if(isset($_POST['create'])){
		$pwd = mysqli_real_escape_string($conn,$_POST['password']);
		$cpwd = mysqli_real_escape_string($conn,$_POST['confirm-password']);
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);

		if( $pwd != $cpwd){

			header("Location: createpassword.php?createpassword=wrongpasswords");
			exit();

		}
		else{

			$sql = "SELECT user_name FROM users WHERE user_name='$username';";
			$result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
			if($result['user_name']==$username){
                   $sql2 = "UPDATE users SET user_password='$hashed_pwd' WHERE user_name='$username';";
                   mysqli_query($conn, $sql2);
				   header('Location: login.php?createpassword=success');
				   exit();

					
                  
                }else{

                	header('Location: createpassword.php?createpassword=usernotfound');
                	exit();
                }


		}
	}