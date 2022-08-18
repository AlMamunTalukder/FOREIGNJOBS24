<?php
include("fj-admin/config/confg.php");
include("session_check.php");
$user_id=$_SESSION['user_id'];
$user_resume = "SELECT * FROM job_seeker_resume WHERE user_id = '$user_id' ";
$user_resume_data = $con->query($user_resume);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
<link rel="stylesheet" href="css/neon-forms.css">
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
    <div class="panel-heading panel-heading-01"><i class="fa fa-list-alt" aria-hidden="true"></i> Applied Jobs List </div>

    <div class="ucon-panel-body">
     <table class="table">
		<thead>
			  <tr>
			  
				<th>ID</th>
				<th>Job Title</th>
				<th>Status</th>
				<th>Action</th>
			  </tr>
		</thead>
		<tbody>
		<?php
			$job_apply = mysqli_query($con, "SELECT * FROM job_apply WHERE user_id = '$user_id' order by id desc ");
			while($job_apply_Data = mysqli_fetch_array($job_apply)){
			
				$id = $job_apply_Data["id"];
				$job_id = $job_apply_Data["job_id"];
				$date = $job_apply_Data["date"];
		
			$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE id = '$job_id' ");
			$job_listing_data = mysqli_fetch_array($user_resume);
			
				$id = $job_listing_data["id"];
				$job_title = $job_listing_data["job_title"];
				$status = $job_listing_data["status"];
				$id = $job_listing_data["id"];
		?>
		  <tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $job_title; ?></td>
			<td>Applied</td>
			<td>Applied</td>
			<td>
			 <a href="cancell_job_apply.php?job_id=<?php echo $job_id; ?>" class="btn btn-success" style="background:#dd4e41; border:1px solid #dd4e41;"
			 onclick="return confirm('Do You want to delete this permanently ?')">Cancel Application </a>	
			</td>
		  </tr>
		  
			
			
			
     	<?php } ?>
    	</tbody>
  </table>
</div>

  </div>
</div>







    </div>
  </div>
</div>






<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>

  <!-- Imported scripts on this page -->
  <script src="js/fileinput.js"></script>


</body>
</html>