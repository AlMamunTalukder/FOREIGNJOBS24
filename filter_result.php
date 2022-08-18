<?php 
			
			include("fj-admin/config/confg.php");
			
			$category_filter         = addslashes($_POST["category_filter"]);
			$country      = addslashes($_POST["country"]);
			$gender       = addslashes($_POST["gender"]);
			$city     = addslashes($_POST["city"]);
			$job_type         = addslashes($_POST["job_type"]);
			$user_height  = addslashes($_POST["user_height"]);
			
			
			$search_query = "";
			if (!empty($category_filter)) {
				$search_query .= " and job_category = '$category_filter'  ";
				
			}
			
			if (!empty($country)) {
				$search_query .= " and country LIKE '%" . $country . "%'   ";
				
			}
			
			if (!empty($city)) {
				$search_query .= " and job_location LIKE '%" . $city . "%'   ";
				
			}
			
			if (!empty($job_type)) {
				$search_query .= " and job_type LIKE '%" . $job_type . "%'   ";
				
			}
			
			
			$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE status = '1' $search_query ORDER BY id DESC");
			$data_got = mysqli_num_rows($user_resume);
			
			if($data_got != 0){
			
			while($job_listing_data = mysqli_fetch_array($user_resume)){
			
				$id = $job_listing_data["id"];
				$job_title = $job_listing_data["job_title"];
				$user_id = $job_listing_data["user_id"];
				
				$user_resume1 = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$user_id'");
				$recurator_info = mysqli_fetch_array($user_resume1);
				
				$company_name = $recurator_info["company_name"];
				$com_logo = $recurator_info["com_logo"];
		?>
		
        <li>
        <div class="listWrpService featured-wrap">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="<?php echo $base_url; ?>job-recruiter/com-logo/<?php echo $com_logo; ?>" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="<?php echo $base_url; ?>job-details.php?job_id=<?php echo $job_listing_data["id"]; ?>"> <?php echo $job_title; ?> </a></h3>
              <p> <?php echo $company_name; ?> </p>
			  
             <ul class="featureInfo">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $job_location = $job_listing_data["job_location"]; ?> , <?php echo $country = $job_listing_data["country"]; ?></li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> 
				<?php $job_deadline = $job_listing_data["job_deadline"]; 
				 $yrdata= strtotime($job_deadline);
   				 echo date('d, F Y', $yrdata);
	?>
				
				</li>

              </ul>
              
              
              <p class="para">
			  		<?php $salary = $job_listing_data["salary"]; if($salary != ""){ echo "TK ".number_format($job_listing_data["salary"]); } else { echo "Negotiable"; } ?>
			  </p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="<?php echo $base_url; ?>job-details.php?job_id=<?php echo $job_listing_data["id"]; ?>">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
	  
	  <?php } } else { ?> 
	  
	  <div class="filter" style="width:810px; text-align: center; padding-top:20px;">No Jobs Found!!!</div>
		
	  <?php } ?>