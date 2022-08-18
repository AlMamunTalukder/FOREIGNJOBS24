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
	

	
	$com_type = addslashes($_REQUEST["com_type"]);

	$reg_action3 = mysqli_query($con,"INSERT INTO `company_type` (`id`, `com_type`) VALUES (NULL, '$com_type')");
	
	
?>
	

<script>
location.replace("company_type.php");
</script>


