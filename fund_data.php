<?php

  session_start();
  $username = $_SESSION['u_user_name'];
  include_once 'Includes/db.php';

  if(isset($_POST['fundraiser'])){
	$id = mysqli_real_escape_string($conn,$_POST['fundid']);
	$amount = mysqli_real_escape_string($conn,$_POST['amount']);
	$date = date("m-d-Y");
	if( empty($amount)){
		header('Location: home.php?donation=failed');
		exit();
	}else{
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
 		$_SESSION['u_total'] = $total_amount;}
	 header('Location: home.php?donation=success');
	 exit();
	}
  }