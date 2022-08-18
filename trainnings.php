<?php 

	$category_nametra = $_REQUEST["category_nametra"];

	$content_manage245 = mysqli_query($con,"SELECT * FROM content_manage WHERE id = '1'");

	$content_manage = mysqli_fetch_array($content_manage245);

	

	$id_con = $content_manage['id'];

	$title = $content_manage['title'];

	$con_desc = $content_manage['con_desc'];

?>

<div class="featured-wrap" style="padding-bottom: 60px;">

  <div class="container">

    <div class="heading-title">Trainning <span>Programmes</span></div>

    <br>

    <div class="row">

<div class="col-md-6">

	<?php

	

			$trainning_categoryr = mysqli_query($con, "SELECT * FROM trainning_category LIMIT 0,6");

			while($trainning_category = mysqli_fetch_array($trainning_categoryr)){

				$category_nametra = $trainning_category["category_name"];

				

		?>

        <div class="listWrpService trainning_category_new">

            <div class="New_training">

      			<h3>

				<a href="<?php echo $base_url; ?>trainning_list.php?category_nametra=<?php echo $category_nametra; ?>"> <i class="fa fa-check" aria-hidden="true"></i>


				<?php echo $category_nametra; ?>

				</a>

				</h3>

            </div>


        </div>


	<?php } ?>

</div>

<!-- 2nd 6 column -->
<div class="col-md-6">

	<?php

	

			$trainning_categoryr = mysqli_query($con, "SELECT * FROM trainning_category LIMIT  6,12 ");

			while($trainning_category = mysqli_fetch_array($trainning_categoryr)){

				$category_nametra = $trainning_category["category_name"];

				

		?>

        <div class="listWrpService trainning_category_new">

            <div class="New_training">

      			<h3>

				<a href="<?php echo $base_url; ?>trainning_list.php?category_nametra=<?php echo $category_nametra; ?>"> <i class="fa fa-check" aria-hidden="true"></i>


				<?php echo $category_nametra; ?>

				</a>

				</h3>

            </div>


        </div>


	<?php } ?>

</div>


    </div>

		

  </div>

</div>



