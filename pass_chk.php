<?php

	include("fj-admin/config/confg.php"); 

	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	

	
	 $password = addslashes($_REQUEST["password"]);
	 $c_password = addslashes($_REQUEST["c_password"]);
	
	$passwordlength= strlen($password);
	
		if ($passwordlength < 7){
		?>
		<div class="alert alert-danger">
		  <i class="fa fa-times-circle"></i> <strong>Invalid password.</strong> Password must be at least 8 characters
		</div>
	<?php
		} else {
		
	if($password == $c_password){
		
	?>
	<div class="alert alert-success">
	  <i class="fa fa-check-circle" ></i> <strong>Success!</strong> Password and Confirm Password is match.
	</div>
	
	<?php
	 } else {
	
	?>
	<div class="alert alert-danger">
	  <i class="fa fa-times-circle"></i> <strong>Oops !</strong> Password and Confirm Password does not match.
	</div>
	
	<?php 
	} 
	
	}
?>

