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
           			 	$query =  mysqli_query($con,"SELECT * FROM enroll_trainning ORDER BY ID DESC ");
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
                        <h1 class="title">  Trainning  Manage   </h1>
                        <p class="title-description"> All Trainning  List</p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
									<div class="card-title-block">
                                            
											 <a href="trainning_add.php" class="btn btn-success btn-block btn-lg"> 
															<i class="fas fa-plus-circle"></i> Add New
											</a>
											
                                        </div>
                                        <div class="card-title-block">
                                            <h3 class="title"> Trainning  List </h3>
                                        </div>
                                        <section class="example">
										<div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                     
													<th>#</th>
													<th style="text-align:left;">Course </th>
													<th style="text-align:left;">Student Name</th>
													<th style="text-align:left;">Phone </th>
													<th style="text-align:left;">Fees </th>
													<th style="text-align:left;">Tutor </th>
													<th style="text-align:left;">Date </th>
													
													<th>Action</th>
													
                                                    </tr>
													
                                                </thead>

                                                <tbody>
                                                     <?php 
													
													 $page_run = mysqli_query($con,"SELECT * FROM enroll_trainning ORDER BY ID DESC LIMIT $current, $limit");
													 while ($page_row = mysqli_fetch_array($page_run)) {
													 $id = $page_row['id'];
													 $tra_id = $page_row['tra_id'];
													 $user_id = $page_row['user_id'];
													 $date = $page_row['date'];
													 
													 $page_run1 = mysqli_query($con,"SELECT * FROM trainning_manage where id = '$tra_id'");
													 $trainning_manage = mysqli_fetch_array($page_run1);
													 $title = $trainning_manage['title'];
													 $fees = $trainning_manage['fees'];
													 $tutor_name = $trainning_manage['tutor_name'];
													 
													 $page_run2 = mysqli_query($con,"SELECT * FROM job_seeker_info where user_id = '$user_id'");
													 $job_seeker_info = mysqli_fetch_array($page_run2);
													 $full_name = $job_seeker_info['full_name'];
													 $phone_num = $job_seeker_info['phone'];
													
													 $table_name = "enroll_trainning";
													 
                                                   ?>
                                                    <tr>
														 <td><?php echo $id; ?> </td>
                                                        <td style="text-align:left;"><?php echo $title; ?> </td>
														<td style="text-align:left;"><?php echo $full_name; ?> </td>
														<td style="text-align:left;"><?php echo $phone_num; ?> </td>
														<td style="text-align:left;"><?php echo $fees; ?> </td>
														<td style="text-align:left;"><?php echo $tutor_name; ?> </td>
														<td style="text-align:left;"><?php echo $date; ?> </td>
														
														<td>
														
														<a href="javascript:;" onClick="delete_function_con('<?php echo $id; ?>', '<?php echo $table_name; ?>');" 
														class="btn btn-danger"> 
															<i class="fas fa-trash-alt"></i> Delete 
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