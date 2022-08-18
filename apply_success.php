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
		
	 $job_title = $_REQUEST['job_title'];
	
	 $user_id = $_SESSION['user_id'];
	 
	 $job_seeker_resume = mysqli_query($con, "SELECT * FROM job_seeker_info WHERE user_id = '$user_id' ");
	 $get_cv = mysqli_fetch_array($job_seeker_resume);
	 
	 $full_name = $get_cv["full_name"];
	 
?>




<div class="inner-heading">
  <div class="container">
    <h3>Job Apply Success </h3>
  </div>
</div>



<div class="inner-content loginWrp">
  <div class="container"> 
  
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="login">
          <div class="contctxt"><?php echo $full_name; ?> <br/> You have successfully Applied for the post of  </div>
          <div class="formint conForm">
            
			
              <div class="sub-btn">
                <input class="sbutn" name="login" value="<?php echo $job_title; ?>" type="button">
              </div>
			  
           
          </div>
		  
		   <div class="contctxt" style="padding:5px;">Thanks</div>
		   
        </div>
      </div>
      <div class="col-md-3"></div>
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