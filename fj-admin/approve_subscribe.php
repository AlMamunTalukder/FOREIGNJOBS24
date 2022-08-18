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
	

	
	$user_id = addslashes($_REQUEST["user_id"]);
	
	$reg_action3 = mysqli_query($con,"UPDATE subscribe SET v_active='1' WHERE user_id='$user_id'");
	var_dump($reg_action3);
	
	
?>
	

<script>
location.replace("verification_package.php");
</script>


