<?php
	include("fj-admin/config/confg.php");
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com
	
	$c = $_REQUEST["c"];
	
	$d = $_REQUEST["d"];
	
	$stmt         = mysqli_query($con, 'SELECT * FROM exp_settings');
	$site_setting = mysqli_fetch_array($stmt);
	$base_url = $site_setting['base_url'];
	$title = $site_setting['title'];
	$s_com_name = $site_setting['s_com_name'];
	$s_logo = $site_setting['s_logo'];
	$m_key = $site_setting['m_key'];
	$m_desc = $site_setting['m_desc'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $d; ?> |  <?php echo $title; ?> </title>
<?php include 'head.php';?>
</head>
<body>
<?php include 'header-menu.php';?>

<div class="inner-heading">
  <div class="container">
    <h3><?php echo $d; ?> Jobs</h3>
  </div>
</div>

<?php include 'search_job_filter.php';?>
<?php include 'filter.php';?>
    
  


      <div class="col-md-9 col-sm-8 jobs-list-all">
  
        <ul class="listService">
		<div id="loading" align="center" style="padding:15px;">
			<img src="image/loading.gif">
		</div>
	 	<div id="filter_result">
		
		<?php
			$d = $_REQUEST["d"];
			$sentence = str_replace('Division','', $d);
			
			$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE job_location like '%".$sentence."%' and status = '1' and fea_job = '1' ORDER BY rand() LIMIT 2");
			
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
        <div class="listWrpService featured-wrap" id="featured_jobs">
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
      
      <?php 
	  } 
		
		
			$d = $_REQUEST["d"];
			$sentence = str_replace('Division','', $d);
			
			$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE job_location like '%".$sentence."%' and status = '1' and fea_job = '0' ORDER BY id DESC");

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
      
      <?php }  ?>
	  
		</div>      
        </ul>


      </div>
    </div>
    
    <!--Job Listing End--> 
  </div>
</div>



 
<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>

</body>
</html>