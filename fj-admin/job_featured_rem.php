<?php 

include 'config/confg.php'; 

$id = $_REQUEST['id'];	


$active = mysqli_query($con,"UPDATE `job_listing` SET `fea_job` = '0' WHERE `id` = '$id'");
	
?>
<script>
location.replace("job_list.php");
</script>