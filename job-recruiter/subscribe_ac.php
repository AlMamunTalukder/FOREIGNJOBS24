<?php
	include("../fj-admin/config/confg.php");
	include("../session_check.php");
	
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	

	$user_id = $_SESSION['user_id'];
	$user_amount = addslashes($_REQUEST["user_amount"]);
	$user_transaction_id = addslashes($_REQUEST["user_transaction_id"]);
	$user_phone_number = addslashes($_REQUEST["user_phone_number"]);
	$subscribe_type = addslashes($_REQUEST["subscribe_type"]);
	
	$reg_action3 = mysqli_query($con,"INSERT INTO `subscribe` (`id`, `user_amount`, `user_transaction_id`, `user_phone_number`, `user_id`, `subscribe_type`) VALUES (NULL, '$user_amount', '$user_transaction_id', '$user_phone_number', '$user_id', '$subscribe_type')");
?>
	

<script>
location.replace("dashboard.php");
</script>


