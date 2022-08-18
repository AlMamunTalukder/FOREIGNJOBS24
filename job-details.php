<?php
	
	include("fj-admin/config/confg.php");
	$job_id = $_REQUEST["job_id"];
	$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE id = '$job_id' ");
			$job_listing_data = mysqli_fetch_array($user_resume);
			
				$id = $job_listing_data["id"];
				$job_title = $job_listing_data["job_title"];
				$user_id = $job_listing_data["user_id"];
				
				$user_resume1 = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$user_id'");
				$recurator_info = mysqli_fetch_array($user_resume1);
				
				$company_name = $recurator_info["company_name"];
				$com_logo = $recurator_info["com_logo"];
				
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $job_title; ?> </title>
<?php include 'head.php';?>

</head>
<body>
<?php include 'header-menu.php';?>

<div class="featured-wrap">
  <div class="container">

<div class="row">
<div class="col-sm-9 page-content col-thin-right">
<div class="inner inner-box ads-details-wrapper">
<h2 class="enable-long-words">
<strong>
<a href="" title="Test"> <?php echo $job_listing_data["job_title"]; ?> </a>
</strong>
<small class="label label-default adlistingtype"><?php echo $job_type = $job_listing_data["job_type"]; ?> Job</small>
</h2>
<span class="info-row">

<?php  
	// $job_id = $_REQUEST["user_id"];
	$c_type_db = mysqli_query($con, "SELECT * FROM job_listing WHERE id = '$job_id' ");
	$c_type_data = mysqli_fetch_array($c_type_db);

	$user_id = $c_type_data['user_id'];
	$recurator_info_db = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$user_id' ");
	$recurator_info_data = mysqli_fetch_array($recurator_info_db);

?>
<?php echo $country = $job_listing_data["company_name"]; ?> - <?php echo $c_type = $recurator_info_data["c_type"]; ?>

<br>
<span class="date"><i class="fa fa-clock-o"> </i> 
<?php $post_date = $job_listing_data["post_date"]; 
				 $yrdata= strtotime($post_date);
   				 echo date('d, F Y', $yrdata);
	?>
	</span> -&nbsp;
<span class="category"><?php echo $job_category = $job_listing_data["job_category"]; ?></span> -&nbsp;
<span class="item-location"><i class="fa fa-map-marker"></i> <?php echo $job_location = $job_listing_data["job_location"]; ?> , <?php echo $country = $job_listing_data["country"]; ?> , </span> 
</span>


<?php  
	$get_share_url = $base_url ."job-details.php?job_id=". $_GET["job_id"];
	// var_dump($get_share_url);
?>
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $get_share_url; ?>"><i class="fa fa-facebook-square" style="color: #3b5998; font-size: 30px; margin-right:5px;"></i></a>
<a href="https://plus.google.com/share?url=<?php echo $get_share_url; ?>"><i class="fa fa-google-plus-square" style="color: #ea4335; font-size: 30px; margin-right:5px;"></i></a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $get_share_url; ?>"><i class="fa fa-linkedin-square" style="color: #0077b5; font-size: 30px; margin-right:5px;"></i></a>


<div class="ads-details">
<div class="row" style="padding-bottom: 20px;">



<div class="ads-details-info jobs-details-info col-md-12 enable-long-words from-wysiwyg">

<h5 class="list-title"><strong>Vacancy</strong></h5>
<p>
<?php echo $job_listing_data["no_of_vacancy"]; ?>
</p>

<h5 class="list-title"><strong>Salary</strong></h5>
<p>
<?php $salary = $job_listing_data["salary"]; if($salary != ""){ echo "TK ".number_format($job_listing_data["salary"]); } else { echo "Negotiable"; } ?>
</p>

<h5 class="list-title"><strong>Job Details</strong></h5>


<p>
<?php echo $job_listing_data["job_description"]; ?>
</p>

<h5 class="list-title"><strong>Educational Requirements</strong></h5>
<p>
<?php echo $job_listing_data["edu_requirments"]; ?>
</p>


</br></br>

<h5 class="list-title"><strong> Experience Requirements </strong></h5>

<p>
<?php echo $job_listing_data["experiences_req"]; ?>
</p>

</br></br></br>

<h5 class="list-title"><strong> Job Requirements </strong></h5>

<p>
<?php echo $job_listing_data["job_requirements"]; ?>
</p>


<h5 class="list-title"><strong> Other Benefits </strong></h5>

<p>
<?php echo $job_listing_data["other_benefits"]; ?>
</p>


</br>

