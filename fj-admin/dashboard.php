<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");
	
											
						
		$job_listing5 = mysqli_query($con, "SELECT * FROM job_listing where status ='1' ");
		while ($job_listing = mysqli_fetch_array($job_listing5)) {
			$id_jobs = $job_listing['id'];
			$job_title  = $job_listing['job_title'];
			$job_deadline  = $job_listing['job_deadline'];
			
			
			date_default_timezone_set("Asia/Dhaka");
			$date      = date("Y-m-d");
			$now_time  = date("Y-m-d H:i:s");
			//$stop_date = date('Y-m-d H:i:s', strtotime($bump_serial . ' +1 day'));
			//$stop_date = date('Y-m-d H:i:s', strtotime($featured_up . ' +1 day'));
			if ($date > $job_deadline) {
				$reg_action = mysqli_query($con, "UPDATE job_listing SET status = '2' WHERE id = '$id_jobs'");
			}
			
		}
										


	
?>

 <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content dashboard-page">
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col col-xs-12 col-sm-12 col-md-12 col-xl-12 stats-col">
                                <div class="card sameheight-item stats" data-exclude="xs">
                                    <div class="card-block">
                                        <div class="title-block">
                                            <h4 class="title"> 
											Dashboard | Foreignjobs24.com
											</h4> 
                                            <p class="title-description">
												All Short Information
											</p>
                                        </div>
										<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM job_listing ");
			 								 $total_job = mysqli_num_rows($job_listing1);
										?>
                                        <div class="row row-sm stats-container">
										
                                            <div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $total_job; ?> </div>
                                                    <div class="name"> Total Jobs </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $total_job; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $total_job; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM job_listing WHERE status = '0'");
			 								 $pending_job = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $pending_job; ?> </div>
                                                    <div class="name"> Pending Jobs </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $pending_job; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $pending_job; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM job_listing WHERE status = '1'");
			 								 $active_job = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $active_job; ?> </div>
                                                    <div class="name"> Active Jobs </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $active_job; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $active_job; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM job_listing WHERE status = '2'");
			 								 $expired_job = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $expired_job; ?> </div>
                                                    <div class="name"> Expired Jobs </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $expired_job; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $expired_job; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM job_listing WHERE fea_job = '1'");
			 								 $featured_job = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $featured_job; ?> </div>
                                                    <div class="name"> Featured Jobs </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $featured_job; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $featured_job; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM job_categories ");
			 								 $job_category = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $job_category; ?> </div>
                                                    <div class="name"> Job Category </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $job_category; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $job_category; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM job_seeker_info ");
			 								 $job_seeker_info = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $job_seeker_info; ?> </div>
                                                    <div class="name"> Job Seeker </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $job_seeker_info; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $job_seeker_info; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM recurator_info ");
			 								 $recurator_info = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $recurator_info; ?> </div>
                                                    <div class="name"> Job Recurator </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $recurator_info; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $recurator_info; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM all_country ");
			 								 $all_country = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $all_country; ?> </div>
                                                    <div class="name"> Job Country </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $all_country; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $all_country; ?>%;"></span>
												</div>
												</progress> 
												
											</div>
											
											<?php
											 $job_listing1 = mysqli_query($con,"SELECT * FROM recurator_verification ");
			 								 $recurator_verification = mysqli_num_rows($job_listing1);
											?>
											<div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> <?php echo $recurator_verification; ?> </div>
                                                    <div class="name"> Job Recurator Verification (All) </div>
                                                </div> 
												
												<progress class="progress stat-progress" value="<?php echo $recurator_verification; ?>" max="1000">
												<div class="progress">
													<span class="progress-bar" style="width: <?php echo $recurator_verification; ?>%;"></span>
												</div>
												</progress> 
												
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