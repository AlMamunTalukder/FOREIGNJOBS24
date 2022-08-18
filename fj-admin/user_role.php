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
           			 	$query =  mysqli_query($con,"SELECT * FROM testmonial_manage ORDER BY ID ASC ");
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
                        <h1 class="title">  Manage User Role   </h1>
                        <p class="title-description"> All User List</p>
                    </div>
                    <section class="section">
						<a href="add_role.php" class="btn btn-success btn-block btn-lg"> 
							<svg class="svg-inline--fa fa-plus-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="plus-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path></svg><!-- <i class="fas fa-plus-circle"></i> --> Add New
						</a>
						<br>
						<div class="card-title-block">
						    <h3 class="title"> City List </h3>
						</div>

						<section class="example">
						<div class="table-responsive">
						    <table class="table table-striped">
						        <thead>
						            <tr>
						             
									<th>#</th>
									
									<th>Name</th>
									<th>Role</th>
									<th>Action</th>
									
						            </tr>
									
						        </thead>

						        <tbody>
						             <?php 
									 $i = 1;
									 $user_role_db = mysqli_query($con,"SELECT * FROM sup_ad_log ORDER BY ID ASC LIMIT $current, $limit");
									 while ($user_rol_row = mysqli_fetch_array($user_role_db)) {
										 $id = $user_rol_row['id'];

										 $table_name = "sup_ad_log";
																		 
						           ?>
						            <tr>
										 <td><?php echo $i++; ?> </td>
										 <td><?php echo $admin_role_name = $user_rol_row['sup_user']; ?> </td>
						                <td><?php 
						                	$admin_role = $user_rol_row['admin_role']; 
						                	if ($admin_role == 1) {
						                		echo "Sub Admin";
						                	} else{
						                		echo "Supper Admin";
						                	}
						                ?></td>
									
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

                </article>


<?php
	include("footer.php");
?>