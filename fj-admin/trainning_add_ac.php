<?php
	include("session_check.php");
	include("config/confg.php");
	
	
	
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	date_default_timezone_set("Asia/Dhaka");
	$date  = date("Y-m-d");
	$date_time  = date("Y-m-d g:i:s a");
	

	
	$category_name = addslashes($_REQUEST["category_name"]);
	$title = addslashes($_REQUEST["title"]);
	$description = addslashes($_REQUEST["description"]);
	$dates = addslashes($_REQUEST["dates"]);
	$duration = addslashes($_REQUEST["duration"]);
	
	$no_of_class = addslashes($_REQUEST["no_of_class"]);
	$class_sechdule = addslashes($_REQUEST["class_sechdule"]);
	$total_houre = addslashes($_REQUEST["total_houre"]);
	$last_date = addslashes($_REQUEST["last_date"]);
	$venue = addslashes($_REQUEST["venue"]);
	
	$fees = addslashes($_REQUEST["fees"]);
	$contacts = addslashes($_REQUEST["contacts"]);
	$email = addslashes($_REQUEST["email"]);
	$who_can_attend = addslashes($_REQUEST["who_can_attend"]);
	$tutor_name = addslashes($_REQUEST["tutor_name"]);
	
	$tutor_desig = addslashes($_REQUEST["tutor_desig"]);
	$tutor_details = addslashes($_REQUEST["tutor_details"]);
	$date = addslashes($_REQUEST["date"]);
	$status = addslashes($_REQUEST["status"]);
	
	$date = date("Y-m-d");


	$reg_action3 = mysqli_query($con,"INSERT INTO `trainning_manage` (`id`, `category_name`, `title`, `description`, `dates`,
	`duration`,`no_of_class`, `class_sechdule`, `total_houre`, `last_date`, `venue`,
	`fees`, `contacts`, `email`, `who_can_attend`, `tutor_name`,
	`tutor_desig`, `tutor_details`, `date`, `status`
	) 
	VALUES (NULL, '$category_name', '$title', '$description', '$dates',
	'$duration','$no_of_class', '$class_sechdule', '$total_houre', '$last_date', '$venue',
	'$fees', '$contacts', '$email', '$who_can_attend', '$tutor_name',
	'$tutor_desig', '$tutor_details', '$date', '1')");
	
	
?>
	

<script>
location.replace("trainning_manage.php");
</script>


