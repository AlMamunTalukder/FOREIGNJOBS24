<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");
	
?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  Admin Password Changed   </h1>
                        <p class="title-description">Admin Password Changed  </p>
                    </div>
                    
					 <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   
                                    <form name="submit" id="submit" method="post" action="changed_password_ac.php" enctype="multipart/form-data">
									
										
									
                                        <div class="form-group"> 
											<label class="control-label">Old Password</label> 
											<input type="password" class="form-control boxed" name="old" placeholder="Enter Old Password " required>  
										</div>
										
										 <div class="form-group"> 
											<label class="control-label">New Password</label> 
											<input type="password" class="form-control boxed" name="new" placeholder="Enter New Password "  required>  
										</div>
										
										 <div class="form-group"> 
											<label class="control-label">Confirm New Password</label> 
											<input type="password" class="form-control boxed" name="con" placeholder="Enter Confirm New Password "  required>  
										</div>
										
										
										
										
										 <button type="submit" class="btn btn-success btn-block btn-lg"> 
															<i class="fas fa-check-circle"></i> Changed
										</button>
										
                                    </form>
									
                                </div>
                            </div>
							
								<div class="col-md-6"></div>
				
            </section>

                </article>


<?php
	include("footer.php");
?>