<?php 
include("session_check.php");
include 'config/confg.php';

//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");

$id = $_REQUEST["id"];
$page_run = mysqli_query($con,"SELECT * FROM mentor_pre_info WHERE id = '$id'");
$page_row = mysqli_fetch_array($page_run);
$id = $page_row['id'];

$email = $page_row["email_address"];
$first_name = $page_row["first_name"];
$last_name = $page_row["last_name"];

$ij = 1;
$mentor_info = mysqli_query($con,"SELECT * FROM mentor_info order by id desc");
$mentor_info_num = mysqli_num_rows($mentor_info);

	$cal = $mentor_info_num + $ij;
	$new_uniq_id = "MENTit0".$cal; 
	
	$reg_action3 = mysqli_query($con,"UPDATE `mentor_pre_info`SET uniq_id = '$new_uniq_id',
	status = '1' WHERE id = '$id'");
	
	$reg_action3 = mysqli_query($con,"INSERT INTO `mentor_info` (`id`, `uniq_id`, `email_address`) VALUES (NULL, '$new_uniq_id', '$email')");
	
	include "../classes/class.phpmailer.php";
	
	//Receiver Info
			$email = $email;
			$name  = " Complete Your Account | MENTit ";
			//Sender Info
			$sender_name     = "MENTit";
			$sender_email    = "noreply@mentit.org";
			$sender_password = "mentit@#2018";
			$mail_subject    = ' Complete Your Account | MENTit ';
			$message         = '
					
						
						<html>
						<head>
						<title> Active Your Account | MENTit </title>
						
						</head>
						
						<body style="background:#f1eff0;
						font-family:Verdana, Arial, Helvetica, sans-serif;
						font-size:16px;
						color:#666666;
						margin:15px;">
						<table width="643" border="0" align="center" cellpadding="0" cellspacing="0" style="-webkit-border-radius: 5px;
						-moz-border-radius: 5px;
						border-radius: 5px;
						border:1px solid #37a000;">
						<tr>
						<td height="62" align="center" style=" background:#f8f8f8; padding:15px; border-bottom:1px solid #37a000;" valign="middle"><img src="http://mentit.org/img/main/navbarLogo.png" /></td>
						</tr>
						<tr>
						<td align="center" valign="middle">&nbsp;</td>
						</tr>
						<tr>
						<td align="left" valign="top" bgcolor="#009966" style="background:#ffffff;
						color:#666666;
						padding:10px;text-decoration:none;">
						
						Dear ' . $first_name . ' ' . $last_name . '
						
						</td>
						</tr>
						
						<tr>
						<td align="center" valign="middle">&nbsp; </td>
						</tr>
						
						<tr>
						<td align="left" valign="top" bgcolor="#009966" style="background:#ffffff;
						color:#666666;
						padding:10px;text-decoration:none;">
						
						Congratulation !!! Your Mentor Pre-Registration Successfully approved by Admin.
						Now you can complete your full Mentor Profile. 
						
						</td>
						</tr>
						
						<tr>
						<td align="center" valign="middle">&nbsp; </td>
						</tr>
						
						<tr>
						<td align="center" valign="middle">
						
						<a href="mentit.org/mentor_profile_complete.php?uniq_id=' . $new_uniq_id . '" style="color:#FFFFFF; background:#37a000; padding:15px; display:block; text-decoration:none; text-align:center;" > Complete Your Profile </a>
						</td>
						</tr>
						<tr>
						<td align="center" valign="middle">&nbsp;</td>
						</tr>
						<tr>
						<td align="center" valign="middle" style="background:#f7f7f7; color:#FFFFFF; padding:10px; text-align:left;">&nbsp;</td>
						</tr>
						<tr>
						<td align="center" valign="middle">&nbsp;</td>
						</tr>
						<tr>
						<td align="center" valign="middle" style="background:#dbdbdb;
						text-shadow: rgba(0,0,0,.4) 0 1px 0;
						color: #3d3f41;
						padding:5px;">
						Please note that : <br />
						This is an automated mail Please Do Not reply	</td>
						</tr>
						<tr>
						<td align="center" valign="middle">&nbsp;</td>
						</tr>
						<tr>
						<td height="50" align="center" valign="middle" style="background:#3d3f41;
						color:#f8f7f7;">&copy; ' . date("Y") . ' MENTit </td>
						</tr>
						</table>
						</body>
						</html>
						
						';
			$mail            = new PHPMailer;
			$mail->CharSet   = 'UTF-8';
			$mail->IsSMTP();
			$mail->Host       = "mentit.org";
			$mail->Port       = 465;
			$mail->SMTPAuth   = true;
			$mail->SMTPDebug  = 0;
			$mail->SMTPSecure = "ssl";
			$mail->Username   = $sender_email;
			$mail->Password   = $sender_password;
			$mail->AddReplyTo($sender_email, $sender_name);
			$mail->SetFrom($sender_email);
			$mail->Subject = $mail_subject;
			$mail->AddAddress($email, $name);
			$mail->MsgHTML($message);
			$send = $mail->Send();
			/*if ($send) {
				//$replay = 'Mail Sent';
			} else {
				//$replay = $mail->ErrorInfo;
			}*/
			//print_r($replay);
	
	
?>
<script>
location.replace("mentor_pre_registration_list.php");
</script>