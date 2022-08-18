<?php
	include("../fj-admin/config/confg.php");
	include("../session_check.php");

	$user_id = $_SESSION["user_id"];
	
	
	$job_id = addslashes($_REQUEST["job_id"]);

		$recurator_info = mysqli_query($con, "DELETE FROM job_listing
	
		 WHERE id = '$job_id' AND user_id = '$user_id'");
	
		
?>
<script>
location.replace("jobs_list.php");
</script>