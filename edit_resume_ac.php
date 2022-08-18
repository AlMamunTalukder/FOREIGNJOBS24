<?php
include("session_check.php");
include("fj-admin/config/confg.php");



if (isset($_POST["personal_details"])){
$date = date("Y-m-d");
$user_id=$_SESSION['user_id'];
$fathers_ame = $_POST['fathers_ame'];
$mother_name = $_POST['mother_name'];
$birth_date = $_POST['birth_date'];
$religion = $_POST['religion'];
$marital_status = $_POST['marital_status'];
$nationality = $_POST['nationality'];
$nid = $_POST['nid'];
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];
$user_resume = mysqli_query($con,"UPDATE `job_seeker_resume` SET 
	fathers_ame='$fathers_ame',
	mother_name='$mother_name',
	birth_date='$birth_date',
	religion='$religion',
	marital_status='$marital_status',
	nationality='$nationality',
	nid='$nid',
	present_address='$present_address',
	permanent_address='$permanent_address',
	up_date='$date' WHERE user_id='$user_id'");
}

if (isset($_POST["career_appli_update"])){
$date = date("Y-m-d");
$user_id=$_SESSION['user_id'];
$career_objective = $_POST['career_objective'];
$career_summary = $_POST['career_summary'];
$presnt_salary = $_POST['presnt_salary'];
$expected_salary = $_POST['expected_salary'];
$optLevel = $_POST['optLevel'];
$optAvail = $_POST['optAvail'];

$career_appli_update = mysqli_query($con,"UPDATE `job_seeker_carieer_details` SET 
	career_objective='$career_objective',
	career_summary='$career_summary',
	presnt_salary='$presnt_salary',
	expected_salary='$expected_salary',
	optLevel='$optLevel',
	optAvail='$optAvail',
	up_date='$date' WHERE user_id='$user_id'");
}

if (isset($_POST["pref_aras_update"])){
$date = date("Y-m-d");
$user_id=$_SESSION['user_id'];
$job_cate = $_POST['job_cate'];
$special_skill = $_POST['special_skill'];
$districs = $_POST['districs'];
$country = $_POST['country'];
$orgainization_type = $_POST['orgainization_type'];

$pref_aras_update = mysqli_query($con,"UPDATE `job_seeker_pref_details` SET 
	job_cate='$job_cate',
	special_skill='$special_skill',
	districs='$districs',
	country='$country',
	orgainization_type='$orgainization_type',
	up_date='$date' WHERE user_id='$user_id'");
}

if (isset($_POST["otri_updates"])){
//$date = date("Y-m-d");
$user_id=$_SESSION['user_id'];
$orthinfo_career_summary = $_POST['orthinfo_career_summary'];
$orthinfo_specific_summary = $_POST['orthinfo_specific_summary'];
$ortinfo_key = $_POST['ortinfo_key'];

$otri_update = mysqli_query($con,"UPDATE `job_seeker_other_relatiive_info` SET 
	orthinfo_career_summary='$orthinfo_career_summary',
	orthinfo_specific_summary='$orthinfo_specific_summary',
	ortinfo_key='$ortinfo_key' WHERE user_id='$user_id'");
}


if (isset($_POST["academic_details_Update"])){
foreach ($_POST['id'] as $index => $id) {
$education_level = $_POST['education_level'][$index];
$cgpa = $_POST['cgpa'][$index];
$passing_year = $_POST['passing_year'][$index];
$major_group = $_POST['major_group'][$index];
$duration_years = $_POST['duration_years'][$index];
$institute_name = $_POST['institute_name'][$index];
$user_id=$_SESSION['user_id'];

$academic_detail = mysqli_query($con,"UPDATE `job_seeker_education` SET 
	education_level='$education_level',
	cgpa='$cgpa',
	passing_year='$passing_year',
	major_group='$major_group',
	duration_years='$duration_years',
	institute_name='$institute_name' WHERE id='$id'");
}
}

if (isset($_POST["taining_summery_update"])){
foreach ($_POST['train_title'] as $index => $train_title) {
	$user_id=$_SESSION['user_id'];
$train_cont = $_POST['train_cont'][$index];
$train_coverd = $_POST['train_coverd'][$index];
$train_year = $_POST['train_year'][$index];
$trarin_insti = $_POST['trarin_insti'][$index];
$train_duration = $_POST['train_duration'][$index];
$train_location = $_POST['train_location'][$index];
$taining_summery_update = mysqli_query($con,"UPDATE `job_seeker_profess_info` SET 
	train_title='$train_title',
	train_cont='$train_cont',
	train_coverd='$train_coverd',
	train_year='$train_year',
	trarin_insti='$trarin_insti',
	train_duration='$train_duration',
	train_location='$train_location' WHERE user_id='$user_id'");
}
}

if (isset($_POST["employeee_history_update"])){
foreach ($_POST['com_name'] as $index => $com_name) {
	$user_id=$_SESSION['user_id'];
$com_busines = $_POST['com_busines'][$index];
$emp_responsibility = $_POST['emp_responsibility'][$index];
$com_location = $_POST['com_location'][$index];
$com_design = $_POST['com_design'][$index];
$com_department = $_POST['com_department'][$index];
$area_of_expre = $_POST['area_of_expre'][$index];
$emp_from = $_POST['emp_from'][$index];
$emp_to = $_POST['emp_to'][$index];

$employeee_history_update = mysqli_query($con,"UPDATE `job_seeker_emp_histo` SET 
	com_name='$com_name',
	com_busines='$com_busines',
	emp_responsibility='$emp_responsibility',
	com_location='$com_location',
	com_design='$com_design',
	com_department='$com_department',
	area_of_expre='$area_of_expre',
	emp_from='$emp_from',
	emp_to='$emp_to' WHERE user_id='$user_id'");
}
}




if (isset($_POST["professional_details_Update"])){
foreach ($_POST['prof_id'] as $index => $prof_id) {
$certification = $_POST['certification'][$index];
$location = $_POST['location'][$index];
$institute = $_POST['institute'][$index];
$certi_startdate = $_POST['certi_startdate'][$index];
$certi_enddate = $_POST['certi_enddate'][$index];
$certi_enddate = $_POST['certi_enddate'][$index];
$academic_detail = mysqli_query($con,"UPDATE `job_seeker_profess_info` SET 
	certification='$certification',
	location='$location',
	institute='$institute',
	certi_startdate='$certi_startdate',
	certi_enddate='$certi_enddate',
	certi_enddate='$certi_enddate' WHERE id='$prof_id'");
}
}


if (isset($_POST["language_pro_update"])){
foreach ($_POST['lan'] as $index => $lan) {
	$user_id=$_SESSION['user_id'];
$lan_reading = $_POST['lan_reading'][$index];
$lan_writing = $_POST['lan_writing'][$index];
$lan_speaking = $_POST['lan_speaking'][$index];

$language_pro_update = mysqli_query($con,"UPDATE `job_seeker_lang_pro` SET 
	lan='$lan',
	lan_reading='$lan_reading',
	lan_writing='$lan_writing',
	lan_speaking='$lan_speaking' WHERE user_id='$user_id'");
}
}


if (isset($_POST["specializatin_update"])){
$user_id=$_SESSION['user_id'];
$skills = $_POST['skills'];
$skill_description = $_POST['skill_description'];
$extra_activitis = $_POST['extra_activitis'];

$specializatin_update = mysqli_query($con,"UPDATE `job_seeker_specialization` SET 
	skills='$skills',
	skill_description='$skill_description',
	extra_activitis='$extra_activitis' WHERE user_id='$user_id'");
}


if (isset($_POST["referrance_update"])){
foreach ($_POST['ref_name'] as $index => $ref_name) {
	$user_id=$_SESSION['user_id'];
$ref_org = $_POST['ref_org'][$index];
$ref_designation = $_POST['ref_designation'][$index];
$ref_phone = $_POST['ref_phone'][$index];
$ref_mobile = $_POST['ref_mobile'][$index];
$ref_phone_res = $_POST['ref_phone_res'][$index];
$ref_email = $_POST['ref_email'][$index];
$ref_relation = $_POST['ref_relation'][$index];
$ref_address = $_POST['ref_address'][$index];

$referrance_update = mysqli_query($con,"UPDATE `job_seeker_reff` SET 
	ref_name='$ref_name',
	ref_org='$ref_org',
	ref_designation='$ref_designation',
	ref_phone='$ref_phone',
	ref_mobile='$ref_mobile',
	ref_phone_res='$ref_phone_res',
	ref_email='$ref_email',
	ref_relation='$ref_relation',
	ref_address='$ref_address' WHERE user_id='$user_id'");
}
}



if (isset($_POST["image_Update"])){
$user_id=$_SESSION['user_id'];
$folder = "image/";
$extention = strrchr($_FILES['image_file']['name'], ".");
$new_name = time();
$image_file = $new_name.$extention;
$uploaddir = $folder . $image_file;
move_uploaded_file($_FILES['image_file']['tmp_name'], $uploaddir);

list($name, $img) = split('[/.-]', $image_file);

if($img){
$user_resume = mysqli_query($con,"UPDATE `job_seeker_image` SET image_file='$image_file' WHERE user_id='$user_id'");														
}	

}





?>



<script>
location.replace("resume-view.php");
</script>


