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
           			 	$query =  mysqli_query($con,"SELECT * FROM recurator_verification ORDER BY ID ASC ");
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
                        <h1 class="title">  Job Recurator Verification info   </h1>
                        <p class="title-description"> All Job Recurator Verification List</p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
									
								 		
									
                                        <div class="card-title-block">
                                            <h3 class="title"> Job Recurator Verification List </h3>
                                        </div>
										
										
										
                                        <section class="example">
										<div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
													<tr>
													
														<th style="width:10%;">ID</th>
														<th style="width:25%;">Name</th>
														<th style="width:20%;">Email</th>
														<th style="width:10%;">Phone</th>
														<th style="width:10%;">Company</th>
														<th style="width:10%;">Type</th>
														<th style="width:15%;">S. Date</th>
													</tr>
                                                </thead>

                                                <tbody style="font-size:14px;">
             <?php 
			
			 $page_run = mysqli_query($con,"SELECT * FROM recurator_verification ORDER BY ID DESC LIMIT $current, $limit");
			 $status_num = mysqli_num_rows($page_run);
			 while ($page_row1 = mysqli_fetch_array($page_run)) {
			 $id = $page_row1['id'];
			 $user_id = $page_row1['user_id'];
			 
			 $statusver = $page_row1['status'];
			
			 $table_name = "recurator_verification";
			 
				 $job_categories1 = mysqli_query($con,"SELECT * FROM recurator_info WHERE user_id = '$user_id'");
				 $page_row = mysqli_fetch_array($job_categories1);
				 
			 
           ?>
                    <tr>
						
						<td><?php echo $page_row['user_id']; ?> </td>
						<td><?php echo $page_row['full_name']; ?> </td>
						<td><?php echo $page_row['email']; ?> </td>
						<td><?php echo $page_row['phone']; ?> </td>
						
						<td><?php echo $page_row['company_name']; ?> </td>
						<td><?php echo $page_row['c_type']; ?> </td>
						<td><?php echo $page_row1['date']; ?> </td>
                    </tr>
							
		 <tr>											
<!-- 	<a href="javascript:;" onClick="delete_function_con('<?php echo $id; ?>');" 
	class="btn btn-danger"> 
		<i class="fas fa-trash-alt"></i> Delete 
	</a> disabled-->

<td colspan="7" align="center" valign="middle">
		
<a href="job_rec_docu_details_view.php?user_id=<?php echo $user_id; ?>" 
class="btn btn-success"> 
	<i class="fas fa-file"></i> View Documents  
</a> 	

	
<a href="javascript:;" class="btn btn-warning">
Verification Status : 
 <?php if($status_num != 0){ if($statusver == 0){ echo "Pending"; } else { echo "Verified"; } } else { echo "Unverified"; } ?> 
</a>
						
	      

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