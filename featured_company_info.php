<?php

	include("fj-admin/config/confg.php");

	//@System Analyst/Programmer : Md. Saiful Islam Sagor.

	//@Author : Expert IT Solution

	//@Cell : +88 01766 40 98 19

	//@Website : www.expertitbd.com

	

	$cate_name = $_REQUEST["cate_name"];

	

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

<title> All Jobs |  <?php echo $title; ?> </title>

<?php include 'head.php';?>

</head>

<body>

<?php include 'header-menu.php';?>



<?php  

  $c_user_id = $_REQUEST["c_user_id"];

  $recurator_info_db = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$c_user_id' ");

  $recurator_info_data = mysqli_fetch_array($recurator_info_db);

  $com_logo = $recurator_info_data["com_logo"];

  $c_cover = $recurator_info_data["c_cover"];

  

   $c_user_id = $_REQUEST["c_user_id"];

  $subscriber = mysqli_query($con, "SELECT * FROM subscribe WHERE user_id = '$c_user_id' ");

  $subscribe = mysqli_fetch_array($subscriber);

  $subscribe_type = $subscribe["subscribe_type"];

  

    $c_user_id = $_REQUEST["c_user_id"];

  $recurator_verification1 = mysqli_query($con,"SELECT * FROM recurator_verification WHERE user_id = '$c_user_id'");

		 $recurator_verification = mysqli_fetch_array($recurator_verification1);

		 $statusver = $recurator_verification['status'];





?>



<?php if($c_cover){ ?>

<div align="center">

    <img class="media-object" src="<?php echo $base_url; ?>job-recruiter/com-cover/<?php echo $c_cover; ?>" alt="..." style="width:100%; height:275px;">

</div>

<?php } ?>

  
<!-- New Logo of complany -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="profile_sa">
      <div class="com_logo_sa">
         <img class="media-object" src="<?php echo $base_url; ?>job-recruiter/com-logo/<?php echo $com_logo; ?>" alt="...">
      </div>
    </div>
    </div>
  </div>
</div>
<!-- New Logo of complany -->



<div class="featured_company_info_section" style="padding: 50px 0;">

  <div class="container">

    <div class="row">

      <div class="col-md-8">
      <div class="com_title">
              <h3><strong><?php echo $recurator_info_data['company_name']; ?> </strong>
     <?php if($statusver == 1){ ?> ( <span style="font-size:16px;"> Verified </span> )<?php } ?>

      </h3>
      </div>

          <h4><?php echo $recurator_info_data['c_type']; ?> 

		 <!-- <button type="button" class="btn btn-success" style="background:#16a05d; color:#FFFFFF; border:1px solid #16a05d; width:30%; margin-left:15%;">

		  <?php echo $subscribe['subscribe_type']; ?>

		  </button>-->

		  </h4>

          

		  <h5><?php echo $recurator_info_data['phone']; ?></h5>

  

		<div class="col-md-12 ma_reset" style="padding-top: 20px;">

		<i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $address = $recurator_info_data["address"]; ?> ,<?php echo $city = $recurator_info_data["city"]; ?> - <?php echo $zip = $recurator_info_data["zip"]; ?> , <?php echo $country = $recurator_info_data["country"]; ?>

		

		<h5><?php echo $recurator_info_data['web_url']; ?></h5>

		<h5><?php echo $recurator_info_data['email']; ?></h5>

		

		<h5><?php echo $recurator_info_data['com_desc']; ?></h5>

		</div>

        <div class="col-md-12" style="padding-top: 50px;">

          <strong>Jobs Post By: <?php echo $recurator_info_data['company_name']; ?></strong>

          <ul class="list-group" style="padding-top: 20px;">

            <?php  

              $i = 1;

                $companey_job_list_db = mysqli_query($con, "SELECT * FROM job_listing WHERE user_id= '$c_user_id' and status = '1'");

                while($company_job_list_data = mysqli_fetch_array($companey_job_list_db)){

            ?>

              <li class="list-group-item">

                <strong><?php echo $i++; ?> - </strong>

                <a href="<?php echo $base_url; ?>job-details.php?job_id=<?php echo $company_job_list_data['id'] ?>"><?php echo $company_job_list_data['job_title']; ?></a>

              </li>

            <?php } ?>

          </ul>

        </div>

      </div>

      <div class="col-md-4">

        <?php  

          $exp_settings_db = mysqli_query($con, "SELECT * FROM exp_settings WHERE id = 10 ");

          $exp_settings_data = mysqli_fetch_array($exp_settings_db);

        ?>

        <a href="<?php echo $exp_settings_data['banner_link']; ?>" target="_blank"><img src="<?php echo $base_url . "image/".$exp_settings_data['banner']; ?>" alt="banner"></a>

      </div>

    </div>

  </div>

</div>



 

<?php include 'footer.php';?>





<script src="js/jquery-2.1.4.min.js"></script> 

<script src="js/bootstrap.min.js"></script> 

<script src="js/carousel.js"></script>

<script type="text/javascript" src="js/js_script.js"></script>

<div class="totop">&uarr;</div>

<style>

.totop {

    position: fixed;

    bottom: 50px;

    right: 50px;

    cursor: pointer;

    display: none;

    background: #313538;

    color: #fff;

    border-radius: 25px;

    height: 40px;

    line-height: 7px;

    padding: 15px;

    font-size: 18px;

}

</style>

<script src="<?php echo $base_url; ?>js/totop.min.js"></script>

<script>

$(document).ready(function(){

	$('.totop').tottTop();

});

</script>

</body>

</html>