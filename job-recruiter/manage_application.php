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
	  
	  <?php
	  		$job_id = $_REQUEST["job_id"];
			$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE id = '$job_id' ");
			$job_listing_data = mysqli_fetch_array($user_resume);
			
				$id = $job_listing_data["id"];
				$job_title = $job_listing_data["job_title"];
				$status = $job_listing_data["status"];
				
				$post_date = $job_listing_data["post_date"];
				
				$job_apply = mysqli_query($con, "SELECT * FROM job_apply WHERE job_id = '$id' ");
				$job_apply_Data = mysqli_num_rows($job_apply);
		?>

<div class="col-md-9"> 
  <!-- Blog List start -->
  <div class="user-content">
    <div class="panel-heading panel-heading-01"><i class="fa fa-list-alt" aria-hidden="true"></i> 
		<?php echo $job_title; ?> | Total Applied : <?php echo $job_apply_Data; ?> | All Application
		
	</div>
	


    <div class="ucon-panel-body">
	
	<a href="manage_application.php?job_id=<?php echo $job_id; ?>" class="btn btn-success btn-lg" >All Application</a>
	<a href="shortlist_view.php?job_id=<?php echo $job_id; ?>"  class="btn btn-success btn-lg" >Shortlist</a>
	<a href="gotjob_list.php?job_id=<?php echo $job_id; ?>"  class="btn btn-success btn-lg" >Got Job</a>
	
     <table class="table">
		<thead>
			  <tr>
			  
				<th>SN</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Date</th>
			  </tr>
		</thead>
		<tbody>
		<?php
			$job_apply1 = mysqli_query($con, "SELECT * FROM job_apply WHERE job_id = '$job_id' and status = '0' ORDER BY ID DESC");
			while($job_apply = mysqli_fetch_array($job_apply1)){
			
				$id = $job_apply["id"];
				$user_id = $job_apply["user_id"];
				$date = $job_apply["date"];
				
				$job_seeker_info = mysqli_query($con, "SELECT * FROM job_seeker_info WHERE user_id = '$user_id' ");
				$job_seeker_info_data = mysqli_fetch_array($job_seeker_info);
				
				$user_id_view =  $job_seeker_info_data["user_id"];
		?>
		  <tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $full_name = $job_seeker_info_data["full_name"]; ?></td>
			<td><?php echo $phone = $job_seeker_info_data["phone"]; ?></td>
			<td>
			<?php echo $date; ?>
			</td>
		  </tr>
		  <tr>
			<td colspan="4" align="center">
			  <a href="view_resume.php?user_id=<?php echo $user_id_view; ?>" target="_blank" class="btn btn-success" >View Resume</a>
		
			  <a href="view_cv.php?user_id=<?php echo $user_id_view; ?>" target="_blank" class="btn btn-success" style="background:#de6b00; border:1px solid #de6b00;">View Uploaded CV</a>
			  
			  <a href="shortlist.php?user_id=<?php echo $user_id_view; ?>&job_id=<?php echo $job_id; ?>" class="btn btn-success" style="background:#dd4e41; border:1px solid #dd4e41;"
			   onclick="return confirm('Shortlisted ?')">Shortlist</a>	
			   		
			  </td>
			</tr>
			
			
			
     	<?php } ?>
    	</tbody>
  </table>
</div>

<div style="padding:10px;">
	<a href="<?php echo $base_url; ?>job-recruiter/jobs_list.php"  class="btn btn-default btn-block btn-lg" style="vertical-align:middle; text-align:center;">Back to Jobs List</a>
</div>
   
  </div>
</div>







    </div>
  </div>
</div>







<?php	include '../footer.php';
		include '../footer_script.php';

?>

