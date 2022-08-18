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
    <h3>Forget Password</h3>
  </div>
</div>





<div class="inner-content loginWrp">
  <div class="container"> 
  
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="login">
          <div class="contctxt">Forget Password</div>
          <div class="formint conForm">
            <form method="POST" action="forget_pass_action.php" enctype="multipart/form-data">
			
			<span class="help-block with-errors" style="color:#FF0000; text-align:center;" >
									<?php	
										
										$error_view = $_REQUEST["error_view"];
										if(!empty($error_view)){
											echo $error_view;
										}
									?>
									</span>
          <h4 style="color: #154462">
          <?php
          echo $success = $_REQUEST["success"];
          ?>
          </h4>
			
              <div class="input-wrap">
                <label class="input-group-addon">Email</label>
                <input name="username" placeholder="Your Register Email" class="form-control" type="email" required>
              </div>
             
              <div class="sub-btn">
                <input class="sbutn" name="login" value="Recover" type="submit">
              </div>
              
            </form>
          </div>
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