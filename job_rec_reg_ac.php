<?php

	include("fj-admin/config/confg.php"); 
	include "smtp-mail/classes/class.phpmailer.php";
	
	
	
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	

	
	$full_name = addslashes($_REQUEST["full_name"]);
	$company_name = addslashes($_REQUEST["company_name"]);
	$c_type = addslashes($_REQUEST["c_type"]);
	
	$phone = addslashes($_REQUEST["phone"]);
	$email = addslashes($_REQUEST["email"]);
	$password = addslashes($_REQUEST["password"]);
	$c_password = addslashes($_REQUEST["c_password"]);
	
	$company_category = addslashes($_REQUEST["company_category"]);
	$country = addslashes($_REQUEST["country"]);
	
	
	$q1 = mysqli_query($con,"SELECT * FROM `recurator_info` where email = '$email'");
	$r1 = mysqli_num_rows($q1);
	
	if($r1 == 0){
	
		if($password == $c_password){
		
			
			$unique_id = mysqli_query($con,"SELECT * FROM recurator_info");
			$unique_id_view = mysqli_num_rows($unique_id);
			$next_id = $unique_id_view +'1';
			$add_extra = 'FJJR0';
			$unique_user_id = $add_extra.$next_id;
			
	
	$reg_action3 = mysqli_query($con,"INSERT INTO `recurator_info` (`id`, `user_id`, `full_name`, `company_name`, `c_type`, `email` , `password`, `company_category`, `phone`, `country`) VALUES (NULL, '$unique_user_id', '$full_name', '$company_name', '$c_type', '$email', '$password', '$company_category', '$phone', '$country')");
		
	
	//Receiver Info
		$email = $email;
		$name = $full_name;
		
		//Sender Info
		$sender_name = "Foregin Jobs 24";
		$sender_email = "noreplay@foreignjobs24.com";
		$sender_password = "753753";
		
		$mail_subject = "Welcome | Foregin Jobs 24";
		$message = '
		
			
			
		<!DOCTYPE HTML>

<html lang="en-US">

<head>

<meta charset="UTF-8">

<title></title>

</head>

<body>

<div id=":lh" class="a3s" style="overflow: hidden;">

<div class="adM">

</div>

<div bgcolor="#eeeeee" style="margin:0">

	<table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#eeeeee" style="width:100%;background-color:#eeeeee">

		<tbody>

			<tr>

				<td align="center">

					<table cellpadding="0" cellspacing="0" border="0" width="700" align="center" bgcolor="#ffffff" style="background-color:#ffffff">

						<tbody>

							<tr>

								<td>

									<table cellpadding="0" cellspacing="0" border="0" width="100%" valign="middle" bgcolor="#404040">

										<tbody>

											<tr>

											<td width="1%" height="80" align="center" valign="middle" style="background-color:#ffffff">
											<img src="https://foreignjobs24.com/image/logo.png" alt="" width="250" height="100" />											</td>
											</tr>
										</tbody>
									</table>

								</td>

							</tr>

							<tr>

								<td style="border:1px solid #cccccc">

									<table cellpadding="0" cellspacing="0" border="0" width="100%">

										<tbody>

											<tr>

												

												

												
											</tr>
										</tbody>
									</table>

									<table cellpadding="0" cellspacing="0" border="0" width="100%">

										<tbody>

											<tr>

											<td width="3%">&nbsp;</td>

											<td width="94%" style="font-family:Helvetica,arial,sans-serif;font-size:16px;line-height:22px;color:#333333;text-align:left">

												<div>

													<table width="100%" cellpadding="0" cellspacing="0" border="0">

													<tbody>

														<tr>

															<td height="30" style="font-size:1px;line-height:1px"></td>

														</tr>

													</tbody>

													</table>

												</div>

												<div style="font-size:0;max-height:0;line-height:0;overflow:hidden">

													<table width="100%" cellpadding="0" cellspacing="0" border="0">

														<tbody>

															<tr>

																<td height="20" style="font-size:1px;line-height:1px"></td>

															</tr>

														</tbody>

													</table>

												</div>
												
												Hi , '.$full_name.' ( '.$company_name.' )
												
												<table width="100%" cellpadding="0" cellspacing="0" border="0">

													<tbody>

														<tr>

															<td height="20" style="font-size:1px;line-height:1px"></td>

														</tr>

													</tbody>

												</table>

												Welcome to Foreignjobs24.com. <br/> 
												Here is your login information for Foreignjobs24.com . <br/>
												Company Name  : '.$company_name.'  <br/>
												Email  : '.$email.'  <br/>
												Password : '.$password.'  <br/>

												<table width="100%" cellpadding="0" cellspacing="0" border="0">

													<tbody>

														<tr>

															<td height="20" style="font-size:1px;line-height:1px"></td>

														</tr>

													</tbody>

												</table>		


											


											

												<table width="223" align="center" cellpadding="10" cellspacing="0" style="min-width:280px;text-align:center">

													<tbody>

														<tr>

															<td style="font-family:Arial,Helvetica,sans-serif;background-color:#83bf00;border:1px solid #83bf00;border-radius:8px">

																<a href="https://foreignjobs24.com/login.php" style="color:#FFFFFF; text-decoration:none; width:250px;" target="_blank">

																	Login

																</a>

															</td>

														</tr>

													</tbody>

											  </table>

												<table width="100%" cellpadding="0" cellspacing="0" border="0">

													<tbody>

														<tr>

															<td height="20" style="font-size:1px;line-height:1px"></td>

														</tr>

													</tbody>

												</table>

												Cheers,

												<table width="100%" cellpadding="0" cellspacing="0" border="0">

													<tbody>

														<tr>

															<td height="20" style="font-size:1px;line-height:1px"></td>

														</tr>

													</tbody>

												</table>

												Team Foreginjobs24<br>

												<a href="https://www.foreignjobs24.com/" style="color:#0099cc;text-decoration:none" target="_blank">www.foreignjobs24.com</a>

												<table width="100%" cellpadding="0" cellspacing="0" border="0">

													<tbody>

														<tr>

															<td height="30" style="font-size:1px;line-height:1px"></td>

														</tr>

													</tbody>

												</table>

											</td>

											<td width="3%">&nbsp;</td>

											</tr>

										</tbody>

									</table>

									<table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size:16px;color:#cccccc">

										<tbody>

											<tr>

												<td width="20" height="40">&nbsp;</td>

												<td align="center" style="font-family:Helvetica,arial,sans-serif;font-size:16px;border-top:1px solid #cccccc">

													
												</td>

												<td width="20" height="40">&nbsp;</td>

										  </tr>

										</tbody>

									</table>

								 

								</td>

							</tr>

						</tbody>

					</table>

					<table cellpadding="0" cellspacing="0" border="0" width="700" align="center" bgcolor="#eeeeee" style="background-color:#eeeeee">

						<tbody>

							<tr>

								<td align="center">

									<div>

										<table width="100%" cellpadding="0" cellspacing="0" border="0">




											<tbody>

												

											</tbody>

										</table>

									</div>

									<div style="font-size:0;max-height:0;line-height:0;overflow:hidden">

										<table width="100%" cellpadding="0" cellspacing="0" border="0">

											<tbody>

												<tr>

													<td height="10" style="font-size:1px;line-height:1px"></td>

												</tr>

											</tbody>

										</table>

										

										<table width="100%" cellpadding="0" cellspacing="0" border="0">

											<tbody>

												<tr>

													<td height="5" style="font-size:1px;line-height:1px"></td>

												</tr>

											</tbody>

										</table>

									</div>

									<div style="font-size:0;max-height:0;line-height:0;overflow:hidden">

										<table width="100%" cellpadding="0" cellspacing="0" border="0">

											<tbody>

												<tr>

													<td height="10" style="font-size:1px;line-height:1px"></td>

												</tr>

											</tbody>

										</table>

									</div>

							  </td>
							</tr>

							<tr>

								<td width="100%" align="center" bgcolor="#eeeeee" style="background-color:#eeeeee">

								
							</td>

							</tr>

						</tbody>

					</table>

				</td>

			</tr>

		</tbody>

	</table>

	<div class="yj6qo"></div>

	<div class="adL">

	</div>

</div>

<div class="adL">

</div>

</div>

</body>

</html>
		
		';
		
		$mail = new PHPMailer;
		$mail->IsSMTP();
		$mail->Host = "mail.foreignjobs24.com";
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
	
		
	?>
	
		<script>
		location.replace("job_recurator_success.php?user_id=<?php echo $user_id; ?>");
		</script>
		
<?php
} else {
?>

<script>
	location.replace("job_recurator.php?error_view='Password and Confirm Password does not match. !!!'");
</script>

<?php

} } else { ?>

<script>
	location.replace("job_recurator.php?error_view='Email Address already used !!!'");
</script>

<?php } ?>
