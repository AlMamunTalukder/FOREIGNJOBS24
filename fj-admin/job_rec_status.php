<?php 

include 'config/confg.php'; 

$id = $_REQUEST['id'];	
$table_name = $_REQUEST['table_name'];
$sta = $_REQUEST['sta'];

$active = mysqli_query($con,"UPDATE $table_name SET status='$sta' WHERE id='$id'");
	
?>
<script>
location.replace("job_recurator_info.php");
</script>