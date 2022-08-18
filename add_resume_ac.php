<?php
include("session_check.php");
include("fj-admin/config/confg.php");

if (isset($_POST["personal_details"])){
$user_id=$_SESSION['user_id'];
$date = date("Y-m-d");

$fathers_ame = $_POST['fathers_ame'];
$mother_name = $_POST['mother_name'];
$birth_date = $_POST['birth_date'];
$religion = $_POST['religion'];
$marital_status = $_POST['marital_status'];
$nationality = $_POST['nationality'];
$nid = $_POST['nid'];
$permanent_address = $_POST['permanent_address'];
$present_address = $_POST['present_address'];

$academic_detail_add = mysqli_query($con,"INSERT INTO `job_seeker_resume` (`id`,`user_id`,`fathers_ame`,`mother_name`,`birth_date`,`religion`,`marital_status`,`nationality`,`nid`,`permanent_address`,`present_address`,`up_date`) VALUES (NULL, '$user_id', '$fathers_ame', '$mother_name', '$birth_date', '$religion','$marital_status','$nationality','$nid','$permanent_address','$present_address','$date')");
}

if (isset($_POST["carieer_details_add"])){
$user_id=$_SESSION['user_id'];
$date = date("Y-m-d");

$career_objective = $_POST['career_objective'];
$career_summary = $_POST['career_summary'];
$presnt_salary = $_POST['presnt_salary'];
$expected_salary = $_POST['expected_salary'];
$optLevel = $_POST['optLevel'];
$optAvail = $_POST['optAvail'];

$academic_detail_add = mysqli_query($con,"INSERT INTO `job_seeker_carieer_details` (`id`,
`user_id`,`career_objective`,`career_summary`,`presnt_salary`,`expected_salary`,`optLevel`,`optAvail`,`up_date`) VALUES (NULL, '$user_id', '$career_objective', '$career_summary', '$presnt_salary', '$expected_salary','$optLevel','$optAvail','$date')");
}


if (isset($_POST["pref_details_add"])){
$user_id=$_SESSION['user_id'];
$date = date("Y-m-d");

$job_cate = $_POST['job_cate'];
$special_skill = $_POST['special_skill'];
$districs = $_POST['districs'];
$country = $_POST['country'];
$orgainization_type = $_POST['orgainization_type'];

$academic_detail_add = mysqli_query($con,"INSERT INTO `job_seeker_pref_details` (`id`,
`user_id`,`job_cate`,`special_skill`,`districs`,`country`,`orgainization_type`,`up_date`) VALUES (NULL, '$user_id', '$job_cate', '$special_skill', '$districs', '$country','$orgainization_type','$date')");
}


if (isset($_POST["add_specialization"])){
$user_id=$_SESSION['user_id'];
//$date = date("Y-m-d");

$skills = $_POST['skills'];
$skill_description = $_POST['skill_description'];
$extra_activitis = $_POST['extra_activitis'];

$academic_detail_add = mysqli_query($con,"INSERT INTO `job_seeker_specialization` (`id`,
`user_id`,`skills`,`skill_description`,`extra_activitis`) VALUES (NULL, '$user_id', '$skills', '$skill_description', '$extra_activitis')");
}


if (isset($_POST["other_relatiive_info_add"])){
$user_id=$_SESSION['user_id'];
$date = date("Y-m-d");

$orthinfo_career_summary = $_POST['orthinfo_career_summary'];
$orthinfo_specific_summary = $_POST['orthinfo_specific_summary'];
$ortinfo_key = $_POST['ortinfo_key'];

$academic_detail_add = mysqli_query($con,"INSERT INTO `job_seeker_other_relatiive_info` (`id`,
`user_id`,`orthinfo_career_summary`,`orthinfo_specific_summary`,`ortinfo_key`,`up_date`) VALUES (NULL, '$user_id', '$orthinfo_career_summary', '$orthinfo_specific_summary', '$ortinfo_key','$date')");
}


if (isset($_POST["training_summary_add"])){
foreach ($_POST['train_title'] as $index => $train_title) {

	$train_cont = $_POST['train_cont'][$index];
	$train_coverd = $_POST['train_coverd'][$index];
	$train_year = $_POST["train_year"][$index];
	$trarin_insti = $_POST['trarin_insti'][$index];
	$train_duration = $_POST["train_duration"][$index];
	$train_location = $_POST["train_location"][$index];
	$user_id=$_SESSION['user_id'];


$academic_detail_add = mysqli_query($con,"INSERT INTO `job_seeker_training` (`id`, `user_id`, `train_title`, `train_cont`, `train_coverd`, `train_year`, `trarin_insti`, `train_duration`, `train_location`) VALUES (NULL, '$user_id', '$train_title', '$train_cont', '$train_coverd', '$train_year', '$trarin_insti', '$train_duration', '$train_location')");



}
}




