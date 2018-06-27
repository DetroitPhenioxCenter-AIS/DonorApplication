<?php
session_start();
include_once 'Includes/db.php';
include_once 'mail.php';
	$event_name = mysqli_real_escape_string($conn,$_POST['event-name']);
	$event_date = mysqli_real_escape_string($conn,$_POST['event-date']);
	$event_venue = mysqli_real_escape_string($conn,$_POST['event-venue']);
	$description = mysqli_real_escape_string($conn,$_POST['description']);  
	$db_eventname = '';   
    $sql = "INSERT INTO events(event_name,event_date,event_venue,event_description) VALUES ('$event_name','$event_date','$event_venue','$description');";
    mysqli_query($conn,$sql);

    $sql2 = "SELECT * FROM events WHERE event_name = '$event_name';";
    $query = mysqli_query($conn,$sql2);
    while($row = mysqli_fetch_assoc($query)){

    	$db_eventname = $row['event_name'];
    }
    new_event($db_eventname);
         
