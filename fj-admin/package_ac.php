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
	

	
	$package_name = addslashes($_REQUEST["package_name"]);
	$package_limit = addslashes($_REQUEST["package_limit"]);
	$package_fee = addslashes($_REQUEST["package_fee"]);
	
	$reg_action3 = mysqli_query($con,"INSERT INTO `package` (`id`, `package_name`, `package_limit`, `package_fee`, `package_id`) VALUES (NULL, '$package_name', '$package_limit', '$package_fee', '$package_name')");
	
?>
	

<script>
location.replace("package.php");
</script>


