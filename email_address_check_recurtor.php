<?php

	include("fj-admin/config/confg.php"); 

	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	

	
	$rec_email = addslashes($_REQUEST["rec_email"]);
	
	
	$q1 = mysqli_query($con,"SELECT * FROM `recurator_info` where email = '$rec_email'");
	$r1 = mysqli_num_rows($q1);
	
	if($r1 == 0){
		
	?>
	<div class="alert alert-success">
	  <i class="fa fa-check-circle" ></i> <strong>Success!</strong> You can use this Email.
	</div>
	
	<?php
	 } else {
	
	?>
	<div class="alert alert-danger">
	  <i class="fa fa-times-circle"></i> <strong>Oops !</strong> This Email is already used !!!
	</div>
	
	<?php 
	} 
?>