if (isset($_POST["add_professional"])){
foreach ($_POST['certification'] as $index => $certification) {
$location = $_POST['location'][$index];
$institute = $_POST['institute'][$index];
$certi_startdate = $_POST['certi_startdate'][$index];
$certi_enddate = $_POST['certi_enddate'][$index];
$user_id=$_SESSION['user_id'];
$profess_info = mysqli_query($con,"INSERT INTO `job_seeker_profess_info` (`id`, `user_id`, `certification`, `location`, `institute`, `certi_startdate`,`certi_enddate`) VALUES (NULL, '$user_id', '$certification', '$location', '$institute', '$certi_startdate','$certi_enddate')");
}
}

if (isset($_POST["add_language"])){
foreach ($_POST['lan'] as $index => $lan) {
$lan_reading = $_POST['lan_reading'][$index];
$lan_writing = $_POST['lan_writing'][$index];
$lan_speaking = $_POST['lan_speaking'][$index];
$user_id=$_SESSION['user_id'];

$profess_info = mysqli_query($con,"INSERT INTO `job_seeker_lang_pro` (`id`, `user_id`, `lan`, `lan_reading`, `lan_writing`, `lan_speaking`) VALUES (NULL, '$user_id', '$lan', '$lan_reading', '$lan_writing', '$lan_speaking')");
}
}

if (isset($_POST["add_empHist"])){
foreach ($_POST['com_name'] as $index => $com_name) {
$com_busines = $_POST['com_busines'][$index];
$emp_responsibility = $_POST['emp_responsibility'][$index];
$com_location = $_POST['com_location'][$index];
$com_design = $_POST['com_design'][$index];
$com_department = $_POST['com_department'][$index];
$area_of_expre = $_POST['area_of_expre'][$index];
$emp_from = $_POST['emp_from'][$index];
$emp_to = $_POST['emp_to'][$index];
$chkContinue = $_POST['chkContinue'][$index];
$user_id=$_SESSION['user_id'];

$profess_info = mysqli_query($con,"INSERT INTO `job_seeker_emp_histo` (`id`, `user_id`, `com_name`, `com_busines`, `emp_responsibility`, `com_location`, `com_design`, `com_department`, `area_of_expre`, `emp_from`, `emp_to`, `chkContinue`) VALUES (NULL, '$user_id', '$com_name', '$com_busines', '$emp_responsibility', '$com_location', '$com_design', '$com_department', '$area_of_expre', '$emp_from', '$emp_to', '$chkContinue')");
}
}

if (isset($_POST["add_reffarence"])){
foreach ($_POST['ref_name'] as $index => $ref_name) {
$ref_org = $_POST['ref_org'][$index];
$ref_designation = $_POST['ref_designation'][$index];
$ref_phone = $_POST['ref_phone'][$index];
$ref_mobile = $_POST['ref_mobile'][$index];
$ref_phone_res = $_POST['ref_phone_res'][$index];
$ref_email = $_POST['ref_email'][$index];
$ref_relation = $_POST['ref_relation'][$index];
$ref_address = $_POST['ref_address'][$index];
$user_id=$_SESSION['user_id'];

$profess_info = mysqli_query($con,"INSERT INTO `job_seeker_reff` (`id`, `user_id`, `ref_name`, `ref_org`, `ref_designation`, `ref_phone`, `ref_mobile`, `ref_phone_res`, `ref_email`, `ref_relation`, `ref_address`) VALUES (NULL, '$user_id', '$ref_name', '$ref_org', '$ref_designation', '$ref_phone', '$ref_mobile', '$ref_phone_res', '$ref_email', '$ref_relation', '$ref_address')");
}
}





if (isset($_POST["image_add"])){
	
$user_id=$_SESSION['user_id'];
$folder = "image/";
$extention = strrchr($_FILES['image_file']['name'], ".");
$new_name = time();
$image_file = $new_name.$extention;
$uploaddir = $folder . $image_file;
move_uploaded_file($_FILES['image_file']['tmp_name'], $uploaddir);

$image_insert = mysqli_query($con,"INSERT INTO `job_seeker_image` (`id`, `user_id`, `image_file`) VALUES (NULL, '$user_id', '$image_file')");

}







?>



<script>
location.replace("resume-view.php");
</script>


