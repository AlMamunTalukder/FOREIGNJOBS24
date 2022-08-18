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
    <div class="panel-heading panel-heading-01"><i class="fa fa-th-list"></i> Job Apply List </div>

    <div class="ucon-panel-body">
     <table class="table">
    <thead>
      <tr>
        <th>SN</th>
        <th>Job Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php
			$job_apply1 = mysqli_query($con, "SELECT * FROM job_apply WHERE user_id = '$user_id' ");
			while($job_apply = mysqli_fetch_array($job_apply1)){
			
				$id = $job_apply["id"];
				$job_id = $job_apply["job_id"];
				
				
				$table_name = "job_apply";
					$job_listing_data1 = mysqli_query($con, "SELECT * FROM job_listing WHERE id = '$job_id' ");
					$job_listing_data = mysqli_fetch_array($job_listing_data1);
					
						$job_title = $job_listing_data["job_title"];
				
		?>
		  <tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $job_title; ?></td>
				<td>
					
					<a href="javascript:;" onClick="delete_function_con('<?php echo $id; ?>', '<?php echo $table_name; ?>');" 
					class="btn btn-danger" style="background:#dd4e41; border:1px solid #dd4e41;"> 
						<i class="fa fa-trash-o"></i> Delete
					</a>
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
</body>
</html>