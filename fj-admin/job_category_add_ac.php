<?php
	include("session_check.php");
	include("config/confg.php");
	
	
	
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	

	
	$cate_name = addslashes($_REQUEST["cate_name"]);
	
	

	$reg_action3 = mysqli_query($con,"INSERT INTO `job_categories` (`id`, `cate_name`) VALUES (NULL, '$cate_name')");
	
	
?>
	

<script>
location.replace("job_category.php");
</script>


