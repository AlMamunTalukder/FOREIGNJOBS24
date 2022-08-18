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
                        <h1 class="title">  Pages Manage   </h1>
                        <p class="title-description"> All Pages List</p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
																		
                                        <div class="card-title-block">
                                            <h3 class="title"> Pages Name </h3>
                                        </div>
										
                                        <section class="example">
										<div class="table-responsive">
                                            <table class="table table-striped">
                                                

                                                <tbody>
                                                     <?php 
													
													 $page_run = mysqli_query($con,"SELECT * FROM pages");
													 while ($page_row = mysqli_fetch_array($page_run)) {													
														$name = $page_row['title'];
														$designation = $page_row['designation'];
													 
                                                   ?>
                                                    <tr>
														 
														 <td style="text-align: left">
														 	<a href="pages_edit.php?page_id=<?php echo $page_row['id']; ?>" style="color: #000"><?php echo $name; ?></a>
														 </td>
														 <td>
														 	<a class="btn btn-success" target="_blank" href="pages_edit.php?page_id=<?php echo $page_row['id']; ?>">Edit</a>
														 	<a class="btn btn-success" target="_blank" href="../default-page.php?page_id=<?php echo $page_row['id']; ?>">View Page</a>
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