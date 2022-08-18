<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");
	
	$user_id = $_REQUEST["user_id"];
	
	 $page_run = mysqli_query($con,"SELECT * FROM recurator_info WHERE user_id = '$user_id'");
			 $page_row = mysqli_fetch_array($page_run);
			 $id = $page_row['id'];
			 $user_id = $page_row['user_id'];
			 $skill_category = $page_row['skill_category'];
	
	$recurator_verification1 = mysqli_query($con,"SELECT * FROM recurator_verification WHERE user_id = '$user_id'");
	$status_num = mysqli_num_rows($recurator_verification1);
			 $recurator_verification = mysqli_fetch_array($recurator_verification1);
			 $statusver = $recurator_verification['status'];
			
	
?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  <?php echo $page_row['full_name']; ?> ( <?php echo $page_row['company_name']; ?> )   </h1>
                        <p class="title-description"> <?php echo $page_row['web_url']; ?> </p>
						<p class="title-description">
						<a href="javascript:;" class="btn btn-primary-outline">
						Verification Status : 
						 <?php if($status_num != 0){ if($statusver == 0){ echo "Pending"; } else { echo "Verified"; } } else { echo "Unverified"; } ?> 
						</a>
						</p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">

										<div class="card-title-block">
                                            <div class="row">
												<div class="col-md-12"> 
												
													<img alt="Logo Test" class="img-responsive" style="width:250px; height:100%; padding:15px;" 
													src="<?php echo $base_url; ?>job-recruiter/com-logo/<?php echo $page_row["com_logo"]; ?>">

												</div>
												
												
												
													<div class="col-md-4">
														User ID : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['user_id']; ?>   
													</div>
													
													<div class="col-md-4">
														Full Name : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['full_name']; ?>   
													</div>
													
													<div class="col-md-4">
														Designation : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['designation']; ?>   
													</div>
													
													<div class="col-md-4">
														Company Name : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['company_name']; ?>   
													</div>
													
													<div class="col-md-4">
														Company Type : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['c_type']; ?>   
													</div>
													
													<div class="col-md-4">
														Email : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['email']; ?>   
													</div>
													
													<div class="col-md-4">
														Category : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['company_category']; ?>   
													</div>
													
													<div class="col-md-4">
														Phone : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['phone']; ?>   
													</div>
													
													<div class="col-md-4">
														Country : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['country']; ?>   
													</div>
													
													<div class="col-md-4">
														Company Description : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['com_desc']; ?>   
													</div>
													
													<div class="col-md-4">
														Address : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['address']; ?>  
														<br/> 
														<?php echo $page_row['city']; ?>  - <?php echo $page_row['zip']; ?>  
													</div>
													
													<div class="col-md-4">
														Status : 
													</div>
													<div class="col-md-8">
														<?php $status = $page_row['status']; ?>  
														<?php if($status == 0){ echo "Active"; } else { echo "Inactive"; } ?>
													</div>
													
													
													
													
												
											</div>
                                        </div> 
										
										 <div class="row">
												<div class="col-md-12"> 
												
													<a href="javascript:;" class="btn btn-primary-outline" onClick="window.print();"> Print </a>

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