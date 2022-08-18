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
	

	
	$category_name = addslashes($_REQUEST["category_name"]);
	
	

	$reg_action3 = mysqli_query($con,"INSERT INTO `trainning_category` (`id`, `category_name`) VALUES (NULL, '$category_name')");
	
	
?>
	

<script>
location.replace("trainning_category.php");
</script>


