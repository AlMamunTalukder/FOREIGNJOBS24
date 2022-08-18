<?php 

include 'config/confg.php'; 

$id = $_REQUEST['id'];	


$active = mysqli_query($con,"UPDATE `recurator_verification` SET `status` = '1' WHERE `id` = '$id'");
	
?>
<script>
location.replace("job_rec_verification.php");
</script>