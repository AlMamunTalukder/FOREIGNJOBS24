<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");
?>
 <?php 
 	 $book_id = $_REQUEST["book_id"];
	 $page_run = mysqli_query($con,"SELECT * FROM pre_book_apoimnet WHERE book_id = '$book_id'");
	 $page_row = mysqli_fetch_array($page_run);
	 $id = $page_row['id'];
	 $book_id = $page_row['book_id'];
	 
	  $user_id = $page_row['user_id'];
	  $not_found_cell_no = $page_row['not_found_cell_no'];
	  $booked_mentor_id = $page_row['booked_mentor_id'];
	  
	  $page_run1 = mysqli_query($con,"SELECT * FROM mentee_info WHERE user_id = '$user_id'");
	 $mentee_info = mysqli_fetch_array($page_run1);
	 
	  $page_run2 = mysqli_query($con,"SELECT * FROM mentor_pre_info WHERE uniq_id = '$booked_mentor_id'");
	 $mentor_pre_info = mysqli_fetch_array($page_run2);
	
   ?>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Appoinment Book Details  </h1>
                        <p class="title-description"> Full Details </p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Book ID : <?php echo $book_id = $page_row['book_id']; ?> </h3>
                                        </div>
                                        <section class="example">
										<div class="card-title-block">
                                            <h3 class="title"  style="color:#37a000;"> Mentee Information </h3>
                                        </div>
										<div class="table-responsive">
                                            <table class="table table-striped">
                                        

                                                <tbody>
                                                    
                                                    <tr>
                                                        <td style="width:25%; text-align:left;"><strong>Full Name : </strong></td>
														<td style="width:75%; text-align:left;">
														<?php echo $first_name = $mentee_info['first_name']; ?> <?php echo $last_name = $mentee_info['last_name']; ?>
														</td>
														
                                                    </tr>
													
													 <tr>
                                                        <td style="width:25%; text-align:left;"><strong> User ID : </strong></td>
														<td style="width:75%; text-align:left;">
														<?php echo $user_id = $mentee_info['user_id']; ?> 
														</td>
														
                                                    </tr>
													
													 <tr>
                                                        <td style="width:25%; text-align:left;"><strong>Email :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $email_address = $mentee_info['email_address']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Phone :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $phone_number = $mentee_info['phone_number']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>State :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $state = $mentee_info['state']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>City :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $city = $mentee_info['city']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Country :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $country = $mentee_info['country']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Mentorship Category :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php 
														$mentor_cate_name        = $page_row["mentor_cate_name"];
															$emnb                 = explode("|", $mentor_cate_name);
															echo $cho  = $emnb[1]."<br/>";
															echo $cho  = $emnb[2]."<br/>";
															echo $cho  = $emnb[3]."<br/>";
															echo $cho  = $emnb[4]."<br/>";
															echo $cho  = $emnb[5]."<br/>";
														?> 
														</td>
														
                                                    </tr>
													

													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> Shared Problem :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $share_problem = $page_row['share_problem']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> Mode of Mentorship :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $mod_of_mentorship = $page_row['mod_of_mentorship']; ?> 
														</td>
														
                                                    </tr>
													
													<?php if($mod_of_mentorship == "FACE 2 FACE"){ ?>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> Country  :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $country = $page_row['country']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> State  :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $state = $page_row['state']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> City  :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $city = $page_row['city']; ?> 
														</td>
														
                                                    </tr>
													
													<?php } ?>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> Date  :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $date = $page_row['date']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> Time  :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $time = $page_row['time']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> Duration  :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $duration = $page_row['duration']; ?> 
														</td>
														
                                                    </tr>
													
													
												
                                                </tbody>
                                            </table>
											</div>
											
											<div class="card-title-block" style="margin-top:25px;">
												<h3 class="title" style="color:#37a000;"> Mentor Information </h3>
											</div>
											<div class="table-responsive">
                                            <table class="table table-striped">
                                        

                                                <tbody>
                                                    <?php if(!empty($not_found_cell_no)){ ?>
                                                    <tr>
                                                        <td style="width:25%; text-align:left;"><strong>No Mentor Found </strong></td>
														<td style="width:75%; text-align:left;">
														LET US FIND  A BEST MENTOR FOR HIM														
														</td>
														
                                                    </tr>
													
													 <tr>
                                                        <td style="width:25%; text-align:left;"><strong> Calling number  / Skype Id / What's App  </strong></td>
														<td style="width:75%; text-align:left;">
														<?php echo $not_found_cell_no = $page_row['not_found_cell_no']; ?> 										
														</td>
														
                                                    </tr>
													
													<?php } else { ?>
													
													 <tr>
                                                        <td style="width:25%; text-align:left;"><strong> Name : </strong></td>
														<td style="width:75%; text-align:left;">
														<?php echo $first_name = $mentor_pre_info['first_name']; ?> <?php echo $last_name = $mentor_pre_info['last_name']; ?> 
														</td>
														
                                                    </tr>
													
													 <tr>
                                                        <td style="width:25%; text-align:left;"><strong>Email :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $email_address = $mentor_pre_info['email_address']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Phone :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $phone_number = $mentor_pre_info['phone_number']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>State :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $state = $mentor_pre_info['state']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>City :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $city = $mentor_pre_info['city']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Country :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $country = $mentor_pre_info['country']; ?> 
														</td>
														
                                                    </tr>
													
													<tr>
                                                        <td style="width:25%; text-align:left;"><strong>Mentorship Category :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php 
														$mentor_cate_name        = $mentor_pre_info["mentor_cate_name"];
															$emnb                 = explode("|", $mentor_cate_name);
															echo $cho  = $emnb[1]."<br/>";
															echo $cho  = $emnb[2]."<br/>";
															echo $cho  = $emnb[3]."<br/>";
															echo $cho  = $emnb[4]."<br/>";
															echo $cho  = $emnb[5]."<br/>";
														?> 
														</td>
														
                                                    </tr>
													

													<tr>
                                                        <td style="width:25%; text-align:left;"><strong> Rate :</strong> </td>
														<td style="width:75%; text-align:left;">
														<?php echo $ud_nan_h_rate = $mentor_pre_info['ud_nan_h_rate']; ?> $ / Hour
														</td>
														
                                                    </tr>
													
												
													
													<?php } ?>
												
                                                </tbody>
                                            </table>
											
											</div>
                                        </section>
										
										<a href="appointment_manage.php" class="btn btn-success btn-block"> Back </a>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>


<?php
	include("footer.php");
?>