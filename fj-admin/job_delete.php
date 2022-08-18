<?php 

include 'config/confg.php'; 

$id = $_REQUEST['id'];	


$active = mysqli_query($con,"DELETE FROM `job_listing` WHERE `id` = '$id'");
	
?>
<script>
location.replace("job_list.php");
</script>