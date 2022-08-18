>
<?php
	include("../fj-admin/config/confg.php");
	include("../session_check.php");

	$user_id = $_SESSION["user_id"];
	
	
	$user_id = addslashes($_REQUEST["user_id"]);
	$job_id = addslashes($_REQUEST["job_id"]);

		$recurator_info = mysqli_query($con, "UPDATE job_apply SET status = '2'
	
		 WHERE user_id = '$user_id' AND job_id = '$job_id'");
	
		
?>
<script>
location.replace("manage_application.php?job_id=<?php echo $job_id; ?>");
</script>