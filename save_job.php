<?php
include("fj-admin/config/confg.php");

$user_id = $_REQUEST["user_id"];
$job_id = $_REQUEST["job_id"];
$job_title = $_REQUEST["job_title"];
if (!empty($user_id) && !empty($job_id)) {
  
  mysqli_query($con,"INSERT INTO `save_jobs` (`id`, `seeker_user_id`, `job_id`, `job_title`) VALUES (NULL, '$user_id', '$job_id', '$job_title')");
?>
<script>
location.replace("save_jobs.php");
</script>
<?php

}else{
  
?>
<script>
location.replace("login.php");
</script>
<?php
}
?>
