<?php
include("fj-admin/config/confg.php"); 
session_start();
$user_id=$_SESSION['user_id'];
$user_data=mysqli_query($con, "select * from job_seeker_info where user_id = '$user_id'");

$user_result = mysqli_num_rows($user_data);
if ($user_result == 1) { 
$user_data_view=mysqli_fetch_array($user_data);

$user_image = "SELECT * FROM job_seeker_image WHERE user_id = '$user_id' ";
$user_image_result = $con->query($user_image);
$user_image_data = $user_image_result->fetch_assoc();
} else {
$user_data=mysqli_query($con, "select * from recurator_info where user_id = '$user_id'");
$user_data_view=mysqli_fetch_array($user_data);
$user_result1 = mysqli_num_rows($user_data);

$com_logo = $user_data_view['com_logo'];

}


?>
<div class="header-wrap">
  <div class="container"> 
    

    <div class="row"> 
    

      <div class="col-md-3 col-sm-3">
        <div class="logo"><a href="<?php echo $base_url; ?><?php if(!empty($c)){ ?>?c=<?php echo $c; ?> <?php } ?>"><img src="<?php echo $base_url; ?>image/logo.png" alt=""></a></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
  

      <div class="col-md-4 col-sm-9"> 
       

        <div class="navigationwrape">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header"> </div>
            <div class="navbar-collapse collapse">
			
              <ul class="nav navbar-nav">
              	
			
				
				<div class="user-wrap">

				<a href="#" data-toggle="modal" data-target="#CountryModal" class="btn btn-success">Select Country </a> 

				<a href="<?php echo $base_url; ?>all_jobs.php" class="btn btn-success">All Jobs</a>
	 			
				<div class="clearfix"></div>


				
				</div> 

              	</ul>
				
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
     
      </div>
    
      <div class="col-md-5 col-sm-12">
        <div class="header-right">


<?php if ($user_id !='' and $user_result == 1) {?>

<div class="dropdown2">
<button onclick="dropdownFunction()" class="dropbtn">
  <img class="user-image" src="<?php echo $base_url; ?>image/<?php if ($user_image_data['image_file'] !=''){ echo $user_image_data['image_file'];}else{ echo 'user.jpg';  } ?>">
  <?php echo $user_data_view['full_name'] ;?> <i class="fa fa-caret-down"></i></button>
  <div id="userDropdown" class="dropdown-content">
    <a href="welcome.php"><i class="fa fa-home"></i> Dashboard</a>
    <a href="change_password.php"><i class="fa fa-key"></i> Change Password</a>    
    <a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a>
  </div>
</div>

<?php } elseif($user_id !='' and $user_result1 == 1) { ?>
<div class="dropdown2">
<button onclick="dropdownFunction()" class="dropbtn">

  <img class="user-image" src="<?php echo $base_url; ?>job-recruiter/com-logo/<?php if ($com_logo !=''){ echo $com_logo; }else{ echo 'user.jpg';  } ?>">
  <?php echo $user_data_view['full_name'] ;?> <i class="fa fa-caret-down"></i></button>
  <div id="userDropdown" class="dropdown-content">
    <a href="<?php echo $base_url; ?>job-recruiter/dashboard.php"><i class="fa fa-eye"></i> Dashboard</a>
    <a href="<?php echo $base_url; ?>job-recruiter/update_profile.php"><i class="fa fa-pencil-square-o"></i> Profile Update</a>
	<a href="<?php echo $base_url; ?>job-recruiter/edit_resume.php"><i class="fa fa-pencil-square-o"></i> List A job</a>
	<a href="<?php echo $base_url; ?>job-recruiter/edit_resume.php"><i class="fa fa-pencil-square-o"></i> Jobs List</a>
    <a href="#"><i class="fa fa-key"></i> Change Password</a>    
    <a href="<?php echo $base_url; ?>logout.php"><i class="fa fa-sign-out"></i> Log Out</a>
  </div>
</div>

<?php } else { ?>

          <div class="post-btn"><a href="<?php echo $base_url; ?>post_a_job.php">Post a Job</a></div>

          <div class="user-wrap">

          <div class="register-btn"><a href="#" data-toggle="modal" data-target="#regModal">Register</a></div>
          <div class="login-btn"><a href="<?php echo $base_url; ?>login.php">Login</a></div>
          <div class="clearfix"></div>
          </div>
		  
          <?php } ?>
		  
          <div class="clearfix"></div>
        </div>
      </div>
     
    </div>

  </div>
</div>




<!-- reg Modal  -->
<div id="regModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title uppercase font-weight-bold" id="selectCountryLabel">
<i class="fa fa-sign-in"></i> Create Account
</h4>
      </div>
      <div class="modal-body" >
     
<div class="row">
        <div class="col-md-6">
        <div class="contact"> <span><i class="fa fa-user"></i></span>
          <div class="information"> <strong>JOB SEEKER</strong>
            <p>Sign in or create your Foreign Jobs 24 account to manage your profile</p>
            <ul class="featureLinks benefits">
              <a href="<?php echo $base_url; ?>register.php"><li class="btn btn-default">Register</li></a>
            </ul>  
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="contact"> <span><i class="fa fa-home"></i></span>
          <div class="information"> <strong>JOB RECURATOR</strong>
            <p>Sign in or create account to find the best candidates in the fastest way</p>
            <ul class="featureLinks benefits">
              <a href="<?php echo $base_url; ?>job_recurator.php"><li class="btn btn-default">Register</li></a>
            </ul>
           
          </div>
        </div>
      </div>
     
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<!-- country Modal  -->


<div id="CountryModal" class="modal fade" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title uppercase font-weight-bold" id="selectCountryLabel">
<i class="fa fa-sign-in"></i> All Country
</h4>
      </div>
      <div class="modal-body" >
     
<div class="row">

<?php
$job_cat = mysqli_query($con,"SELECT * FROM all_country order by country_name asc");
while ($job_cat_view = mysqli_fetch_assoc($job_cat)) {
?>
<div class="col-md-2">
  <a href="<?php echo $base_url; ?>country_chg.php?c=<?php echo $job_cat_view["country_name"]; ?>">
<?php echo $job_cat_view["country_name"]; ?>

</a>
</div>
 <?php } ?>


</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- country Modal  -->