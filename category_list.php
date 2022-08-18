<?php

	include("fj-admin/config/confg.php");

	//@System Analyst/Programmer : Md. Saiful Islam Sagor.

	//@Author : Expert IT Solution

	//@Cell : +88 01766 40 98 19

	//@Website : www.expertitbd.com


	

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

<title> All Categories |  <?php echo $title; ?> </title>

<?php include 'head.php';?>

</head>

<body>

<?php include 'header-menu.php';?>



<div class="inner-heading">

  <div class="container">

    <h3>All Categories</h3>

  </div>

</div>







<div class="featured-wrap" style="padding-bottom: 60px;">

  <div class="container">

    <div class="row">



	 <?php
				$q1 = mysqli_query($con, "SELECT * FROM job_categories order by cate_name asc");
				while($job_categories = mysqli_fetch_array($q1)){
				
					$cate_id = $job_categories["id"];
					$cate_name = $job_categories["cate_name"];
					
			?>
             
	
<div class="col-md-4">
   

        <div class="listWrpService">



            <div class="sa_com_info">

      			<h3>
				
				<a href="<?php echo $base_url; ?>catgeory.php?cate_name=<?php echo $cate_name; ?>"> 
				<?php echo $cate_name; ?>
				</a>
				
				</h3>

           

            </div>


        </div>

	  
</div>
	<?php } ?>



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