<?php
	
	include_once 'Includes/db.php';


if(isset($_POST['submit'])){
	$fullname = mysqli_real_escape_string($conn,$_POST['full-name']);
	echo $fullname;
	$username = mysqli_real_escape_string($conn,$_POST['user-name']);
	$number = mysqli_real_escape_string($conn,$_POST['phone']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	// Check for Empty Inputs 
	if(empty($fullname) || empty($username) ||  empty($email)){
		
		header("Location: registration.php?registration=empty");
		exit();
	} else {
				// Check whether the input chars are valid
				if(!preg_match("/^[a-zA-Z_\s]*$/", $fullname) ){
					header("Location: registration.php?registration=charerror&full-name=$fullname&user-name=$username&phone=$number&email=$email");
					exit();
				} else{
						// Check for valid email
						if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
							header("Location: registration.php?registration=emailerror&full-name=$fullname&user-name=$username&phone=$number&email=$email");
							exit();
						} else{

								$sql = "SELECT * FROM users WHERE (user_name='$username' OR email='$email');";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);
								if($resultCheck > 0) {
									$row = mysqli_fetch_assoc($result);
							        if ($username==$row['user_name'])
							        {
							            header("Location: registration.php?registration=usertaken&full-name=$fullname&user-name=$username&phone=$number&email=$email");
							        }
							        elseif($email==$row['email'])
							        {
							           header("Location: registration.php?registration=emailtaken&full-name=$fullname&user-name=$username&phone=$number&email=$email");
							        }
									exit();

								} else{

										$sql = "INSERT INTO users (full_name,user_name,phone_number,email) VALUES (?,?,?,?);";
										$dbcon = mysqli_stmt_init($conn);
										if(!mysqli_stmt_prepare($dbcon,$sql)){
											echo "SQL error";
										}
										else{
											mysqli_stmt_bind_param($dbcon,"ssss",$fullname,$username,$number,$email);
											mysqli_stmt_execute($dbcon);
										}
										header("Location: thanks_registration.php?registration=success");
										exit();

								}
							

						}
				}

	}

}

else{

}






	/*include_once 'Includes/db.php';

	if(isset($_POST['submit'])){
	$first = mysqli_real_escape_string($conn,$_POST['first-name']);
	$last = mysqli_real_escape_string($conn,$_POST['last-name']);
	$number = mysqli_real_escape_string($conn,$_POST['phone-number']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$sql = "INSERT INTO users (first_name,last_name,phone_number,email) VALUES (?,?,?,?);";
	$dbcon = mysqli_stmt_init($conn);

	// Check for Empty Inputs 

		if(empty($first) || empty($last) ||empty($email)){
			header("Location: registration.php?registration=empty");
			exit();
		}else{
				if(!mysqli_stmt_prepare($dbcon,$sql)){
					echo "SQL error";
				}
				else{
					mysqli_stmt_bind_param($dbcon,"ssss",$first,$last,$number,$email);
					mysqli_stmt_execute($dbcon);
				}

				header("Location: welcome.php?registration=success");
				exit();
		}

	}

      /*session_start();
      $_SESSION['message'] = '';
      $mysqli = new mysqli('localhost', 'root', '', 'donate');
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          
          $first_name = $mysqli->real_escape_string($_POST['first-name']);
          $last_name = $mysqli->real_escape_string($_POST['last-name']);
          $phone_number = $mysqli->real_escape_string($_POST['phone-number']);
          $email = $mysqli->real_escape_string($_POST['email']);
          
          $sql = "INSERT INTO donor_registration(first_name,last_name,phone_number,email)" . "VALUES('$first_name','$last_name','$phone_number','$email')";
          
          if($mysqli->query($sql) === true){
              $_SESSION['message'] = "Registration succesful!";
              header("location: welcome.php");
          }
          else{
              $_SESSION['message'] = "user could not be added!";
          }
          
      }*/
      



