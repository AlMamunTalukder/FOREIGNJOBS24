<?php session_start();

include 'config/confg.php'; 
	
$user_id = $_REQUEST['user_id'];

$_SESSION["user_id"] = $user_id;


?>
<script>
location.replace("../job-recruiter/dashboard.php");
</script>