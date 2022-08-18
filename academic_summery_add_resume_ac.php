<?php
include("session_check.php");
include("fj-admin/config/confg.php");

foreach ($_POST['education_level'] as $index => $education_level) {

	echo $cgpa = $_POST['cgpa'][$index];
	$passing_year = $_POST['passing_year'][$index];
	$major_group = $_POST["major_group"][$index];
	$duration_years = $_POST['duration_years'][$index];
	$institute_name = $_POST["institute_name"][$index];
	$user_id= $_SESSION['user_id'];


//$academic_detail_add = mysqli_query($con,"INSERT INTO `job_seeker_education` (`id`, `user_id`, `education_level`, `cgpa`, `passing_year`, `major_group`, `duration_years`, `institute_name`) VALUES (NULL, '$user_id', '$education_level', '$cgpa', '$passing_year', '$major_group', '$duration_years', '$institute_name')");

}

?>

<script>
//location.replace("resume-view.php");
</script>