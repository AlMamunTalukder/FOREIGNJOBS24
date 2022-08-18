<?php

	include("fj-admin/config/confg.php");

	//@System Analyst/Programmer : Md. Saiful Islam Sagor.

	//@Author : Expert IT Solution

	//@Cell : +88 01766 40 98 19

	//@Website : www.expertitbd.com

	

	$category_nametra = $_REQUEST["category_nametra"];

	

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

<title> <?php echo $category_nametra; ?> |  <?php echo $title; ?> </title>

<?php include 'head.php';?>

</head>

<body>

<?php include 'header-menu.php';?>



<div class="inner-heading">

  <div class="container">

    <h3><?php echo $category_nametra; ?></h3>

  </div>

</div>







<div class="featured-wrap" style="padding-bottom: 60px;">

  <div class="container">

    <div class="row">



	<?php

	

			$companey_info_db = mysqli_query($con, "SELECT * FROM trainning_manage where category_name = '$category_nametra'");

			while($job_listing_data = mysqli_fetch_array($companey_info_db)){

				$trainning_id = $job_listing_data["id"];

				$title = $job_listing_data["title"];

				

		?>

	
<div class="col-md-4">
 

        <div class="listWrpService">


   

      			<h3><a href="<?php echo $base_url; ?>trainning-details.php?tra_id=<?php echo $trainning_id; ?>"> <?php echo $title; ?></a></h3>

              <p>  Fees : <?php echo $fees = $job_listing_data["fees"]; ?> TK </p>

              <ul class="featureInfo">

                <li style="margin: 0;"> <?php echo $duration = $job_listing_data["duration"]; ?> </li>

				<li style="margin: 0;"> <?php echo $no_of_class = $job_listing_data["no_of_class"]; ?></li>

                <li style="margin: 0;"><i class="fa fa-calendar" aria-hidden="true"></i> 

				<?php echo $dates = $job_listing_data["dates"]; ?>

				</li>

              </ul>

		

              <div class="click-btn"><a href="<?php echo $base_url; ?>trainning-details.php?tra_id=<?php echo $trainning_id; ?>">View Details</a></div>

          </div>

        </div>


	  

	<?php } ?>

</div>

    </div>

		

  </div>

</div>













 

<?php include 'footer.php';?>





<script src="js/jquery-2.1.4.min.js"></script> 

<script src="js/bootstrap.min.js"></script> 

<script src="js/carousel.js"></script>

<script type="text/javascript" src="js/js_script.js"></script>



</body>

</html>