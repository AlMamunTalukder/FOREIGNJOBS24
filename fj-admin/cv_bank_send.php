<?php session_start();

include 'config/confg.php'; 
	
$job_id = $_REQUEST['job_id'];
$job_category = $_REQUEST['job_category'];
$cv_number = $_REQUEST['cv_number'];



$date = date("Y-m-d");

 $job_categoriesr = mysqli_query($con,"SELECT * FROM job_categories WHERE cate_name = '$job_category'");
			 $job_categories = mysqli_fetch_array($job_categoriesr);
			 $id = $job_categories['id'];
			 $cate_name = $job_categories['cate_name'];
			 

 $job_seeker_infor = mysqli_query($con,"SELECT * FROM job_seeker_info WHERE skill_category = '$id' limit 0,$cv_number");
			 while($job_seeker_info = mysqli_fetch_array($job_seeker_infor)){
			$user_id = $job_seeker_info['user_id'];
				
				$reg_action3 = mysqli_query($con,"INSERT INTO `job_apply` (`id`, `job_id`, `user_id`, `date`, `status`) VALUES (NULL, '$job_id', '$user_id', '$date', '0')");
	
			 
			 }





?>
<script>
alert("CV Bank Sent Successfull.");
location.replace("job_list_live.php");
</script>