<?php

  session_start();
  $username = $_SESSION['u_user_name'];
  include_once 'Includes/db.php';
  include_once 'mail.php';
  	$id = mysqli_real_escape_string($conn,$_POST['fundid']);
  	$fund_name = '';
	$fund = "SELECT * FROM fundraiser WHERE fund_id='$id';";
	$result = mysqli_query($conn,$fund);
	while($row = mysqli_fetch_assoc($result)){ 
		$fund_name = $row["fund_name"];}
	$cardname = mysqli_real_escape_string($conn,$_POST['name']);
 	$cardnumber = mysqli_real_escape_string($conn,$_POST['cardnumber']);
 	$expdate = mysqli_real_escape_string($conn,$_POST['expdate']);
 	$cvv = mysqli_real_escape_string($conn,$_POST['cvv']);
	$amount = mysqli_real_escape_string($conn,$_POST['amount']);
	$date = date("m-d-Y");
  	 $sql = "UPDATE fundraiser SET amount_received= amount_received +'$amount' WHERE fund_id='$id';";
	 mysqli_query($conn, $sql);
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
 	}
 	fund_payment($fund_name);

 	

	
  