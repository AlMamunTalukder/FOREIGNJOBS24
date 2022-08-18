<?php
include("../fj-admin/config/confg.php");
include("../session_check.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../head.php';?>
</head>
<body>
<?php include '../header-menu.php';?>




<div class="inner-content loginWrp">
  <div class="container">
    <div class="row">
      

      <?php include("job_rec_menus.php"); ?>


<div class="col-md-9"> 
  <!-- Blog List start -->
  <div class="user-content">
    <div class="panel-heading panel-heading-01"><i class="fa fa-bars"></i> Dashboard </div>

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
        <td>Total Job Listing</td>
        <td>
		<?php
			$job_listing = mysqli_query($con, "SELECT * FROM job_listing WHERE user_id = '$user_id'");
			echo $job_listing_v = mysqli_num_rows($job_listing);
		?>
		</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Live Jobs</td>
        <td>
		<?php
			$job_listingi = mysqli_query($con, "SELECT * FROM job_listing WHERE user_id = '$user_id' and status = '1'");
			echo $job_listing_l = mysqli_num_rows($job_listingi);
		?>
		</td>
        <td>&nbsp;</td>
      </tr>
       <tr>
        <td>Verify ID </td>
        <td>
		<?php
			$recurator_verification1 = mysqli_query($con, "SELECT * FROM recurator_verification WHERE user_id = '$user_id'");
			$recurator_verification_data = mysqli_fetch_array($recurator_verification1);
			$recurator_verification = mysqli_num_rows($recurator_verification1);
			
			$status = $recurator_verification_data["status"];
			 
		?>

		<?php 
			if($recurator_verification != 0){
			
					if($status == 0){
						echo "Pending Verification";
					} else {
						echo "Verified";
					}
					
			}	else {
			
				echo "Unverified";
				
			}
		?> 
		
		</td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td>Profile Update</td>
        <td>
		<?php
			$recurator_infor = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$user_id'");
			$recurator_info = mysqli_fetch_array($recurator_infor);
			
			$com_logo = $recurator_info["com_logo"];
			if($com_logo){
			 echo "Yes";
			} else {
			 echo "No";
			}
		?>
		</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</div>

<div style="padding:10px;">
	<a href="<?php echo $base_url; ?>job-recruiter/list_a_job.php"  class="btn btn-default btn-block btn-lg" style="vertical-align:middle; text-align:center;">List a Job</a>
</div>
   
  </div>
</div>







    </div>
  </div>
</div>







<?php	include '../footer.php';
		include '../footer_script.php';

?>

