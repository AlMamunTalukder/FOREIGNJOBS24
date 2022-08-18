<?php
include("fj-admin/config/confg.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
<?php include 'header-menu.php';?>

<div class="inner-heading">
  <div class="container">
    <h3>Registration as Job Recurator </h3>
  </div>
</div>




<div class="inner-content loginWrp">
  <div class="container"> 
   
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">Please complete all fields.</div>

         

          <div class="tab-content">
    <div id="job-seeker" class="tab-pane fade in active">
      <div class="formint conForm">
            <form method="post" action="job_rec_reg_ac.php">
				
				<?php	
										
										$error_view = $_REQUEST["error_view"];
										if(!empty($error_view)){
											echo $error_view;
										}
									?>

              <div class="input-wrap">
                <input name="full_name" placeholder="Your Name" class="form-control" type="text" required="">
              </div>
			  
			   <div class="input-wrap">
                <input name="company_name" placeholder="Company Name" class="form-control" type="text" required="">
              </div>
			  
			  <div class="input-wrap">
				
				<select name="c_type" class="form-control" required="">
				  <option value="">Company Type</option>
				  <?php
				  $company_typer = mysqli_query($con,"SELECT * FROM company_type");
				  while ($company_type = mysqli_fetch_assoc($company_typer)) {
				  ?>
				  <option value="<?php echo $company_type['com_type'];?>"><?php echo $company_type['com_type'];?></option>
				  <?php } ?>
				</select>
				
				</div>
			  
			  <div class="input-wrap">
               	 <input name="phone" placeholder="Mobile Number" class="form-control" type="text" required="">
              </div>
			  
			  <div class="input-wrap">
                <input name="email" id="rec_email" placeholder="Email Address" class="form-control" type="email" required="" onBlur="email_address_check();" >
              </div>
			  
			  <div class="form-group">
						<div id="email_address_check"></div>
			  </div>
			  
			   <div class="input-wrap">
                <input name="password" id="password" placeholder="Password" class="form-control" type="Password" pattern=".{8,}"   required title="8 characters minimum">
              </div>

               <div class="input-wrap">
                <input name="c_password" id="c_password" placeholder="Retype Password" class="form-control" type="Password" required=""  onblur="pass_chk_func();">
              </div>
			  
				  <div class="form-group">
							<div id="pass_chk"></div>
				</div>
			  
			  	<div class="input-wrap">
				<select name="company_category" class="form-control" required="">
				  <option value="">Company Category</option>
				  <?php
				  $job_cat = mysqli_query($con,"SELECT * FROM job_categories");
				  while ($job_cat_view = mysqli_fetch_assoc($job_cat)) {
				  ?>
				  <option value="<?php echo $job_cat_view['cate_name'];?>"><?php echo $job_cat_view['cate_name'];?></option>
				  <?php } ?>
				</select>
				</div>
				
				
             
              <div class="input-wrap">
                <select name="country" class="form-control" required="">
				  <option value="">Select Country</option>
				  <?php
				  $coun = mysqli_query($con,"SELECT * FROM all_country");
				  while ($all_country = mysqli_fetch_assoc($coun)) {
				  ?>
				  <option value="<?php echo $all_country['country_name'];?>"><?php echo $all_country['country_name'];?></option>
				  <?php } ?>
				</select>
              </div>

			<div class="input-group inputs">
								<label class="custom-control custom-checkbox mb-12 mr-sm-12 mb-sm-12">
									<input type="checkbox" class="custom-control-input" required>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description"> 
									<span class="terms">I Accept 
									<a href="terms-and-conditions.php" target="_blank"><span>Terms & Condition</span></a>.
									</span>
									</span>
								</label>
								</div>


              <div class="sub-btn">
                <input name="register" class="sbutn" value="Register Now" type="submit">
              </div>
			  
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Old User? <a href="login.php">Login Here</a></div>
			  
            </form>
          </div>

    </div>
   
    
  </div>

         


        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
    

</div>
</div>





<?php 	include 'footer.php';
		include 'footer_script.php';
?>

<script>
 

function pass_chk_func() {
	
	password = $('#password').val();
	c_password = $('#c_password').val();
	
	$.ajax({
			   url: 'pass_chk.php',
			   
			   data: {
				   password: password,
				   c_password: c_password
				   
			   },
			   type: 'post',
			   success: function (output) {
				   
				   $('#pass_chk').html(output);
			   }
		   });
}



function email_address_check() {
	
	rec_email = $('#rec_email').val();
	
	$.ajax({
			   url: 'email_address_check_recurtor.php',
			   
			   data: {
				 
				   rec_email: rec_email
				   
			   },
			   type: 'post',
			   success: function (output) {
				   
				   $('#email_address_check').html(output);
			   }
		   });
}




</script>