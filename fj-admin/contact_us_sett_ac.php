<?php
	include("session_check.php");
	include 'config/confg.php'; 
	
	$user = $_SESSION["user"];
	
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Web Developer/Designer : Md. Sazzad Hossain Salim
	//@Author : StarFDC
	//@Cell : +88 01922 52 44 69
	//@Website : www.starfdc.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	
	
	$address_con = addslashes($_REQUEST['address_con']);
	$google_map = addslashes($_REQUEST['google_map']);

	
	$back = addslashes($_REQUEST["back"]);	
	
	if(!empty($google_map))
	{
	 $q2 = mysqli_query($con,"update contact_manage set google_map = '$google_map' where id = '1'");
	}
	
	$q2 = mysqli_query($con,"update contact_manage set address_con = '$address_con' where id = '1'");
	
	$facebook = addslashes($_REQUEST['facebook']);
	$twitter = addslashes($_REQUEST['twitter']);
	$google_plus = addslashes($_REQUEST['google_plus']);
	$linkedin = addslashes($_REQUEST['linkedin']);
	$youtube = addslashes($_REQUEST['youtube']);
	

	$q2 = mysqli_query($con,"update social_manage set facebook = '$facebook' , twitter = '$twitter', google_plus = '$google_plus', linkedin = '$linkedin', youtube = '$youtube' where id = '1'");
	
?>

<script>
location.replace("contact_manage.php");
</script>
