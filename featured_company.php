<?php 

	$content_manage245 = mysqli_query($con,"SELECT * FROM content_manage WHERE id = '1'");

	$content_manage = mysqli_fetch_array($content_manage245);

	

	$id_con = $content_manage['id'];

	$title = $content_manage['title'];

	$con_desc = $content_manage['con_desc'];

?>

<div class="featured-wrap" style="padding-bottom: 60px;">

  <div class="container">

    <div class="heading-title">Featured <span>Company</span></div>

    <br>

    <div class="row">



	<?php

			if($c = $_SESSION["c"]){
				$c = $_SESSION["c"];
				
				$companey_info_db = mysqli_query($con, "SELECT * FROM recurator_info where featured = '1' and country = '$c'");
				
			} else {

			$companey_info_db = mysqli_query($con, "SELECT * FROM recurator_info where featured = '1'");
			
			}
			
			while($company_data = mysqli_fetch_array($companey_info_db)){

				$companyUserId = $company_data["user_id"];

				$companyName = $company_data["company_name"];

				$companyType = $company_data["c_type"];

				$com_logo = $company_data["com_logo"];

		?>

	<div class="col-md-4">
        <div class="listWrpService sa_listWrpService">

              <div class="listImg sa_new-img"><img src="<?php echo $base_url; ?>job-recruiter/com-logo/<?php echo $com_logo; ?>" alt=""></div>

				<div class="saz_title">
      			<h3 style="border-bottom:1px dashed #CCCCCC;"><a href="<?php echo $base_url; ?>featured_company_info.php?c_user_id=<?php echo $companyUserId; ?>"> <?php echo $companyName; ?></a></h3>
				</div>
				<?php

	

					$job_list_fe = mysqli_query($con, "SELECT * FROM  job_listing where user_id = '$companyUserId' and status = '1' order by id desc limit 0,2");

					while($job_listing_data = mysqli_fetch_array($job_list_fe)){

						$job_id_fe = $job_listing_data["id"];

						$job_title_fe = $job_listing_data["job_title"];

						

				?>

              
				<div class="saz_des">
			  <p> <i class="fa fa-list-ul" aria-hidden="true"></i> 

			  <a href="job-details.php?job_id=<?php echo $job_id_fe; ?>">

			  <?php echo $job_title_fe; ?> 

			  </a>

			  </p>
			</div>
			  

			  <?php } ?>

			  


        </div>	  
</div>
	<?php } ?>



    </div> <!-- End row -->

		

  </div>

</div>



