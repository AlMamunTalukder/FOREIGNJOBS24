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
	

	
	$sub_user = addslashes($_REQUEST["sub_user"]);
	$sub_pass = md5($_REQUEST["sub_pass"]);
	$email = addslashes($_REQUEST["email"]);
	$user_role_id = addslashes($_REQUEST["user_role_id"]);
	
	$reg_action3 = mysqli_query($con,"INSERT INTO `sup_ad_log` (`id`, `sup_user`, `sup_pass`, `status`, `email`, `admin_role`) VALUES (NULL, '$sub_user', '$sub_pass', '1', '$email', '$user_role_id')");
	
?>
	

<script>
location.replace("user_role.php");
</script>


