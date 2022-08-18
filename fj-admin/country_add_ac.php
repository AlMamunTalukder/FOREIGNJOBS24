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
	

	
	$country_name = addslashes($_REQUEST["country_name"]);
	$map_code = addslashes($_REQUEST["map_code"]);
	
	$reg_action3 = mysqli_query($con,"INSERT INTO `all_country` (`id`, `country_name`, `map_code`) VALUES (NULL, '$country_name', '$map_code')");
	
?>
	

<script>
location.replace("country_manage.php");
</script>


