<?php
include("fj-admin/config/confg.php");
// Get PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$recurator_email = $_REQUEST["recurator_email"];
$user_id = $_REQUEST["user_id"];
$jobTitle = $_REQUEST["job_title"];
if (!empty($recurator_email) && !empty($user_id)) {
  
	$job_seeker_info_db = mysqli_query($con, "SELECT * FROM job_seeker_info WHERE user_id = '$user_id'");
	$job_seeker_info = mysqli_fetch_array($job_seeker_info_db);
	$job_seeker_email = $job_seeker_info['email'];

		/* Add PHPMailer
		################################*/
		include_once 'PHPMailer\PHPMailer.php';
		$mail = new PHPMailer();
		$mail->setFrom("badhon.officialmail@gmail.com", 'Foreignjobs');

		$mail->addAddress($job_seeker_email, "Foreignjobs Admin Received Your Report email");
		$mail->Subject = "Foreignjobs: Your Report Admin Received";
		$mail->isHTML(true);
		$mail->Body = '
			<table style="width: 100%">
				<tr style="background-color: #0e0e0e; height: 200px;">
					<td style="text-align: center;"><img style="width: 300px;" src="https://codetrackers.net/foreignjobs/image/logo.png" /></td>
				</tr>
				<tr style="text-align: center; background-color: #f1f1f1">
					<td>
						<div style="padding: 70px 0;">
							<h2 style="font-family:Arial,Helvetica,sans-serif; padding-bottom: 30px;line-height: 20px;">
								Thank you for help with us
							</h2>
							<br><br>
							<!-- Callout Panel -->
							<p style="font-family:Arial,Helvetica,sans-serif;  padding-top: 15px;line-height: 20px;">
								If you need help or have any questions, <br /> please contact us at <a href="mailto:trade@igniteotc.com" style="font-weight: bold;color: #154462;font-family:Arial,Helvetica,sans-serif;">http://www.foreignjobs24.com/</a>
							</p><!-- /Callout Panel -->		
						</div>			
					</td>
				</tr>
			</table>
			';
		$mail->send();

		$mail2 = new PHPMailer();
		$mail2->setFrom("badhon.officialmail@gmail.com", 'Foreignjobs');
		$mail2->addAddress($recurator_email, "Report Job");
		$mail2->Subject = "Foreignjobs: Report Your Job Post";
		$mail2->isHTML(true);
		$mail2->Body = '
			<table style="width: 100%">
				<tr style="background-color: #0e0e0e; height: 200px;">
					<td style="text-align: center;"><img style="width: 300px;" src="https://codetrackers.net/foreignjobs/image/logo.png" /></td>
				</tr>
				<tr style="text-align: center; background-color: #f1f1f1">
					<td>
						<div style="padding: 70px 0;">
							<h2 style="font-family:Arial,Helvetica,sans-serif; padding-bottom: 30px;line-height: 20px;">
								Report This Job<strong>: '. $jobTitle .'</strong>
							</h2>
							<br><br>
							<!-- Callout Panel -->
							<p style="font-family:Arial,Helvetica,sans-serif;  padding-top: 15px;line-height: 20px;">
								If you need help or have any questions, <br /> please contact us at <a href="mailto:trade@igniteotc.com" style="font-weight: bold;color: #154462;font-family:Arial,Helvetica,sans-serif;">http://www.foreignjobs24.com/</a>
							</p><!-- /Callout Panel -->		
						</div>			
					</td>
				</tr>
			</table>
			';
		$mail2->send();



?>
<script>
location.replace("all_jobs.php");
</script>
<?php

}else{
  
?>
<script>
location.replace("login.php");
</script>
<?php
}
?>
