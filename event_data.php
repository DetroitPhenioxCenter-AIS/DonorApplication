<?php

include_once 'Includes/db.php';
if(isset($_POST['create'])){
	
	$event_name = mysqli_real_escape_string($conn,$_POST['event-name']);
	$event_date = mysqli_real_escape_string($conn,$_POST['event-date']);
	$event_venue = mysqli_real_escape_string($conn,$_POST['event-venue']);
	$description = mysqli_real_escape_string($conn,$_POST['description']);

	if(empty($event_name) || empty($event_date) || empty($event_venue) || empty($description)){
  
		
		header("Location: home.php?event=empty&event-name=$event_name&event-date=$event_date&event-venue=$event_venue&description=$description");
		exit();
	}
	else{
          
          $sql = "INSERT INTO events(event_name,event_date,event_venue,event_description) VALUES ('$event_name','$event_date','$event_venue','$description');";
          mysqli_query($conn,$sql);
          header("Location: home.php?event=success");
		  exit();
	}
}