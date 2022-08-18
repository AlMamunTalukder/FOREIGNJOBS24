<?php
	include("config/confg.php");
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	
	$page_id = addslashes($_REQUEST["page_id"]);

	$page_title = addslashes($_REQUEST["page_title"]);
	$page_description = addslashes($_REQUEST["page_description"]);
			
	$recurator_info = mysqli_query($con, "UPDATE pages SET title = '$page_title', 
	designation = '$page_description' WHERE id = '$page_id'");

?>
			 
<script>
	location.replace("pages.php?succ=Job Listing Succefull");
</script>
