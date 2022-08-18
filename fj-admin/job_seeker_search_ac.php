<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");


?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  Job Seekers info   </h1>
                        <p class="title-description"> All Job Seekers List</p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
									
								 		
									
                                        <div class="card-title-block">
                                            <h3 class="title"> Job Seekers List </h3>
                                        </div>
										
										<div class="card-title-block">
                                            <div class="row">
												<form name="search" method="post" action="job_seeker_search_ac.php" enctype="multipart/form-data">
													<div class="col-md-8">
														<input type="text" class="form-control boxed" name="search" placeholder="Enter ID or Email or Phone " required>  
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
														<th style="width:25%;">Name</th>
														<th style="width:20%;">Email</th>
														<th style="width:10%;">Phone</th>
														<th style="width:10%;">Category</th>
														<th style="width:10%;">Country</th>
														<th style="width:15%;">J. Date</th>
													</tr>
                                                </thead>

                                                <tbody style="font-size:14px;">
             <?php 
			 $search = $_REQUEST["search"];
			 $page_run = mysqli_query($con,"SELECT * FROM job_seeker_info WHERE user_id = '$search' or email LIKE '%" . $search . "%' or phone LIKE '%" . $search . "%'");
			 while ($page_row = mysqli_fetch_array($page_run)) {
			 $id = $page_row['id'];
			 $skill_category = $page_row['skill_category'];
			
			 $table_name = "job_seeker_info";
			 
				 $job_categories1 = mysqli_query($con,"SELECT * FROM job_categories WHERE id = '$skill_category'");
				 $job_categories = mysqli_fetch_array($job_categories1);
				 $cate_name = $job_categories['cate_name'];
			 
           ?>
                    <tr>
						
						<td><?php echo $page_row['user_id']; ?> </td>
						<td><?php echo $page_row['full_name']; ?> </td>
						<td><?php echo $page_row['email']; ?> </td>
						<td><?php echo $page_row['phone']; ?> </td>
						
						<td><?php echo $job_categories['cate_name']; ?> </td>
						<td><?php echo $page_row['country']; ?> </td>
						<td><?php echo $page_row['join_date']; ?> </td>
                    </tr>
							
		 <tr>											
<!-- 	<a href="javascript:;" onClick="delete_function_con('<?php echo $id; ?>');" 
	class="btn btn-danger"> 
		<i class="fas fa-trash-alt"></i> Delete 
	</a> disabled-->

<td colspan="7" align="center" valign="middle">
		
		
						

<?php if ($page_row['status']==1) { ?>
	<a href="javascript:;" onClick="job_seeker_active('<?php echo $id; ?>');" title="Active"
	class="btn btn-primary-outline"> 
		<i class="fas fa-check"></i>Active	</a>

	<a href="javascript:;" onClick="job_seeker_deactivate('<?php echo $id; ?>');" title="Inactive"
	class="btn btn-primary-outline disabled"> 
		<i class="fas fa-times-circle"></i> Inactive	</a>
<?php } else { ?>
	<a href="javascript:;" onClick="job_seeker_active('<?php echo $id; ?>');" title="Active"
	class="btn btn-primary-outline disabled"> 
		<i class="fas fa-check"></i>Active	</a>

	<a href="javascript:;" onClick="job_seeker_deactivate('<?php echo $id; ?>');" 
	class="btn btn-primary-outline " title="Inactive"> 
		<i class="fas fa-times-circle"></i> Inactive	</a>

<?php } ?>		      

</td>
						
		</tr>										
													
													
                                                    <?php } ?>
                                                </tbody>
                                            </table>
										  </div>
                                        </section>
										
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>


<?php
	include("footer.php");
?>