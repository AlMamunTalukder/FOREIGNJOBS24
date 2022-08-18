<?php
include("session_check.php");
include("fj-admin/config/confg.php");

if (isset($_POST["update_details"])){
//$date = date("Y-m-d");
$user_id=$_SESSION['user_id'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$present_address = $_POST['present_address'];

$update_details1 = mysqli_query($con,"UPDATE `job_seeker_info` SET 
	full_name='$full_name',
	email='$email',
	phone='$phone' WHERE user_id='$user_id'");


$update_details2 = mysqli_query($con,"UPDATE `job_seeker_resume` SET 
	present_address='$present_address'  WHERE user_id='$user_id'");

}
?>

<script>
location.replace("welcome.php");
</script>
