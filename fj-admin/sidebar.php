 <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                         <div class="brand" style="background:#f0f3f6;">
                                
								<img src="images/applogo.png" class="logo"/>
								
                        </div>
                        <nav class="menu">
                            <ul class="nav metismenu" id="sidebar-menu">
                               <li class="active"> 
								<a href="dashboard.php">
    								<i class="fa fa-home"></i> Dashboard
    							</a> 
							</li>
							
							<li> 
                                <a href="job_list.php">
                                    <i class="fas fa-file"></i> Job List (All)
                                </a>
                            </li>
							
							<li> 
                                <a href="job_list_pending.php">
                                    <i class="fas fa-file"></i> Job List (Pending)
                                </a>
                            </li>
							
							<li> 
                                <a href="job_list_live.php">
                                    <i class="fas fa-file"></i> Job List (Live)
                                </a>
                            </li>
							
							<li> 
                                <a href="job_list_expired.php">
                                    <i class="fas fa-file"></i> Job List (Expired)
                                </a>
                            </li>
							
                            

							<li> 
                                <a href="job_list_featured.php">
                                    <i class="fas fa-file"></i> Job List (Featured)
                                </a>
                            </li>
							
							
							<li> 
                                <a href="job_seekers_info.php">
                                    <i class="fas fa-user"></i> Job Seeker Manage
                                </a>
                            </li>
							
							<li> 
                                <a href="job_recurator_info.php">
                                    <i class="fas fa-user-secret"></i> Job Recurator Manage
                                </a>
                            </li>
							
							<li> 
                                <a href="job_rec_verification.php">
                                    <i class="fas fa-check"></i> Job Recurator Verification
                                </a>
                            </li>
							
							<?php  
                                $user = $_SESSION['sup_user'];
                                $get_permission_db = mysqli_query($con, "SELECT * FROM sup_ad_log where sup_user ='$user'");
                                $get_permission_data = mysqli_fetch_array($get_permission_db);
                                if ($get_permission_data['admin_role'] == 0) {
                            ?>
							
							<li> 
                                <a href="job_category.php">
                					<i class="fas fa-list-ul"></i> Job Category
                				</a>
                            </li>
							
							<li> 
                                <a href="company_type.php">
                					<i class="fas fa-list-ul"></i> Company Type Manage
                				</a>
                            </li>
														
							<li> 
                                <a href="country_manage.php">
                					<i class="fas fa-flag"></i> Country Manage
                				</a>
                            </li>
							
							<li> 
                                <a href="division_manage.php">
                					<i class="fas fa-flag"></i> Division Manage
                				</a>
                            </li>
							
							<li> 
                                <a href="city_manage.php">
                					<i class="fas fa-flag"></i> City Manage
                				</a>
                            </li>
							
							<li> 
                                <a href="content_manage.php">
                					<i class="fas fa-file"></i> Contant/Page Manage
                				</a>
                            </li>
							
							<li> 
                                <a href="testimonial_manage.php">
                					<i class="fas fa-file"></i> Testimonial Manage
                				</a>
                            </li>
							
							
							<li> 
                                <a href="trainning_category.php">
                					<i class="fas fa-list-ul"></i> Trainning Category
                				</a>
                            </li>
							
							<li> 
                                <a href="trainning_manage.php">
                					<i class="fas fa-list-ul"></i> Trainning Manage
                				</a>
                            </li>
							
							<li> 
                                <a href="trainning_entroll_manage.php">
                					<i class="fas fa-list-ul"></i> Trainning Enroll Manage
                				</a>
                            </li>
							

                            <li> 
                                <a href="pages.php">
                                    <i class="fas fa-file"></i> Pages
                                </a>
                            </li>
							
							<li> 
                                <a href="contact_manage.php">
                					<i class="fas fa-file"></i> Contact Manage
                				</a>
                            </li>

                            <li> 
                                <a href="user_role.php">
                                    <i class="fas fa-file"></i> User Role
                                </a>
                            </li>

                            <li> 
                                <a href="package.php">
                                    <i class="fas fa-file"></i> Create Package
                                </a>
                            </li>

                            <li> 
                                <a href="verification_package.php">
                                    <i class="fas fa-file"></i> Verification Package
                                </a>
                            </li>

                            <li> 
                                <a href="general-setting.php">
                                    <i class="fas fa-file"></i> General setting
                                </a>
                            </li>
							
							<!--<li> 
                                <a href="changed_password.php">
                                    <i class="fas fa-file"></i> Changed Password
                                </a>
                            </li>-->
                            
                            <?php  
                                }
                            ?>
								
								
								
								<li> 
									<a href="logout.php">
										<i class="fas fa-sign-out-alt"></i> Logout
									</a>
								</li>
							
			
                               
							   
						
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="nav metismenu" id="customize-menu">
                            <li>
                                <ul>
                                    <li class="customize">
                                        <div class="customize-item">
                                            <div class="row customize-header">
                                                <div class="col-xs-4"> </div>
                                                <div class="col-xs-4"> <label class="title">fixed</label> </div>
                                                <div class="col-xs-4"> <label class="title">static</label> </div>
                                            </div>
                                            <div class="row hidden-md-down">
                                                <div class="col-xs-4"> <label class="title">Sidebar:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed" >
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="sidebarPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Header:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="headerPosition" value="header-fixed">
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="headerPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-4"> <label class="title">Footer:</label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
    				                        <span></span>
    				                    </label> </div>
                                                <div class="col-xs-4"> <label>
    				                        <input class="radio" type="radio" name="footerPosition" value="">
    				                        <span></span>
    				                    </label> </div>
                                            </div>
                                        </div>
                                        <div class="customize-item">
                                            <ul class="customize-colors">
                                                <li> <span class="color-item color-red" data-theme="red"></span> </li>
                                                <li> <span class="color-item color-orange" data-theme="orange"></span> </li>
                                                <li> <span class="color-item color-green active" data-theme="green"></span> </li>
                                                <li> <span class="color-item color-seagreen" data-theme="seagreen"></span> </li>
                                                <li> <span class="color-item color-blue" data-theme="blue"></span> </li>
                                                <li> <span class="color-item color-purple" data-theme="purple"></span> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul> 
								
								<a href="">
									<i class="fa fa-cogs"></i> <?php echo $project_name; ?> 
								</a> 
					
							</li>
                        </ul>
                    </footer>
                </aside>