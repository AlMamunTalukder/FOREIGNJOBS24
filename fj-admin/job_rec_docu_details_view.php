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
			 
			 $id_user_app = $recurator_verification['id'];
			
	
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
														Address : 
													</div>
													<div class="col-md-8">
														<?php echo $page_row['address']; ?>  
														<br/> 
														<?php echo $page_row['city']; ?>  - <?php echo $page_row['zip']; ?>  
													</div>

											</div>
                                        </div> 
										
										<div class="card-title-block">
                                            <div class="row">
								
													<div class="col-md-12">
														<strong>Recent Photo : </strong>
													</div>
													<div class="col-md-12">
														<img src="../job-recruiter/rec_pho/<?php echo $rec_pho = $recurator_verification['rec_pho']; ?>" class="img-responsive" style="width:200px; height:250px;">
													</div>
													
													<div class="col-md-12">
														<strong>Trade Licence / NID / Passport / Driving License (Front Part) : </strong>
													</div>
													<div class="col-md-12">
														<img src="../job-recruiter/f_part/<?php echo $f_part = $recurator_verification['f_part']; ?>" class="img-responsive" style="width:500px; height:300px;">
														
													</div>
													
													<div class="col-md-12">
														<strong>Trade Licence / NID / Passport / Driving License (Back Part) : </strong>
													</div>
													<div class="col-md-12">
														<img src="../job-recruiter/b_part/<?php echo $b_part = $recurator_verification['b_part']; ?>" class="img-responsive" style="width:500px; height:300px;">
													</div>
													
													<?php if($etin = $recurator_verification['etin']){ ?>
													
													<div class="col-md-12">
														<strong>E-Tin : </strong>
													</div>
													<div class="col-md-12">
														<img src="../job-recruiter/etin/<?php echo $etin = $recurator_verification['etin']; ?>" class="img-responsive" style="width:500px; height:300px;">
													</div>
													
													<?php } ?>
													
													<?php if($c_i = $recurator_verification['c_i']){ ?>
													
													<div class="col-md-12">
														<strong>Certificate of Incorporation  : </strong>
													</div>
													<div class="col-md-12">
														<img src="../job-recruiter/c_i/<?php echo $c_i = $recurator_verification['c_i']; ?>" class="img-responsive" style="width:500px; height:300px;">
													</div>
													
													<?php } ?>
													
													<?php if($a_a = $recurator_verification['a_a']){ ?>
													
													<div class="col-md-12">
														<strong>Articles of Association   : </strong>
													</div>
													<div class="col-md-12">
														<img src="../job-recruiter/a_a/<?php echo $a_a = $recurator_verification['a_a']; ?>" class="img-responsive" style="width:500px; height:300px;">
													</div>
													
													<?php } ?>
													
													<?php if($m_a = $recurator_verification['m_a']){ ?>
													
													<div class="col-md-12">
														<strong>Memorandum of Association   : </strong>
													</div>
													<div class="col-md-12">
														<img src="../job-recruiter/m_a/<?php echo $m_a = $recurator_verification['m_a']; ?>" class="img-responsive" style="width:500px; height:300px;">
													</div>
													
													<?php } ?>
													
													<div class="col-md-12">
														<strong>Submit Date:</strong>
													</div>
													<div class="col-md-8">
														<?php echo $recurator_verification['date']; ?>   
													</div>
													

											</div>
                                        </div> 
										
										
										 <div class="row">
												<div class="col-md-6"> 
													<a href="job_rec_veri_approve.php?id=<?php echo $id_user_app; ?>" class="btn btn-success btn-block"> Approve </a>
												</div>
												<div class="col-md-6"> 
													<a href="job_rec_veri_diss.php?id=<?php echo $id_user_app; ?>" class="btn btn-primary btn-block" > Disapprove </a>
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