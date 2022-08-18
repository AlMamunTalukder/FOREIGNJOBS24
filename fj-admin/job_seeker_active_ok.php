<?php 

include 'config/confg.php'; 

if (isset($_REQUEST["id"])) {
$id = $_REQUEST['id'];	
$active = mysqli_query($con,"UPDATE `job_seeker_info` SET status='0' WHERE id='$id'");
}

if (isset($_REQUEST["deactivate"])) {
$deactivate = $_REQUEST['deactivate'];
$deactive = mysqli_query($con,"UPDATE `job_seeker_info` SET status='1' WHERE id='$deactivate'");
}
	
?>
