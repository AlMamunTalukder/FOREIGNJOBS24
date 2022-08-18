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
    <div class="panel-heading panel-heading-01"><i class="fa fa-list-alt" aria-hidden="true"></i> Jobs List </div>

    <div class="ucon-panel-body">
     <table class="table">
		<thead>
			  <tr>
			  
				<th>ID</th>
				<th>Job Title</th>
				<th>Status</th>
				<th>Date</th>
			  </tr>
		</thead>
		<tbody>
		<?php
			$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE user_id = '$user_id' ORDER BY ID DESC");
			while($job_listing_data = mysqli_fetch_array($user_resume)){
			
				$id = $job_listing_data["id"];
				$job_title = $job_listing_data["job_title"];
				$status = $job_listing_data["status"];
				
				$post_date = $job_listing_data["post_date"];
				
				$job_apply = mysqli_query($con, "SELECT * FROM job_apply WHERE job_id = '$id' ");
				$job_apply_Data = mysqli_num_rows($job_apply);
		?>
		  <tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $job_title; ?></td>
			<td><?php if($status == 0){ echo "Pending";} else { echo "Live"; } ?></td>
			<td>
			<?php echo $post_date; ?>
			</td>
		  </tr>
		  <tr>
			<td colspan="4" align="center">
			  <a href="<?php echo $base_url; ?>job-details.php?job_id=<?php echo $id; ?>" target="_blank" class="btn btn-success" >View Listing</a>
			  <a href="manage_application.php?job_id=<?php echo $id; ?>" class="btn btn-success" style="background:#18a15f; border:1px solid #18a15f;">
			  Manage Application ( <?php echo $job_apply_Data; ?> Applied ) </a>
			  <a href="job_edit.php?job_id=<?php echo $id; ?>" class="btn btn-success" style="background:#de6b00; border:1px solid #de6b00;">Edit Listing</a>
			  <a href="job_delete.php?job_id=<?php echo $id; ?>" class="btn btn-success" style="background:#dd4e41; border:1px solid #dd4e41;"
			   onclick="return confirm('Do You want to delete this permanently ?')">Delete</a>			
			  </td>
			</tr>
			
			
			
     	<?php } ?>
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

