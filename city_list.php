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

<title> All City |  <?php echo $title; ?> </title>

<?php include 'head.php';?>

</head>

<body>

<?php include 'header-menu.php';?>



<div class="inner-heading">

  <div class="container">

    <h3>All City</h3>

  </div>

</div>







<div class="featured-wrap" style="padding-bottom: 60px;">

  <div class="container">

    <div class="row">



	 <?php
				
					if($c = $_SESSION["c"]){
					$c = $_SESSION["c"];
					
					$ct1 = mysqli_query($con,"SELECT * FROM all_country where country_name = '$c'");
					$all_country = mysqli_fetch_assoc($ct1);
					
					$map_code = $all_country["map_code"];
					$country_name = $all_country["country_name"];
					$country_id = $all_country["id"];
					
					} else {
					$c = "Bangladesh";
					$ct1 = mysqli_query($con,"SELECT * FROM all_country where country_name = '$c'");
					$all_country = mysqli_fetch_assoc($ct1);
					
					$map_code = $all_country["map_code"];
					$country_name = $all_country["country_name"];
					$country_id = $all_country["id"];
					
					}
				
	
					  $qc1 = mysqli_query($con,"SELECT * FROM city_manage WHERE country_id = '$country_id' ORDER BY ID ASC ");
					  $qdiv12 = mysqli_num_rows($qc1);
					  while ($city_manage = mysqli_fetch_assoc($qc1)) {
				?>
             
	
<div class="col-md-4">
   

        <div class="listWrpService">



            <div class="sa_com_info">

      			<h3>
				
				<a href="division.php?d=<?php echo $city_name = $city_manage['city_name']; ?>"> 
				<?php echo $city_name = $city_manage['city_name']; ?>
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