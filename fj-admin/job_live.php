<?php 

include 'config/confg.php'; 

// Get PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';


$id = $_REQUEST['id'];	
$email = $_REQUEST['email'];	
$job_title = $_REQUEST['job_title'];	


$active = mysqli_query($con,"UPDATE `job_listing` SET `status` = '1' WHERE `id` = '$id'");


/* Add PHPMailer
################################*/
include_once 'PHPMailer\PHPMailer.php';
$mail = new PHPMailer();
$mail->setFrom("badhon.officialmail@gmail.com", 'Foreignjobs');

$mail->addAddress($email, "Job Post Approve");
$mail->Subject = "Foreignjobs: Your Job Post Approve";
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
						Admin Approve Your Job Post <br>
						<strong>Job Name: </strong>'.$job_title.'
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

?>
<script>
location.replace("job_list.php");
</script>