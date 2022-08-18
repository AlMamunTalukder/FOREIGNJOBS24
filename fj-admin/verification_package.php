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
                        <h1 class="title">  Verification Package   </h1>
                        <p class="title-description"> All User List</p>
                    </div>
                    <section class="section">
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
									
									<th>Company Name</th>
									<th>Package Type</th>
									<th>Package Fee</th>
									<th>Action</th>
									
						            </tr>
									
						        </thead>

						        <tbody>
						             <?php 
									 $i = 1;
									 $user_role_db = mysqli_query($con,"SELECT * FROM subscribe");
									 while ($user_rol_row = mysqli_fetch_array($user_role_db)) {
										 $user_id = $user_rol_row['user_id'];		

										 $recurator_info_db = mysqli_query($con,"SELECT * FROM recurator_info WHERE user_id = '$user_id'");	
										 $recurator_info_data = mysqli_fetch_array($recurator_info_db);		
						           ?>
						            <tr>
										 <td><?php echo $i++; ?> </td>
										 <td><?php echo $recurator_info_data = $recurator_info_data['company_name']; ?> </td>
						                <td><?php 
						                	echo $recurator_info_data = $user_rol_row['subscribe_type']; 
						                ?></td>
						                <td><?php echo $recurator_info_data = $user_rol_row['user_transaction_id']; ?></td>
									
										<td>
										
										<a href="approve_subscribe.php?user_id=<?php echo $user_id ?>" 
										class="btn <?php  
											if($user_rol_row['v_active'] == 0){
												echo "btn-danger";
											}else{
												echo "btn-success";
											}
										?>"> 
											<?php  
												if($user_rol_row['v_active'] == 0){
													echo '';
												}else{
													echo '<i class="fa fa-check"></i>';
												}
											?>
											 Approve 
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