<div class="content-footer">

	<div class="panel-heading"> 
		<span style="font-weight: 700; font-size:16px;"> Job Location : </span> 
		<?php echo $job_location = $job_listing_data["job_location"]; ?> , <?php echo $country = $job_listing_data["country"]; ?> 
	</div>
	
	<div class="panel-heading"> 
		<span style="font-weight: 700; font-size:16px;"> Job Type : </span> 
		<?php echo $job_location = $job_listing_data["job_type"]; ?>
	</div>
	
	<div class="panel-heading"> 
		<span style="font-weight: 700; font-size:16px;"> Job Deadline : </span> 
		<?php echo $job_location = $job_listing_data["job_deadline"]; ?>
	</div>

</div>


</div>


</div>
</div>

<div class="content-footer text-left">
<?php $job_id = $_REQUEST["job_id"]; ?>

<?php 
	$user_id=$_SESSION['user_id'];
	
	$job_seeker_resume = mysqli_query($con, "SELECT * FROM job_apply WHERE user_id = '$user_id' and job_id = '$job_id'");
	  $job_apply = mysqli_num_rows($job_seeker_resume);
	 
	 if($job_apply != 0){
?>

<a class="btn btn-default btn-lg" href="#">
<i class="fa fa-check-square"></i> Already Applied
</a>

<?php } else { ?>

<a class="btn btn-default btn-lg" href="apply.php?job_id=<?php echo $job_id; ?>">
<i class="fa fa-check-circle"></i> Apply Now
</a>

<a class="btn btn-default btn-lg" href="save_job.php?user_id=<?php echo $_SESSION['user_id']; ?>&job_id=<?php echo $job_id; ?>&job_title=<?php echo $job_listing_data["job_title"] ?>">
<i class="fa fa-floppy-o"></i> Save Job
</a>

<a class="btn btn-default btn-lg" href="report_job.php?recurator_email=<?php echo $recurator_info['email']; ?>&user_id=<?php echo $_SESSION['user_id']; ?>&job_title=<?php echo $job_listing_data["job_title"]; ?>">
<i class="fa fa-flag"></i> Report Job
</a>


<?php } ?>

</div>

</div>

</div>
<!--/.ads-details-wrapper-->


<div class="col-sm-3 page-sidebar-right">

<aside>
<div class="panel sidebar-panel panel-contact-seller">
<div class="panel-heading">Company Information</div>
<div class="panel-content user-info">
<div class="panel-body text-center">
<div class="seller-info">
<div class="company-logo-thumb mb20">

<?php $c_user_id = $job_listing_data["user_id"]; ?>

<a href="featured_company_info.php?c_user_id=<?php echo $c_user_id; ?>">
<img alt="Logo Test" class="img-responsive" src="<?php echo $base_url; ?>job-recruiter/com-logo/<?php echo $recurator_info["com_logo"]; ?>">
</a>
</div>
<h3 class="no-margin">
<a href="featured_company_info.php?c_user_id=<?php echo $c_user_id; ?>"> <?php echo $recurator_info["company_name"]; ?> </a>
</h3>
<p>
Type : <?php echo $recurator_info["c_type"]; ?>  </br> 
Location: </br> 
<strong>
<?php echo $recurator_info["address"]; ?> , </br> <?php echo $recurator_info["city"]; ?> - <?php echo $recurator_info["zip"]; ?> </br>  <?php echo $recurator_info["country"]; ?> 
</strong>
</p>
<p> Web : <strong> <?php echo $recurator_info["web_url"]; ?>  </strong></p>
</div>

<div class="user-ads-action">

<a href="tel:<?php echo $recurator_info["phone"]; ?>" class="btn btn-default btn-block showphone">
<i class="fa fa-phone"></i> <?php echo $recurator_info["phone"]; ?> </a>
<?php
	$user_id = $job_listing_data["user_id"];
	$recurator_verification1 = mysqli_query($con, "SELECT * FROM recurator_verification WHERE user_id = '$user_id'");
	$recurator_verification_data = mysqli_fetch_array($recurator_verification1);
	$recurator_verification = mysqli_num_rows($recurator_verification1);
	
	$status = $recurator_verification_data["status"];
	 
?>
<a href="" class="btn btn-default btn-block showphone">
<?php 

if($recurator_verification != 0){

		if($status == 0){
			echo "Pending Verification";
		} else {
			echo "Verified";
		}
		
}	else {

	echo "Unverified";
	
}
?> 
</a>

</div>
<br>
<br>
<?php  
	$exp_settings_db = mysqli_query($con, "SELECT * FROM exp_settings WHERE id = 10 ");
	$exp_settings_data = mysqli_fetch_array($exp_settings_db);
?>
<a href="<?php echo $exp_settings_data['banner_link']; ?>" target="_blank"><img src="<?php echo $base_url . "image/".$exp_settings_data['banner']; ?>" alt="banner"></a>

</div>
</div>
</div>


</div>


</div>
</div>
     
	 </div>
<!--/.page-content-->

<div class="h-spacer"></div>




<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script> 
<script type="text/javascript" src="js/js_script.js"></script>

</body>
</html>