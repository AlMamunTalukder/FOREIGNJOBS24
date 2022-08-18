<?php 
include("session_check.php");
include 'config/confg.php'; 
include("header.php");
include("sidebar.php");
?>
<?php 
$id = $_REQUEST["id"];
$page_run = mysqli_query($con,"SELECT * FROM mentor_pre_info WHERE id = '$id'");
$page_row = mysqli_fetch_array($page_run);
$id = $page_row['id'];
$page_name = $page_row['page_name'];


$table_name = "mentor_pre_info";

?>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<article class="content static-tables-page">
<div class="title-block">
<h1 class="title"> Mentor Pre Registration  </h1>
<p class="title-description"> Full Profile</p>
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
							<td style="width:25%; text-align:left;"><strong>Zip :</strong> </td>
							<td style="width:75%; text-align:left;">
							<?php echo $zip_code = $page_row['zip_code']; ?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Profile Url :</strong> </td>
							<td style="width:75%; text-align:left;">
							<?php echo $public_proflie_url = $page_row['public_proflie_url']; ?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Langauge :</strong> </td>
							<td style="width:75%; text-align:left;">
							<?php echo $lang = $page_row['lang']; ?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Interest Topics :</strong> </td>
							<td style="width:75%; text-align:left;">
							<?php 
							
								$mentor_roles        = $page_row["mentor_cate_name"];
								$emnb                 = explode("|", $mentor_roles);
								echo $cho1                 = $emnb['1']."<br/>";
								echo $cho2                 = $emnb['2']."<br/>";
								echo $cho3                 = $emnb['3']."<br/>";
								echo $cho4                 = $emnb['4']."<br/>";
								echo $cho5                 = $emnb['5']."<br/>";
								echo $cho6                 = $emnb['6']."<br/>";
								echo $cho7                 = $emnb['7']."<br/>";
							?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Expert Areas :</strong> </td>
							<td style="width:75%; text-align:left;">
							
							<?php 
							
								$mentor_expert_area        = $page_row["mentor_expert_area"];
								$emnb                 = explode("|", $mentor_expert_area);
								echo $cho1                 = $emnb['1']."<br/>";
								echo $cho2                 = $emnb['2']."<br/>";
								echo $cho3                 = $emnb['3']."<br/>";
								echo $cho4                 = $emnb['4']."<br/>";
								echo $cho5                 = $emnb['5']."<br/>";
								echo $cho6                 = $emnb['6']."<br/>";
								echo $cho7                 = $emnb['7']."<br/>";
								echo $cho8                 = $emnb['8']."<br/>";
								echo $cho9                 = $emnb['9']."<br/>";
								echo $cho10                 = $emnb['10']."<br/>";
							?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Rate in Under Developed/Developing Country:</strong> </td>
							<td style="width:75%; text-align:left;">
							Per Hour : <?php echo $ud_nan_h_rate = $page_row['ud_nan_h_rate']; ?> $  <br/>
							Per Week : <?php echo $ud_nan_w_rate = $page_row['ud_nan_w_rate']; ?> $ <br/>
							Per Month : <?php echo $ud_nan_m_rate = $page_row['ud_nan_m_rate']; ?> $  <br/>
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Rate in  Developed Country:</strong> </td>
							<td style="width:75%; text-align:left;">
							Per Hour : <?php echo $d_nan_h_rate = $page_row['d_nan_h_rate']; ?> $  <br/>
							Per Week : <?php echo $d_nan_w_rate = $page_row['d_nan_w_rate']; ?> $ <br/>
							Per Month : <?php echo $d_nan_m_rate = $page_row['d_nan_m_rate']; ?> $  <br/>
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Are you willing to mentor group of mentors? </strong> </td>
							<td style="width:75%; text-align:left;">
							<?php 
							
								$mentor_group        = $page_row["mentor_group"];
								$emnb                 = explode("|", $mentor_group);
								echo $cho1                 = $emnb['1']."<br/>";
								echo $cho2                 = $emnb['2']."<br/>";
								echo $cho3                 = $emnb['3']."<br/>";
								echo $cho4                 = $emnb['4']."<br/>";
								echo $cho5                 = $emnb['5']."<br/>";
								echo $cho6                 = $emnb['6']."<br/>";
								echo $cho7                 = $emnb['7']."<br/>";
							?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>How much discount per mentee He give :</strong> </td>
							<td style="width:75%; text-align:left;">
							<?php echo $mentee_dis_group = $page_row['mentee_dis_group']; ?> 
							</td>
							
						</tr>
						
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Can Pay :</strong> </td>
							<td style="width:75%; text-align:left;">
							<?php echo $can_pay = $page_row['can_pay']; ?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Approximately how many hours per week you can spend to mentor others? :</strong> </td>
							<td style="width:75%; text-align:left;">
							<?php echo $hour_per_week = $page_row['hour_per_week']; ?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Comment/suggestion</strong> </td>
							<td style="width:75%; text-align:left;">
							<?php echo $comments = $page_row['comments']; ?> 
							</td>
							
						</tr>
						
						<tr>
							<td style="width:25%; text-align:left;"><strong>Submit Date </strong> </td>
							<td style="width:75%; text-align:left;">
							<?php echo $sub_date = $page_row['sub_date']; ?> 
							</td>
							
						</tr>
						
						
					
					</tbody>
				</table>
				</div>
			</section>
			
			<div class="row">
				<div class="col-md-3">
					<a href="javascript:;" onClick="window.print();" class="btn btn-info btn-block"> <i class="fas fa-print"></i> Print </a>
				</div>
				<div class="col-md-3">
					<a href="mentor_pre_registration_apporve.php?id=<?php echo $id; ?>" class="btn btn-success btn-block"> <i class="fas fa-check-square"></i> Approve </a>
				</div>
				<div class="col-md-3">
					<a href="javascript:;" onClick="delete_function_con('<?php echo $id; ?>', '<?php echo $table_name; ?>');" class="btn btn-danger btn-block"> <i class="fas fa-trash-alt"></i> Delete </a>
				</div>
				<div class="col-md-3">
					<a href="mentor_pre_registration_list.php" class="btn btn-warning btn-block"> <i class="fas fa-long-arrow-alt-left"></i> Back </a>
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