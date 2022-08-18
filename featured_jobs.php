<?php 
	$c = $_SESSION["c"];
	
	$content_manage245 = mysqli_query($con,"SELECT * FROM content_manage WHERE id = '1'");

	$content_manage = mysqli_fetch_array($content_manage245);

	

	$id_con = $content_manage['id'];

	$title = $content_manage['title'];

	$con_desc = $content_manage['con_desc'];

?>

<div class="featured-wrap">

  <div class="container">

    <div class="heading-title">Featured <span>Jobs</span></div>

    <div class="headTxt">

	<?php echo $con_desc; ?>

	</div>

    <div class="row">

<div class="owl-carousel testimonials">

	<?php

	
			
			if($c = $_SESSION["c"]){
				$c = $_SESSION["c"];
				$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE fea_job = '1' and status = '1' and country = '$c' order by id desc limit 0,6");
			} else {
				
				$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE fea_job = '1' and status = '1' order by id desc limit 0,6");
				
			}

			



			while($job_listing_data = mysqli_fetch_array($user_resume)){

				

				$id = $job_listing_data["id"];

				$job_title = $job_listing_data["job_title"];



				$user_id = $job_listing_data["user_id"];



				$user_resume1 = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$user_id'");

				$recurator_info = mysqli_fetch_array($user_resume1);

				

				$company_name = $recurator_info["company_name"];

				$com_logo = $recurator_info["com_logo"];

				

		?>

	

      <li class="item">

        <div class="listWrpService">

          <div class="row">

            <div class="col-md-3 col-sm-3 col-xs-3">

              <div class="listImg sa_img"><img src="<?php echo $base_url; ?>job-recruiter/com-logo/<?php echo $com_logo; ?>" alt=""></div>

            </div>

            <div class="col-md-9 col-sm-9 col-xs-9">

      			<h3><a href="<?php echo $base_url; ?>job-details.php?job_id=<?php echo $job_listing_data["id"]; ?>"> <?php echo substr($job_title,0,40); ?>...</a></h3>

              <p>  <?php echo $company_name; ?> </p>

              <ul class="featureInfo">

                <li style="margin: 0;"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $job_location = $job_listing_data["job_location"]; ?> , <?php echo $country = $job_listing_data["country"]; ?></li>

                <li style="margin: 0;"><i class="fa fa-calendar" aria-hidden="true"></i> 

				<?php $job_deadline = $job_listing_data["job_deadline"]; 

				 $yrdata= strtotime($job_deadline);

   				 echo date('d, F Y', $yrdata);

	?>

				

				</li>

              </ul>

			    <p class="para">

			  		<?php $salary = $job_listing_data["salary"]; if($salary != ""){ echo "TK ".number_format($job_listing_data["salary"]); } else { echo "Negotiable"; } ?>

			  </p>

              

              <div class="time-btn"> <?php echo $job_type = $job_listing_data["job_type"]; ?> </div>

              <div class="click-btn"><a href="<?php echo $base_url; ?>job-details.php?job_id=<?php echo $job_listing_data["id"]; ?>">Apply Now</a></div>

            </div>

          </div>

        </div>

      </li>

	  

	<?php } ?>

</div>

    </div>

	

    <div class="read-btn"><a href="all_featured_jobs.php">View All Featured Jobs</a></div>

	

  </div>

</div>



