<?php
	include("fj-admin/config/confg.php");
	include("session_check.php");

	$user_id = $_SESSION["user_id"];
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	

	$job_id = addslashes($_REQUEST["job_id"]);
	
	
			
			$recurator_info = mysqli_query($con, "Delete from job_apply where job_id = '$job_id' and user_id = '$user_id'");

?>
			 
<script>
	location.replace("applied_jobs.php");
</script>
