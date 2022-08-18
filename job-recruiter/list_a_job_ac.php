<?php
	include("../fj-admin/config/confg.php");
	include("../session_check.php");

	// Get PHPMailer
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../PHPMailer/Exception.php';
	require '../PHPMailer/PHPMailer.php';
	require '../PHPMailer/SMTP.php';


	$user_id = $_SESSION["user_id"];
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	

	$job_title = addslashes($_REQUEST["job_title"]);
	$job_description = addslashes($_REQUEST["job_description"]);
	$salary = addslashes($_REQUEST["salary"]);
	$job_category = addslashes($_REQUEST["job_category"]);
	$job_type = addslashes($_REQUEST["job_type"]);
	
	$no_of_vacancy = addslashes($_REQUEST["no_of_vacancy"]);
	$edu_requirments = addslashes($_REQUEST["edu_requirments"]);
	$experiences_req = addslashes($_REQUEST["experiences_req"]);
	$job_requirements = addslashes($_REQUEST["job_requirements"]);
	$other_benefits = addslashes($_REQUEST["other_benefits"]);
	
	$job_location = addslashes($_REQUEST["job_location"]);
	$country = addslashes($_REQUEST["country"]);
	$job_deadline = addslashes($_REQUEST["job_deadline"]);
	
	$user_id = $_SESSION['user_id'];
	$recurator_verification1 = mysqli_query($con,"SELECT * FROM recurator_info WHERE user_id = '$user_id'");
	$recurator_info = mysqli_fetch_array($recurator_verification1);
	$company_name = $recurator_info['company_name'];
	$phone = $recurator_info['phone'];
	$email = $recurator_info['email'];
			
	$recurator_info = mysqli_query($con, "INSERT INTO `job_listing` (`id`, `user_id`, `job_title`, `job_description`, `salary`, `job_category`, `job_type`, `no_of_vacancy`, `edu_requirments`, `experiences_req`, `job_requirements`, `other_benefits`, `job_location`, `country`, `job_deadline`, `post_date`, `status`, `company_name`, `phone`, `email`) VALUES (NULL, '$user_id', '$job_title','$job_description','$salary','$job_category','$job_type','$no_of_vacancy','$edu_requirments','$experiences_req','$job_requirements','$other_benefits','$job_location','$country','$job_deadline','$date','0', '$company_name', '$phone', '$email')");

	/* Add PHPMailer
	################################*/
	include_once 'PHPMailer\PHPMailer.php';
	$mail = new PHPMailer();
	$mail->setFrom("badhon.officialmail@gmail.com", 'Foreignjobs');

	$mail->addAddress($email, "Foreignjobs Admin Received your Job Post");
	$mail->Subject = "Foreignjobs: Your Job Post Admin Received";
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
							Thank you for Post Your Job
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


	/* Add PHPMailer For Sup Admin
	################################*/
	$s_ad_db = mysqli_query($con,"SELECT * FROM sup_ad_log");
	$s_ad_info = mysqli_fetch_array($s_ad_db);
	$s_ad_email = $s_ad_info['email'];

	$mail2 = new PHPMailer();
	$mail2->setFrom("badhon.officialmail@gmail.com", 'Foreignjobs');
	$mail2->addAddress($s_ad_email, "New Job");
	$mail2->Subject = "Foreignjobs: New Job Add";
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
							New Job Add By<strong>: '. $company_name .'</strong>
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
	location.replace("jobs_list.php?succ=Job Listing Succefull");
</script>
