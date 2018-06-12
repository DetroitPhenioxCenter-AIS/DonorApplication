<?php

	include 'PHPMailerAutoload.php';
	include 'credential.php';
	include 'user_data.php';

	

	function donor_mail(){

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 4;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = email;                 // SMTP username
		$mail->Password = pass;                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom(email, 'Detroit Pheniox Center');
		$mail->addAddress($_POST['email']);     // Add a recipient
		$mail->isHTML(true);                                  // Set email format to HTML


		
		$mail->Subject = 'Donor Registration Confirmation';
		$mail->Body    = '<html>
		              <body style="font-family:Georgia, serif; ">
		              <center>
		              
		        <div style="width:500px;background-color:#f5f5f5;border: 1px solid #a8a8a8; padding:20px; border-radius:2px;">
		        	<h2 style="color:#e60000;">DETROIT PHENIOX CENTER</h2>
		            <img src="https://scontent-ort2-2.cdninstagram.com/vp/dab330c3a04b24bb987abed742147509/5B8ABB80/t51.2885-19/s150x150/26873078_409153092875319_57809469530177536_n.jpg" height="100" width="100" style="border-radius:100%;"><br><br>
		            <h3>Hello!&nbsp;'.$_POST['user-name'].'</h3>
		            <h3>THANK YOU!</h3> for joining with us.
		            <br>
		            <p>Please <a href="http://localhost/dpc/createpassword.php">click here</a> to create your password for your account. </p>
		            <div style="padding:20px;background-color: #2c3840;">
		                    <a  href="http://www.detroitphoenixcenter.org/index.html" style="color:white;">OurWebsite</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.instagram.com/detroitphoenixcenter/" style="color:white;">Intsagram</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.linkedin.com/company/detroit-phoenix-center" style="color:white;">Linkedin</a>
		            </div>

		        </center>
		        </div>

		        </body> 
		        </html>  ';


    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	$mail->send();
		
	
		    
	}

	function volunteer_mail(){

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 4;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = email;                 // SMTP username
		$mail->Password = pass;                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom(email, 'Detroit Pheniox Center');
		$mail->addAddress($_POST['email']);     // Add a recipient
		$mail->isHTML(true);                                  // Set email format to HTML


		$mail->Subject = 'Volunteer Registration Confirmation';
		$mail->Body = '<html>
		              <body style="font-family:Georgia, serif; ">
		              <center>

		        <div style="width:500px;background-color:#f5f5f5;border: 1px solid #a8a8a8; padding:20px; border-radius:2px;">

		            <img src="https://scontent-ort2-2.cdninstagram.com/vp/dab330c3a04b24bb987abed742147509/5B8ABB80/t51.2885-19/s150x150/26873078_409153092875319_57809469530177536_n.jpg" height="100" width="100" style="border-radius:100%;">
		            ';

		           
						$event_array = explode(",", $event_name);
						$count = count($event_array);
						for($i=0;$i<$count;$i++){

							$mail->Body .= '<h2 style="color:#e60000;">'.$event_array[$i].'&nbsp;</h2>';
						}
					
		            
		            $mail->Body .='<h3>Hello!&nbsp;'.$_POST['first-name'].'</h3>
		            <h3>THANK YOU!</h3> for joining as a volunteer and helping us in the event.
		            
		            
		            <p> Looking forward to meet you in the event. </p>
		            <div style="padding:20px;background-color: #2c3840;">
		                    <a  href="http://www.detroitphoenixcenter.org/index.html" style="color:white;">OurWebsite</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.instagram.com/detroitphoenixcenter/" style="color:white;">Intsagram</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.linkedin.com/company/detroit-phoenix-center" style="color:white;">Linkedin</a>
		            </div>

		        </center>
		        </div>

		        </body> 
		        </html> ';

	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	$mail->send();


	}

	