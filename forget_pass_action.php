<?php session_start();
//Require Database Connection
	include("fj-admin/config/confg.php");
	include "smtp-mail/classes/class.phpmailer.php";
	
//Login Form Values
	$username        = addslashes($_REQUEST['username']);
	
$stmt = mysqli_query($con, "SELECT * FROM job_seeker_info WHERE email='$username' and status='0'");
	$user_result = mysqli_num_rows($stmt);
	if ($user_result == 1) { //Jodi Kisu Paowa jay...
		$user_login = mysqli_fetch_array($stmt);
		
		$email_js   = $user_login['email'];
		$password_db   = $user_login['password'];
		$full_name   = $user_login['full_name'];
		
		
		//Receiver Info
		$email = $email_js;
		$name = $full_name;
		
		//Sender Info
		$sender_name = "Foregin Jobs 24";
		$sender_email = "noreplay@foreignjobs24.com";
		$sender_password = "753753";
		
		$mail_subject = "Forget Password | Foregin Jobs 24";
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
												
												Hi , '.$full_name.'
												
												<table width="100%" cellpadding="0" cellspacing="0" border="0">

													<tbody>

														<tr>

															<td height="20" style="font-size:1px;line-height:1px"></td>

														</tr>

													</tbody>

												</table>

												Here is your password for login Foreignjobs24.com . <br/>
												
												Password : '.$password_db.'

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
					location.replace("forget_final.php");
				</script>
				
				<?php
			
	
	} elseif($user_result == 0) {
		
	
	
	$stmt = mysqli_query($con, "SELECT * FROM recurator_info WHERE email='$username' ");
	$user_result = mysqli_num_rows($stmt);
	
		$user_login = mysqli_fetch_array($stmt);
		
		$email_js   = $user_login['email'];
		$password_db   = $user_login['password'];
		$full_name   = $user_login['full_name'];
		
		
		//Receiver Info
		$email = $email_js;
		$name = $full_name;
		
		//Sender Info
		$sender_name = "Foregin Jobs 24";
		$sender_email = "noreplay@foreignjobs24.com";
		$sender_password = "753753";
		
		$mail_subject = "Forget Password | Foregin Jobs 24";
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
												
												Hi , '.$full_name.'
												
												<table width="100%" cellpadding="0" cellspacing="0" border="0">

													<tbody>

														<tr>

															<td height="20" style="font-size:1px;line-height:1px"></td>

														</tr>

													</tbody>

												</table>

												Here is your password for login Foreignjobs24.com . <br/>
												
												Password : '.$password_db.'

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
					location.replace("forget_password.php");
				</script>
				
				<?php
				} else {

	
		$message1 = 'You are not a register member. Please Register for Login !!!';
		?>
		
		<script>
			location.replace("forget_password.php?error_view=<?php echo $message1; ?>");
		</script>
		
		<?php
	}
?>