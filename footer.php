<?php 
	$content_manage245 = mysqli_query($con,"SELECT * FROM content_manage WHERE id = '3'");
	$content_manage = mysqli_fetch_array($content_manage245);
	
	$id_con = $content_manage['id'];
	$title = $content_manage['title'];
	$con_desc = $content_manage['con_desc'];
?>


<!--footer start-->
<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="footer-logo"><img width="200" src="<?php echo $base_url; ?>image/logo.png" alt=""></div>
        <p>
		<?php echo $con_desc; ?>
		</p>
        <div class="read-btn"><a href="<?php echo $base_url; ?>about_us.php">Read More</a></div>
      </div>
      <div class="col-md-8 col-sm-12">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <h3>Quick  LInks</h3>
            <ul class="footer-links">
              <li><a href="<?php echo $base_url; ?>about_us.php">About Us</a></li>
              <li><a href="<?php echo $base_url; ?>all_featured_jobs.php">Featured Jobs</a></li>
              <li><a href="<?php echo $base_url; ?>all_jobs.php">All Jobs</a></li>
              <li><a href="<?php echo $base_url; ?>login.php">Login</a></li>
              <li><a href="<?php echo $base_url; ?>terms_of_service.php">Terms of Service</a></li>
              <li><a href="<?php echo $base_url; ?>privacy_policy.php">Privacy Policy</a></li>
              <li><a href="<?php echo $base_url; ?>register.php">Register</a></li>
              <li><a href="<?php echo $base_url; ?>post_a_job.php">Post A Job</a></li>
              <li><a href="<?php echo $base_url; ?>contact.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-4">
            <h3>Country Jobs</h3>
            <ul class="footer-links">
			
<?php
$job_cat = mysqli_query($con,"SELECT * FROM all_country order by id asc limit 0,9");
while ($job_cat_view = mysqli_fetch_assoc($job_cat)) {
?>
<li><a href="country.php?c=<?php echo $job_cat_view["country_name"]; ?>"><?php echo $job_cat_view["country_name"]; ?></a></li>


 <?php } ?>
             
            </ul>
          </div>
          <div class="col-md-4 col-sm-4">
            <h3>Category Jobs </h3>
            <ul class="footer-links">
			
			<?php
				$q1 = mysqli_query($con, "SELECT * FROM job_categories order by id asc limit 0,8");
				while($job_categories = mysqli_fetch_array($q1)){
				
					$cate_id = $job_categories["id"];
					$cate_name = $job_categories["cate_name"];
					
			?>
			
              <li><a href="<?php echo $base_url; ?>catgeory.php?cate_name=<?php echo $cate_name; ?>"><?php echo $cate_name; ?> </a></li>
			  
			<?php } ?>
			
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--footer end--> 

<!--copyright start-->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="copyright">Copyright © 2018 Foreignjobs24 - All Rights Reserved.</div>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="social">
          <div class="followWrp"> <span>Follow Us</span>
		  <?php
									$social_manage_r = mysqli_query($con,"SELECT * FROM social_manage where id = '1'");
									$social_manage = mysqli_fetch_array($social_manage_r);
										
										$facebook = $social_manage['facebook'];
										$twitter = $social_manage['twitter'];
										$google_plus = $social_manage['google_plus'];
										$linkedin = $social_manage['linkedin'];
										$youtube = $social_manage['youtube'];
								?>
								
								
            <div class="social-wrap">
              <li><a href="https://<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="https://<?php echo $google_plus; ?>" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="https://<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--copyright end--> 
