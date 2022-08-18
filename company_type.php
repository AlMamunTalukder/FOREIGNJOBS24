<?php 

	$content_manage245 = mysqli_query($con,"SELECT * FROM content_manage WHERE id = '1'");

	$content_manage = mysqli_fetch_array($content_manage245);

	

	$id_con = $content_manage['id'];

	$title = $content_manage['title'];

	$con_desc = $content_manage['con_desc'];

?>

<div class="featured-wrap">

  <div class="container">

    <div class="heading-title">Company <span>Type</span></div>

    <br>

    <div class="row">



	<?php

	

			$companey_info_db = mysqli_query($con, "SELECT * FROM company_type");

			while($company_data = mysqli_fetch_array($companey_info_db)){

				$com_type_view = $company_data["com_type"];

				

		?>

<div class="col-md-4">
  
        <div class="listWrpService">

            <div class="featured_jobs fre_job_title">

      			<h3> <i class="fa fa-building-o" aria-hidden="true"></i> <a href="<?php echo $base_url; ?>company_type_info.php?com_type=<?php echo $com_type_view; ?>"> <?php echo $com_type_view; ?></a></h3>

            </div>

        </div>
 </div>

	<?php } ?>



    </div>

		

  </div>

</div>



