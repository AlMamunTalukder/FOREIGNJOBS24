<?php 

include 'config/confg.php'; 

$id = $_REQUEST['id'];	


$active = mysqli_query($con,"DELETE FROM recurator_verification WHERE id='$id'");
	
?>
<script>
location.replace("job_rec_verification.php");
</script>