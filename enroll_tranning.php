<?php session_start();
include("fj-admin/config/confg.php");

$back = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


if(empty($_SESSION["user_id"])){
?>

		<script>
		location.replace("login.php");
		</script>

<?php
} else {
	
	
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	
	$user_id = $_SESSION["user_id"];
	
	$tra_id = addslashes($_REQUEST["tra_id"]);
	
	
	$reg_action3 = mysqli_query($con,"INSERT INTO `enroll_trainning` (`id`, `tra_id`, `user_id`, `date`) VALUES (NULL, '$tra_id', '$user_id', '$date')");
		

?>
	
		<script>
		location.replace("trainning_manae_job_seeker.php?job_title=<?php echo $job_title; ?>");
		</script>
<?php } ?>
