<?php

	include("fj-admin/config/confg.php");

	//@System Analyst/Programmer : Md. Saiful Islam Sagor.

	//@Author : Expert IT Solution

	//@Cell : +88 01766 40 98 19

	//@Website : www.expertitbd.com

	

	$com_type = $_REQUEST["com_type"];

	

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

<title> <?php echo $com_type; ?> |  <?php echo $title; ?> </title>

<?php include 'head.php';?>

</head>

<body>

<?php include 'header-menu.php';?>



<div class="inner-heading">

  <div class="container">

    <h3><?php echo $com_type; ?></h3>

  </div>

</div>







<div class="featured-wrap" style="padding-bottom: 60px;">

  <div class="container">

    <div class="row">



	<?php

			if($c = $_SESSION["c"]){
				$c = $_SESSION["c"];
				$companey_info_db = mysqli_query($con, "SELECT * FROM recurator_info where c_type = '$com_type' and country = '$c'");
			} else {

			$companey_info_db = mysqli_query($con, "SELECT * FROM recurator_info where c_type = '$com_type'");
			
			}

			while($company_data = mysqli_fetch_array($companey_info_db)){

				$companyUserId = $company_data["user_id"];

				$companyName = $company_data["company_name"];

				$companyType = $company_data["c_type"];

				$com_logo = $company_data["com_logo"];

		?>

	
<div class="col-md-4">
   

        <div class="listWrpService">


            <div class="com_img_sa" style="padding-right: 0;">

              <div class="listImg com_type_info"><img src="<?php echo $base_url; ?>job-recruiter/com-logo/<?php echo $com_logo; ?>" alt=""></div>

            </div>

            <div class="sa_com_info">

      			<h3><a href="<?php echo $base_url; ?>featured_company_info.php?c_user_id=<?php echo $companyUserId; ?>"> <?php echo $companyName; ?></a></h3>

              <p>  <?php echo $companyType; ?> </p>

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