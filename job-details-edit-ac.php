<?php
	include("fj-admin/config/confg.php");
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	
	$job_id = addslashes($_REQUEST["job_id"]);
	
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
	
	
			
			$recurator_info = mysqli_query($con, "UPDATE job_listing SET job_title = '$job_title', 
			job_description = '$job_description', salary = '$salary', job_category = '$job_category', 
			job_type = '$job_type', no_of_vacancy = '$no_of_vacancy', edu_requirments = '$edu_requirments', 
			experiences_req = '$experiences_req', job_requirements = '$job_requirements', other_benefits = '$other_benefits', job_location = '$job_location', 
			country = '$country', job_deadline = '$job_deadline', post_date = '$date',status = '0' 
			WHERE id = '$job_id'");

?>
			 
<script>
	location.replace("fj-admin/job_list.php?succ=Job Listing Succefull");
</script>
