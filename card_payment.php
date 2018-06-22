<?php
 session_start();
 include_once 'Includes/db.php';
 include_once 'mail.php';
 $username = $_SESSION['u_user_name'];
 if(isset($_POST['donate'])){

 	$cardname = mysqli_real_escape_string($conn,$_POST['name']);
 	$cardnumber = mysqli_real_escape_string($conn,$_POST['cardnumber']);
 	$expdate = mysqli_real_escape_string($conn,$_POST['expdate']);
 	$cvv = mysqli_real_escape_string($conn,$_POST['cvv']);
 	$amount = mysqli_real_escape_string($conn,$_POST['amount']);
 	$date = date("m-d-Y");
 	if(empty($cardnumber) || empty($cardname) || empty($expdate) || empty($cvv) || empty($amount)){

 	header("Location: home.php?carddetails=empty&name=$cardname&cardnumber=$cardnumber&expdate=$expdate&cvv=$cvv&amount=$amount");
 	exit();
 	}else{

 		$sql = "SELECT * FROM card_details WHERE (card_name='$cardname' AND card_number='$cardnumber' AND exp_date='$expdate' AND cvv = '$cvv');";
 		$result = mysqli_query($conn,$sql);
 		$check = mysqli_num_rows($result);
 		if ($check <= 0) {
 			header("Location: home.php?carddetails=wrong&name=$cardname&cardnumber=$cardnumber&expdate=$expdate&cvv=$cvv&amount=$amount");
 			exit();
 		}
 		else{

 			while($row = mysqli_fetch_assoc($result)){

 				if($amount > $row['card_balance']){

 					header("Location: home.php?carddetails=insufficient&name=$cardname&cardnumber=$cardnumber&expdate=$expdate&cvv=$cvv&amount=$amount");
 					exit();
 				}else{
                         
 						$sql1 = "UPDATE donors SET donation_amount=CONCAT(donation_amount,'$amount|'),date_donation=CONCAT(date_donation, '$date|') WHERE user_name='$username';";
 						mysqli_query($conn, $sql1);
 						$sql2 = "SELECT * FROM donors WHERE user_name='$username';";
 						$result = mysqli_query($conn, $sql2);
 						while($row = mysqli_fetch_assoc($result)){
 						$array = explode('|',$row['donation_amount']);
 						$total_amount = array_sum($array);
 						$sql3 = "UPDATE donors SET total_donation_amount='$total_amount' WHERE user_name='$username';";
 						mysqli_query($conn, $sql3);
 						$_SESSION['u_total'] = $total_amount;
 						card_payment();
 						header("Location: home.php?payment=success");
 						exit();
 					}
 				}
 			}
 		}
 		
 	}

 }