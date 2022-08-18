<style>
li{
    padding: 10px;
	display:block;
}
</style>

<div class="col-md-3"> 

<ul class="s_bar">
  <h3>RESUME</h3>
               <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "welcome.php")?"user_menu_active":"";?>"><a href="welcome.php"><i class="fa fa-home"></i> Dashboard</a></li>

			   
			         <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "applied_jobs.php")?"user_menu_active":"";?>"><a href="applied_jobs.php"><i class="fa fa-list"></i> Applied Jobs</a></li>

               <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "save_jobs.php.php")?"user_menu_active":"";?>"><a href="save_jobs.php"><i class="fa fa-floppy-o"></i> Save Jobs</a></li>
			   
              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "add_resume.php")?"user_menu_active":"";?>"><a href="add_resume.php"><i class="fa fa-plus-circle"></i> Add Resume</a></li>
              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "resume-view.php")?"user_menu_active":"";?>"><a href="resume-view.php"><i class="fa fa-eye"></i> View Resume</a></li>
              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "edit_resume.php")?"user_menu_active":"";?>"><a href="edit_resume.php"><i class="fa fa-pencil-square-o"></i> Edit Resume</a></li>

              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "upload_resume.php")?"user_menu_active":"";?>"><a href="upload_resume.php"><i class="fa fa-upload"></i> Upload Resume</a></li>
			  
			   <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "trainning_manae_job_seeker.php")?"user_menu_active":"";?>"><a href="trainning_manae_job_seeker.php"><i class="fa fa-list"></i> Enrolled Trainning</a></li>

              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "change_password.php")?"user_menu_active":"";?>"><a href="change_password.php"><i class="fa fa-key"></i> Change Password</a></li>

              <li class="<?php echo (basename($_SERVER['PHP_SELF']) ==  "update_profile.php")?"user_menu_active":"";?>"><a href="update_profile.php"><i class="fa fa-list"></i> Update Profile</a></li>
            </ul>
</div>