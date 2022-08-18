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
           			 	$query =  mysqli_query($con,"SELECT * FROM company_type ORDER BY ID DESC ");
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
                        <h1 class="title">  Company Type Manage   </h1>
                        <p class="title-description"> All Company Type List</p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
									<div class="card-title-block">
                                           
										    <div class="row sameheight-container">
											<div class="col-md-12">
											
												 <div class="card-title-block">
													<h3 class="title"> Company Type Add  </h3>
												</div>
											
												<div class="card card-block sameheight-item">
												   
													<form name="submit" id="submit" method="post" action="company_type_add.php" enctype="multipart/form-data">
													
														<div class="form-group"> 
															<label class="control-label">Type Name</label> 
															<input type="text" class="form-control boxed" name="com_type" placeholder="Enter Type Name" required>  
														</div>
														
														 <button type="submit" class="btn btn-success btn-block btn-lg"> 
																			<i class="fas fa-check-circle"></i> Add New
														</button>
														
													</form>
													
												</div>
											</div>
										   
                                        </div>
                                        <div class="card-title-block">
                                            <h3 class="title"> Job Category List </h3>
                                        </div>
                                        <section class="example">
										<div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                     
													<th>#</th>
													<th style="text-align:left;">Category Name</th>
													
													<th>Action</th>
													
                                                    </tr>
													
                                                </thead>

                                                <tbody>
                                                     <?php 
													
													 $page_run = mysqli_query($con,"SELECT * FROM company_type ORDER BY ID DESC LIMIT $current, $limit");
													 while ($page_row = mysqli_fetch_array($page_run)) {
													 $id = $page_row['id'];
													 
													 $table_name = "company_type";
													 
                                                   ?>
                                                    <tr>
														 <td><?php echo $id; ?> </td>
                                                        <td style="text-align:left;"><?php echo $com_type = $page_row['com_type']; ?> </td>
														
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