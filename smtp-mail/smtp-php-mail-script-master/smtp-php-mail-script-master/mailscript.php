<?php
	include "classes/class.phpmailer.php";
	
	//Receiver Info
	$email = "sagordpi21@gmail.com";
	$name = "Sagor";
	
	//Sender Info
	$sender_name = "";
	$sender_email = "";
	$sender_password = "";
	
	$mail_subject = "Training Course Offers";
	$message = "Hello, How are U..... :)";
	
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->Host = "mail3.gridhost.co.uk";
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 2;
	$mail->SMTPSecure = "ssl";
	$mail->Username = $sender_email;
	$mail->Password = $sender_password;
	$mail->AddReplyTo($sender_email, $sender_name);
	$mail->SetFrom($sender_email);
	$mail->Subject = $mail_subject;
	$mail->AddAddress($email, $name);
	$mail->MsgHTML($message);
	$send = $mail->Send();
	
	if($send) {
		$replay = 'Mail Sent';
	} else {
		$replay = $mail->ErrorInfo;
	}
	print_r($replay);
	
?>