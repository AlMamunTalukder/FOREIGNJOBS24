<style>
li{
    padding: 10px;
	display:block;
}
</style>
  <div class="col-md-3 sidebar"> 

        <!-- Side Bar -->
           <h5 class="widget-title">Job Recruiter</h5>
            <ul class="categories">
              
              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "dashboard.php")?"user_menu_active":"";?>"><a href="<?php echo $base_url; ?>job-recruiter/dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>

              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "update_profile.php")?"user_menu_active":"";?>"><a href="<?php echo $base_url; ?>job-recruiter/update_profile.php"><i class="fa fa-pencil-square-o"></i> Update Profile</a></li>
			  
			   <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "profile_verificaiton.php")?"user_menu_active":"";?>"><a href="<?php echo $base_url; ?>job-recruiter/profile_verificaiton.php"><i class="fa fa-check-circle" aria-hidden="true"></i> Profile Verification</a></li>
			   
			    <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "list_a_job.php")?"user_menu_active":"";?>"><a href="<?php echo $base_url; ?>job-recruiter/list_a_job.php"><i class="fa fa-th-list" aria-hidden="true"></i> List A Job </a></li>
				
				 <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "jobs_list.php")?"user_menu_active":"";?>"><a href="<?php echo $base_url; ?>job-recruiter/jobs_list.php"><i class="fa fa-list-alt" aria-hidden="true"></i> Jobs List</a></li>
			  
              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "change_password.php")?"user_menu_active":"";?>"><a href="<?php echo $base_url; ?>job-recruiter/change_password.php"><i class="fa fa-lock" aria-hidden="true"></i> Change Password</a></li>
             
              <li><a href="<?php echo $base_url; ?>logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
              
            </ul>


     
      </div>
