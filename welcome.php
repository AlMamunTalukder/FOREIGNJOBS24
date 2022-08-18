<?php
include("fj-admin/config/confg.php");
include("session_check.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>



<?php include 'header-menu.php';?>




<div class="inner-content loginWrp">
  <div class="container">
    <div class="row">



      <?php include("user-sidebar-menu.php"); ?>



<div class="col-md-9"> 
  <!-- Blog List start -->
  <div class="user-content">
    <div class="panel-heading panel-heading-01"><i class="fa fa-bars"></i> My Stats</div>

    <div class="ucon-panel-body">
     <table class="table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Applied Jobs</td>
		<?php
		$job_seeker_resume=mysqli_query($con, "select * from job_apply where user_id = '$user_id'");
		
		$job_res_sta = mysqli_num_rows($job_seeker_resume);
		?>
        <td><?php echo $job_res_sta; ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Resume Status</td>
		<?php
		$job_seeker_resume=mysqli_query($con, "select * from job_seeker_resume where user_id = '$user_id'");
		$update_j_s = mysqli_fetch_array($job_seeker_resume);
		$job_res_sta = mysqli_num_rows($job_seeker_resume);
		?>
        <td><?php if($job_seeker_resume != 0){ echo "Ok"; } else { echo "Not Added Yet"; } ?> </td>
        <td></td>
      </tr>
	  
	  <tr>
	  
        <td>Upload CV </td>
        <?php
		$A=mysqli_query($con, "select * from job_seeker_upload_resume where user_id = '$user_id'");
		$AB = mysqli_num_rows($A);
		?>
        <td><?php if($AB != 0){ echo "Ok"; } else { echo "Not Uploaded Yet"; } ?> </td>
        <td>&nbsp;</td>
      </tr>
	  
       <tr>
	   <?php
	   	$job_seeker_info1=mysqli_query($con, "select * from job_seeker_info where user_id = '$user_id'");
		$job_seeker_info = mysqli_fetch_array($job_seeker_info1);
	   ?>
        <td>Joining date Foreign jobs 24</td>
        <td><?php echo $job_seeker_info["join_date"]; ?></td>
        <td>&nbsp;</td>
      </tr>
	  
	  

      <tr>
        <td>Resume last updated on</td>
        <td><?php echo $update_j_s["up_date"]; ?></td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</div>
   
  </div>
</div>



</div></div></div>





<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>
</body>
</html>