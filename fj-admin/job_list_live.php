<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");

	include 'paginate.php';

	

//////////////////////////////////////////////////////////////////////////////////////////////////////
	// this is for pagination
	//////////////////////////////////////////////////////////////////////////////////////////////////////
	// set $limit (per page) for pagination
	$limit = 25;
	
	
						 //show records
           			 	$query =  mysqli_query($con,"SELECT * FROM job_listing WHERE status = '1' ORDER BY ID ASC ");
						$total_rows = mysqli_num_rows($query);
	
	$page;
	// prepare $_GET['page'] variable for pagination
	if(isset($_GET['page']) && (int)$_GET['page']){
		
		if($_GET['page'] > ceil($total_rows/$limit)){
			$page = 1;
		} else {
			$page = $_GET['page'];
		}
		
	} else {
		$_GET['page'] = 1;
		$page = 1;
	}
	
	

	$current = ($page - 1) * $limit;
	
	// current set of data to be displayed
	$current_display = ceil($total_pages/$_GET['page']);

?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  Jobs List (Live)   </h1>
                        <p class="title-description"> All Jobs List (Live)</p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
									
								 		
									
                                        <div class="card-title-block">
                                            <h3 class="title"> Jobs List (Live) </h3>
                                        </div>
										
										<div class="card-title-block">
                                            <div class="row">
												<form name="search" method="post" action="job__search_ac.php" enctype="multipart/form-data">
													<div class="col-md-8">
														<input type="text" class="form-control boxed" name="search" placeholder="Enter ID or Title " required>  
													</div>
													<div class="col-md-4">
														<button type="submit" class="btn btn-primary btn-block"> Search </button>
													</div>
												</form>
											</div>
                                        </div> 
										
                                        <section class="example">
										<div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
													<tr>
													
														<th style="width:10%;">ID</th>
														<th style="width:25%;">Title</th>
														<th style="width:20%;">Category</th>
														<th style="width:10%;">Location</th>
														<th style="width:10%;">Deadline</th>
														<th style="width:10%;">Company</th>
														<th style="width:15%;">Phone</th>
													</tr>
                                                </thead>

                                                <tbody style="font-size:14px;">
             <?php 
			
			 $page_run = mysqli_query($con,"SELECT * FROM job_listing WHERE status = '1' ORDER BY ID DESC LIMIT $current, $limit");
			 while ($page_row = mysqli_fetch_array($page_run)) {
			 $id = $page_row['id'];
			 
			  $user_id = $page_row['user_id'];
			  
			  $status = $page_row['status'];
			
			 $table_name = "job_listing";
			 
			 $recurator_info1 = mysqli_query($con,"SELECT * FROM recurator_info WHERE user_id = '$user_id'");
			 $recurator_info = mysqli_fetch_array($recurator_info1);
			 
			 $recurator_verification1 = mysqli_query($con,"SELECT * FROM recurator_verification WHERE user_id = '$user_id'");
			 $recurator_verification = mysqli_fetch_array($recurator_verification1);
						 $statusver = $recurator_verification['status'];
			
			 
			 
           ?>
                    <tr>
						
						<td><?php echo $page_row['id']; ?> </td>
						<td><?php echo $page_row['job_title']; ?> </td>
						<td><?php echo $job_category = $page_row['job_category']; ?> </td>
						<td><?php echo $page_row['job_location']; ?> <?php echo $page_row['country']; ?> </td>
						
						<td><?php echo $page_row['job_deadline']; ?> </td>
						<td><?php echo $recurator_info['company_name']; ?> 
						<?php if($statusver == 1){ ?> <i class="fa fa-check-circle" aria-hidden="true" style="color:#006600;" title="Verified"></i> <?php } ?> </td>
						<td><?php echo $recurator_info['phone']; ?> </td>
                    </tr>
							
		 <tr>											
<!-- 	<a href="javascript:;" onClick="delete_function_con('<?php echo $id; ?>');" 
	class="btn btn-danger"> 
		<i class="fas fa-trash-alt"></i> Delete 
	</a> disabled-->

<td colspan="7" align="center" valign="middle">
		
<a href="../job-details.php?job_id=<?php echo $id; ?>" class="btn btn-success" target="_blank">  View Job	</a>
<a href="../job-details-edit.php?job_id=<?php echo $id; ?>" class="btn btn-success" target="_blank">  Edit	</a>

<a href="cv_bank_send_view.php?job_id=<?php echo $id; ?>&job_category=<?php echo $job_category; ?>" class="btn btn-success" >  Send CV Bank	</a>
		
<?php if ($page_row['status']==1) { ?>


	<a href="javascript:;" title="Live"
	class="btn btn-primary-outline disabled"> 
		<i class="fas fa-check"></i> Live	</a>
		
<?php } else { ?>
	
	<a href="job_live.php?id=<?php echo $id; ?>" 
	class="btn btn-primary-outline " title="Approve ?"> 
	<i class="fas fa-check"></i> Approve ?	</a>

<?php } ?>		

<?php  
	$user = $_SESSION['sup_user'];
	$get_permission_db = mysqli_query($con, "SELECT * FROM sup_ad_log where sup_user ='$user'");
	$get_permission_data = mysqli_fetch_array($get_permission_db);
?>
<?php if ($page_row['fea_job']==1 && $get_permission_data['admin_role'] == 0) { ?>


	<a href="javascript:;" title="Featured"
	class="btn btn-primary-outline disabled"> 
		<i class="fas fa-check"></i> Featured	</a>
		
	<a href="job_featured_rem.php?id=<?php echo $id; ?>" 
	class="btn btn-danger " title="Featured This ?"> 
	<i class="fas fa-times-circle"></i> Remove Featured  ?	</a>
		
<?php 
	} else { 
		if ($get_permission_data['admin_role'] == 0) {
?>
	
	<a href="job_featured.php?id=<?php echo $id; ?>" 
	class="btn btn-primary-outline " title="Featured This ?"> 
	<i class="fas fa-check"></i> Featured This ?	</a>

<?php }
}
?>	      
<?php  
if ($get_permission_data['admin_role'] == 0) {
?>
<a href="job_delete.php?id=<?php echo $id; ?>" 
	class="btn btn-primary-outline " title="Delete This Job ?"> 
	<i class="fas fa-trash"></i> Delete ?	</a>
<?php } ?>

</td>
						
		</tr>										
													
													
                                                    <?php } ?>
                                                </tbody>
                                            </table>
										  </div>
                                        </section>
										
										<div class="row">
											<div class="col-md-12" align="center">
											
												<nav>
													<ul class="pagination">
													
														<?php
														//pagination
														echo paginate($total_rows, $_SERVER['PHP_SELF'] , $limit, $_GET['page'])
														?>
													
													</ul>
												</nav>
											
											</div>
										</div>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>


<?php
	include("footer.php");
?>