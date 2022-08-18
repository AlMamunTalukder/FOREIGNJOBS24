
<!--Testimonials start-->
<div class="testimonials-wrap">
  <div class="container">
    <div class="heading-wrap">
      <div class="heading-title">Testimonials</div>
    </div>
    <div class="owl-carousel testimonials">
	
	<?php 
		$testmonial_manage753 = mysqli_query($con,"SELECT * FROM testmonial_manage ORDER BY ID DESC");
		while($testmonial_manage = mysqli_fetch_array($testmonial_manage753)){
		
		$name = $testmonial_manage['name'];
		$designation = $testmonial_manage['designation'];
		$description = $testmonial_manage['description'];
		$photo = $testmonial_manage['photo'];
	?>
	
      <li class="item">
        <div class="testi-info">
          <div class="clientInfo">
            <div class="client-image"><img src="<?php echo $base_url; ?>fj-admin/testimonial/<?php echo $photo; ?>" alt=""></div>
            <div class="name"><?php echo $name; ?> <span><?php echo $designation; ?></span></div>
            <div class="clearfix"></div>
          </div>
          <p><?php echo $description; ?></p>
        </div>
      </li>
	  
	  <?php } ?>
	  
    </div>
  </div>
</div>
<!--Testimonials end--> 