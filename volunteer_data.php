<?php
	
	include_once 'Includes/db.php';
	include_once 'mail.php';
    

if(isset($_POST['volunteer-submit'])){
	$first_name = mysqli_real_escape_string($conn,$_POST['first-name']);
	$last_name = mysqli_real_escape_string($conn,$_POST['last-name']);
	$event_name = implode(',', $_POST['event']);
	$number = mysqli_real_escape_string($conn,$_POST['phone']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$volunteer_type = mysqli_real_escape_string($conn,$_POST['reason']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	// Check for Empty Inputs 
	if(empty($first_name) || empty($email) ||  empty($volunteer_type) ) {
		
		header("Location: volunteer.php?signup=empty&first-name=$first_name&last-name=$last_name&phone=$number&email=$email&event-name=$event_name&reason=$volunteer_type&address=$address");
		exit();
	} else {
				// Check whether the input chars are valid
				if(!(preg_match("/^[a-zA-Z_\s]*$/", $first_name) && preg_match("/^[a-zA-Z_\s]*$/", $last_name) )){
					header("Location: volunteer.php?signup=invalid&first-name=$first_name&last-name=$last_name&phone=$number&email=$email&event-name=$event_name&reason=$volunteer_type&address=$address");
					exit();
				} else{
						// Check for valid email
						if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
							header("Location: volunteer.php?signup=emailerror&first-name=$first_name&last-name=$last_name&phone=$number&email=$email&event-name=$event_name&reason=$volunteer_type&address=$address ");
							exit();
						} else{

								$sql = "SELECT * FROM volunteers WHERE  email='$email';";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);
								if($resultCheck > 0) {
									$row = mysqli_fetch_assoc($result);
							        if ($email==$row['email'])
							        {
							            header("Location: volunteer.php?signup=volunteertaken&first-name=$first_name&last-name=$last_name&phone=$number&email=$email&event-name=$event_name&reason=$volunteer_type&address=$address");
							            exit();
							        }
							       
									

								} else {

									$sql = "INSERT INTO volunteers (first_name, last_name, phone_number, email, event_name, volunteer_type, street_address) VALUES (?,?,?,?,?,?,?);";
										$dbcon = mysqli_stmt_init($conn);
										if(!mysqli_stmt_prepare($dbcon,$sql)){
											echo "SQL error";
										}
										else{
											mysqli_stmt_bind_param($dbcon,"sssssss",$first_name,$last_name,$number,$email,$event_name,$volunteer_type,$address);
											mysqli_stmt_execute($dbcon);
										}
										volunteer_mail();
										header("Location: thanks_registration.php?registration=success");
		    							exit();
								} 

								
							

						}
				}

	}

}