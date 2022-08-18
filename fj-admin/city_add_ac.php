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
	

	
	$country_id = addslashes($_REQUEST["country_id"]);
	$city_name = addslashes($_REQUEST["city_name"]);
	
	$reg_action3 = mysqli_query($con,"INSERT INTO `city_manage` (`id`, `country_id`, `city_name`) VALUES (NULL, '$country_id', '$city_name')");
	
?>
	

<script>
location.replace("city_manage.php");
</script>


