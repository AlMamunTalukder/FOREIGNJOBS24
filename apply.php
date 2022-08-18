<?php
include("fj-admin/config/confg.php");

$back = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
<?php include 'header-menu.php';?>

<?php 
	 if ($user_id !='' and $user_result == 1) {
	 
	 $job_id = $_REQUEST["job_id"];
	 
	$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE id = '$job_id' ");
			$job_listing_data = mysqli_fetch_array($user_resume);
			
				$id = $job_listing_data["id"];
				$job_title = $job_listing_data["job_title"];
				$user_id = $job_listing_data["user_id"];
				
				$user_resume1 = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$user_id'");
				$recurator_info = mysqli_fetch_array($user_resume1);
				
				$company_name = $recurator_info["company_name"];
				$com_logo = $recurator_info["com_logo"];
				
	 $user_id=$_SESSION['user_id'];
	 
	 $job_seeker_resume = mysqli_query($con, "SELECT * FROM job_seeker_resume WHERE user_id = '$user_id' ");
	 $get_cv = mysqli_num_rows($job_seeker_resume);
	 if($get_cv != 0){
?>




<div class="inner-heading">
  <div class="container">
    <h3>Apply Job</h3>
  </div>
</div>



<div class="inner-content loginWrp">
  <div class="container"> 
  
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="login">
          <div class="contctxt"><?php echo $job_title; ?> </div>
          <div class="formint conForm">
             <form method="POST" action="apply_ac.php" enctype="multipart/form-data">
			
			 <input name="job_id"  type="hidden" value="<?php echo $job_id; ?>" required>
			  <input name="user_id" type="hidden" value="<?php echo $user_id; ?>" required>
			   <input name="job_title" type="hidden" value="<?php echo $job_title; ?>" required>
			
              <div class="sub-btn">
                <input class="sbutn" name="login" value="Confirm Apply" type="submit">
              </div>
			  
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    
   
</div>
</div>

<?php } else { ?>

<script>
location.replace("add_resume.php");
</script>


<?php } ?>


<?php } else { ?>



<div class="inner-heading">
  <div class="container">
    <h3>Login</h3>
  </div>
</div>



<div class="inner-content loginWrp">
  <div class="container"> 
  
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="login">
          <div class="contctxt">Login for Post A Job</div>
          <div class="formint conForm">
            <form method="POST" action="login_action_job_apply.php?back=<?php echo $back; ?>" enctype="multipart/form-data">
			
			<span class="help-block with-errors" style="color:#FF0000; text-align:center;" >
									<?php	
										
										$error_view = $_REQUEST["error_view"];
										if(!empty($error_view)){
											echo $error_view;
										}
									?>
									</span>
			
              <div class="input-wrap">
                <label class="input-group-addon">Email</label>
                <input name="username" placeholder="Your Register Email" class="form-control" type="email" required>
              </div>
              <div class="input-wrap">
                <label class="input-group-addon">Password <span><a href="#">Forgot Password?</a></span></label>
                <input name="password" placeholder="Password" class="form-control" type="password" required>
              </div>
              <div class="sub-btn">
                <input class="sbutn" name="login" value="Login" type="submit">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="register.php">Register Here</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    
   
</div>
</div>

<?php } ?>





<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>
</body>
</html>