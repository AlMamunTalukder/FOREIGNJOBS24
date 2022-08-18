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
                                   
                                    <form name="submit" id="submit" method="post" action="add_role_ac.php" enctype="multipart/form-data">


                                        <div class="form-group"> 
											<label class="control-label">User Name</label> 
											<input type="text" class="form-control boxed" name="sub_user" placeholder="Enter User Name" required>  
										</div>

                                        <div class="form-group"> 
											<label class="control-label">User Password</label> 
											<input type="text" class="form-control boxed" name="sub_pass" placeholder="Enter User Password" required>  
										</div>

										<div class="form-group"> 
											<label class="control-label">User Email</label> 
											<input type="text" class="form-control boxed" name="email" placeholder="Enter User Email" required>  
										</div>

										<div class="form-group"> 
											<label class="control-label">User Role</label> 
											<select name="user_role_id" class="form-control" required="">
											  <option value="">Select User Role</option>
											  <option value="0">Super Admin</option>
											  <option value="1">Sub Admin</option>
											  <?php //} ?>
											</select>
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