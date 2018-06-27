<?php

	include 'PHPMailerAutoload.php';
	include 'credential.php';
	include 'user_data.php';
	include_once 'Includes/db.php';
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

	function volunteer_mail($events,$types){

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
		        	<h2 style="color:#e60000;">DETROIT PHENIOX CENTER</h2>
		            <img src="https://scontent-ort2-2.cdninstagram.com/vp/dab330c3a04b24bb987abed742147509/5B8ABB80/t51.2885-19/s150x150/26873078_409153092875319_57809469530177536_n.jpg" height="100" width="100" style="border-radius:100%;">
		            ';						
		          					
		            
		            $mail->Body .='<h3>Hello!&nbsp;'.$_POST['first-name'].'</h3>
		            <h5>THANK YOU! for joining as a volunteer and helping us in '.$events.'.</h5>
		            
		            
		            <p> Looking forward to meet you in these events. </p>
		            <div style="padding:20px;background-color: #2c3840;">
		                    <a  href="http://www.detroitphoenixcenter.org/index.html" style="color:white;">OurWebsite</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.instagram.com/detroitphoenixcenter/" style="color:white;">Intsagram</a>&nbsp;&nbsp;&nbsp;<a  href="https://www.linkedin.com/company/detroit-phoenix-center" style="color:white;">Linkedin</a>
		            </div>
		            </div>
		        </center>
		        

		        </body> 
		        </html> ';

	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	$mail->send();


	}


	function card_payment(){

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
		$mail->addAddress($_SESSION['u_email']);     // Add a recipient
		$mail->isHTML(true);                                  // Set email format to HTML


		
		$mail->Subject = 'Payment Confirmation';
		$mail->Body    = '<html>
		              <body style="font-family:Georgia, serif; ">
		              <center>
		              
		        <div style="width:500px;background-color:#f5f5f5;border: 1px solid #a8a8a8; padding:20px; border-radius:2px;">
		        	<h2 style="color:#e60000;">DETROIT PHENIOX CENTER</h2>
		            <img src="https://scontent-ort2-2.cdninstagram.com/vp/dab330c3a04b24bb987abed742147509/5B8ABB80/t51.2885-19/s150x150/26873078_409153092875319_57809469530177536_n.jpg" height="100" width="100" style="border-radius:100%;"><br><br>
		            <h3>Hello!&nbsp;'.$_SESSION['u_user_name'].'</h3>
		            <h3>THANK YOU! for donating us.</h3>
		            <p>Your Contribution helps us to take care of childrens in detroit phenoix center.</p>
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

	function fund_payment($fundname){

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
		$mail->addAddress($_SESSION['u_email']);     // Add a recipient
		$mail->isHTML(true);                                  // Set email format to HTML


		
		$mail->Subject = 'Fundraiser Payment Confirmation';
		$mail->Body    = '<html>
		              <body style="font-family:Georgia, serif; ">
		              <center>
		              
		        <div style="width:500px;background-color:#f5f5f5;border: 1px solid #a8a8a8; padding:20px; border-radius:2px;">
		        	<h2 style="color:#e60000;">DETROIT PHENIOX CENTER</h2>
		            <img src="https://scontent-ort2-2.cdninstagram.com/vp/dab330c3a04b24bb987abed742147509/5B8ABB80/t51.2885-19/s150x150/26873078_409153092875319_57809469530177536_n.jpg" height="100" width="100" style="border-radius:100%;"><br><br>'.
		             '<h2>'.$fundname.'</h2>'.
		            '<h3>Hello!&nbsp;'.$_SESSION['u_user_name'].'</h3>
		            <h3>THANK YOU! for being a part of this fundraiser.</h3>
		            <p>Your Contribution helps us to take care of childrens in detroit phenoix center.</p>
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

	function new_event($eventname){

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
		$mail->addAddress($_SESSION['u_email']);     // Add a recipient
		$mail->isHTML(true);                                  // Set email format to HTML


		
		$mail->Subject = 'New Event Confirmation';
		$mail->Body    = '<html>
		              <body style="font-family:Georgia, serif; ">
		              <center>
		              
		        <div style="width:500px;background-color:#f5f5f5;border: 1px solid #a8a8a8; padding:20px; border-radius:2px;">
		        	<h2 style="color:#e60000;">DETROIT PHENIOX CENTER</h2>
		            <img src="https://scontent-ort2-2.cdninstagram.com/vp/dab330c3a04b24bb987abed742147509/5B8ABB80/t51.2885-19/s150x150/26873078_409153092875319_57809469530177536_n.jpg" height="100" width="100" style="border-radius:100%;"><br><br>'.
		             '<h2>'.$eventname.'</h2>'.
		            '<h3>Hello!&nbsp;'.$_SESSION['u_user_name'].'</h3>
		            <h3>THANK YOU! for creating an event and contributing our community.</h3>
		            <p>Your Contribution helps us to take care of childrens in detroit phenoix center.</p>
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

	