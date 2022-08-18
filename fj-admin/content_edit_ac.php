<?php 
include("session_check.php");
include 'config/confg.php'; 

$id = $_REQUEST['id_con'];	
$con_desc = addslashes($_REQUEST["con_desc"]);


$active = mysqli_query($con,"UPDATE `content_manage` SET `con_desc` = '$con_desc' WHERE `id` = '$id'");
	
?>
<script>
location.replace("content_manage.php");
</script>