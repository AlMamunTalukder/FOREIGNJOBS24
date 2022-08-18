<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");
?>
 <?php 
 	 $id = $_REQUEST["id"];
	 $page_run = mysqli_query($con,"SELECT * FROM mentee_info WHERE id = '$id'");
	 $page_row = mysqli_fetch_array($page_run);
	 $id = $page_row['id'];
	
   ?>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Mentee Registration  </h1>
                        <p class="title-description"> Full Profile </p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Profile of <?php echo $first_name = $page_row['first_name']; ?> <?php echo $last_name = $page_row['last_name']; ?> </h3>
                                        </div>
                                        <section class="example">
										<div class="table-responsive">
                                            <table class="table table-striped">
                                        

                                                <tbody>
                                                    
                                                    <tr>
                                                        <td style="width:25%; text-align:left;"><strong>Full Name : </strong></td>
														<td style="width:75%; text-align:left;">
														<?php echo $first_name = $page_row['first_name']; ?> <?php echo $last_name = $page_row['last_name']; ?>
														</td>
														
                                                    </tr>
													
													 <tr>
                                                        <td style="width:25%; text-align:left;"><strong> User ID : </strong></td>
														<td style="width:75%; text-align:left;">
														<?php echo $user_id = $page_row['user_id']; ?> 
														</td>
														
                                                    </tr>
													
													 <tr>
                                                        <td style="width:25%; text-align:left;"><strong>Email :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $email_address = $page_row['email_address']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Phone :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $phone_number = $page_row['phone_number']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>State :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $state = $page_row['state']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>City :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $city = $page_row['city']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Country :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $country = $page_row['country']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>language :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $lang = $page_row['lang']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Current Role :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php 
														
															$roles        = $page_row["roles"];
															$emnb                 = explode("|", $roles);
															
															$r_sn = 1;
															$mentee_roles = mysqli_query($con,"SELECT * FROM mentee_roles ORDER BY id ASC");
															while($mentee_roles_res = mysqli_fetch_array($mentee_roles)){
															
																$roles = $mentee_roles_res["roles"];
															
															$new_r = $r_sn++;
																echo $cho  = $emnb[$new_r]."<br/>";
															
															} 
											
															
														?> 
														
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>About Mentee :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $about_mentee = $page_row['about_mentee']; ?> 
														</td>
														
                                                    </tr>
													
													
												
                                                </tbody>
                                            </table>
											</div>
                                        </section>
										
										<a href="mentee_manage.php" class="btn btn-success btn-block"> Back </a>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>


<?php
	include("footer.php");
?>