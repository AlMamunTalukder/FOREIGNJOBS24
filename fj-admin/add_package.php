<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");


?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  User Role Menage   </h1>
                        <p class="title-description"> New User  </p>
                    </div>
                    
					 <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   
                                    <form name="submit" id="submit" method="post" action="package_ac.php" enctype="multipart/form-data">


                                        <div class="form-group"> 
											<label class="control-label">Package Name</label> 
											<input type="text" class="form-control boxed" name="package_name" placeholder="Enter Package Name" required>  
										</div>

                                        <div class="form-group"> 
											<label class="control-label">Package Limit</label> 
											<input type="text" class="form-control boxed" name="package_limit" placeholder="Enter Package Limit" required>  
										</div>

										<div class="form-group"> 
											<label class="control-label">Package Fee</label> 
											<input type="text" class="form-control boxed" name="package_fee" placeholder="Enter Package Fee" required>  
										</div>

										 <button type="submit" class="btn btn-success btn-block btn-lg"> 
											<i class="fas fa-check-circle"></i> Add New
										</button>
										
                                    </form>
									
                                </div>
                            </div>
							
								<div class="col-md-6">
				</div>
				
            </section>

                </article>


<?php
	include("footer.php");
?>