<?php
	
	include("fj-admin/config/confg.php");
	$tra_id = $_REQUEST["tra_id"];
	$user_resume = mysqli_query($con, "SELECT * FROM trainning_manage WHERE id = '$tra_id' ");
			$job_listing_data = mysqli_fetch_array($user_resume);
			
				$id = $job_listing_data["id"];
				$title = $job_listing_data["title"];
				$user_id = $job_listing_data["user_id"];
				
			
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $title; ?> </title>
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
<a href="" title="Test"> <?php echo $job_listing_data["title"]; ?> </a>
</strong>
<small class="label label-default adlistingtype"><?php echo $category_name = $job_listing_data["category_name"]; ?> </small>
</h2>

<br/>


<?php  
	$get_share_url = $base_url ."trainning-details.php?tra_id=". $_GET["tra_id"];
	// var_dump($get_share_url);
?>
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $get_share_url; ?>"><i class="fa fa-facebook-square" style="color: #3b5998; font-size: 30px; margin-right:5px;"></i></a>
<a href="https://plus.google.com/share?url=<?php echo $get_share_url; ?>"><i class="fa fa-google-plus-square" style="color: #ea4335; font-size: 30px; margin-right:5px;"></i></a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $get_share_url; ?>"><i class="fa fa-linkedin-square" style="color: #0077b5; font-size: 30px; margin-right:5px;"></i></a>


<div class="ads-details">
<div class="row" style="padding-bottom: 20px;">



<div class="ads-details-info jobs-details-info col-md-12 enable-long-words from-wysiwyg">

<h5 class="list-title"><strong>Date </strong></h5>
<p>
<?php echo $job_listing_data["dates"]; ?>
</p>

<h5 class="list-title"><strong>Duration </strong></h5>
<p>
<?php echo $job_listing_data["duration"]; ?>
</p>

<h5 class="list-title"><strong>No. of Classes/ Sessions </strong></h5>
<p>
<?php echo $job_listing_data["no_of_class"]; ?>
</p>

<h5 class="list-title"><strong>Class Schedule </strong></h5>
<p>
<?php echo $job_listing_data["class_sechdule"]; ?>
</p>

<h5 class="list-title"><strong>Total Hours </strong></h5>
<p>
<?php echo $job_listing_data["total_houre"]; ?>
</p>

<h5 class="list-title"><strong>Last Date of Registration</strong></h5>
<p>
<?php echo $job_listing_data["last_date"]; ?>
</p>

<h5 class="list-title"><strong>Venue</strong></h5>
<p>
<?php echo $job_listing_data["venue"]; ?>
</p>


<h5 class="list-title"><strong> Details</strong></h5>


<p>
<?php echo $job_listing_data["description"]; ?>
</p>

</div>


</div>
</div>



</div>

</div>
<!--/.ads-details-wrapper-->


<div class="col-sm-3 page-sidebar-right">

<aside>
<div class="panel sidebar-panel panel-contact-seller">
<div class="panel-heading">Course Fee</div>
<div class="panel-content user-info">
<div class="panel-body text-center">
<div class="seller-info">
<div class="company-logo-thumb mb20">

<a href="#" class="btn btn-success btn-block" style="background:#e41f26; border:1px solid #e41f26; color:#FFFFFF;">
<strong><?php echo $fees = $job_listing_data["fees"]; ?></strong> Tk 
</a>

<a href="enroll_tranning.php?tra_id=<?php echo $tra_id; ?>" class="btn btn-success btn-block" >
Enroll Now
</a>

</div>

<p>
Contact : <?php echo $job_listing_data["contacts"]; ?>  </br> 
Email: <?php echo $job_listing_data["email"]; ?>  </br> 
</p>

<p style="margin-top:20px; text-align:center;">
Tutor : <strong><?php echo $job_listing_data["tutor_name"]; ?></strong>  </br> 
 <strong><?php echo $job_listing_data["tutor_desig"]; ?> </strong> </br>
</p> 
  <p style="text-align: justify; margin-top:20px;"> <?php echo $job_listing_data["tutor_details"]; ?> </p> </br> 


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