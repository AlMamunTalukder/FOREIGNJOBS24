<?php
include("fj-admin/config/confg.php");
$unique_id = mysqli_query($con,"SELECT * FROM job_seeker_info");
$unique_id_view = mysqli_num_rows($unique_id);
$next_id = $unique_id_view +'1';
$add_extra = 'FJ00';
$unique_user_id = $add_extra.$next_id;

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
    <h3>Register</h3>
  </div>
</div>




<div class="inner-content loginWrp">
  <div class="container"> 
   
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt">Please complete all fields.</div>

         <h4 style="color: #e61646">
          <?php
          echo $error_reg = $_REQUEST["error_reg"];
          ?>
          </h4>

          <div class="tab-content">
    <div id="job-seeker" class="tab-pane fade in active">
      <div class="formint conForm">
       


       
<form method="post" role="form" action="register_ac.php"  data-toggle="validator">

   <input name="user_id" type="hidden" value="<?php echo $unique_user_id;?>" >
        
        <div class="form-group">
          <label for="inputName" class="control-label">Name</label>
          <input name="full_name" type="text" class="form-control" id="inputName" placeholder="Your Name"  data-error="Your name is empty" required>
        </div>



        <div class="form-group">
          <label for="inputGender" class="control-label">Select Gender</label>
          
          <select name="gender" class="form-control" required="" id="inputGender" data-error="Select your gender">
		  
                  <option value="">Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female ">Female</option>
                  
                </select>

          <div class="help-block with-errors"></div>
        </div>




        <div class="form-group">
          <label for="inputEmail" class="control-label">Email</label>
          <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email Address" data-error="That email address is invalid" required>
          <div class="help-block with-errors"></div>
        </div>




        <div class="form-group">
          <label for="inputPhone" class="control-label">Mobile Number</label>
          <input name="phone" type="number" data-minlength="11" class="form-control" id="inputPhone" placeholder="Mobile Number" data-error="Mobile number is empty" required>
          <div class="help-block with-errors"></div>
        </div>







            <div class="form-group">
          <label for="inputSkill" class="control-label">Select Skill Category</label>
          
			<select name="skill_category" class="form-control" required="" id="inputSkill" data-error="Select your skill category">
			<option value="">Skill Category</option>
			<?php
			$job_cat = mysqli_query($con,"SELECT * FROM job_categories");
			while ($job_cat_view = mysqli_fetch_assoc($job_cat)) {
			?>
			<option value="<?php echo $job_cat_view['id'];?>"><?php echo $job_cat_view['cate_name'];?></option>
			<?php } ?>
			</select>

          <div class="help-block with-errors"></div>
        </div>






 

   		<div class="form-group">
          <label for="inputCountry" class="control-label">Your Country</label>
       
			  
			<select name="country" class="form-control" required="" id="country" data-error="Select your Country">
			<option value="">Select Country</option>
			<?php
			$all_country1 = mysqli_query($con,"SELECT * FROM all_country");
			while ($all_country = mysqli_fetch_assoc($all_country1)) {
			?>
			<option value="<?php echo $all_country['country_name'];?>"><?php echo $all_country['country_name'];?></option>
			<?php } ?>
			</select>
		  
          <div class="help-block with-errors"></div>
        </div>




        <div class="form-group">
          <label for="inputPassword" class="control-label">Password</label>
          <div class="form-inline row">
            <div class="form-group col-sm-6">
              <input name="password" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
              <div class="help-block">Minimum of 6 characters</div>
            </div>
            <div class="form-group col-sm-6">
              <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        </div>
        
        


        <div class="form-group">
         <input name="register" class="btn btn-primary" value="Register Now" type="submit">

          <!--  <button name="register" type="submit" class="btn btn-primary">Submit</button> -->
        </div>
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





<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>
<script type="text/javascript" src="js/bootstrap_validator.min.js"></script>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
</body>
</html>