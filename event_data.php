<?php

include_once 'Includes/db.php';
	$event_name = mysqli_real_escape_string($conn,$_POST['event-name']);
	$event_date = mysqli_real_escape_string($conn,$_POST['event-date']);
	$event_venue = mysqli_real_escape_string($conn,$_POST['event-venue']);
	$description = mysqli_real_escape_string($conn,$_POST['description']);     
    $sql = "INSERT INTO events(event_name,event_date,event_venue,event_description) VALUES ('$event_name','$event_date','$event_venue','$description');";
    mysqli_query($conn,$sql);
         
