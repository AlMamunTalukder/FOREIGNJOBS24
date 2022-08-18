<?php
include("../fj-admin/config/confg.php");
include("../session_check.php");

$user_id = $_SESSION['user_id'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../head.php';?>
</head>
<body>
<?php include '../header-menu.php';?>




<div class="inner-content loginWrp">
  <div class="container">
    <div class="row">
      
      <?php include("job_rec_menus.php"); ?>

<div class="col-md-9"> 
  <!-- Blog List start -->
  <div class="user-content">
    <div class="panel-heading panel-heading-01"><i class="fa fa-lock" aria-hidden="true"></i> Change Password </div>

    <div class="ucon-panel-body">

      <div class="panel-body">
	  
	 
			<form method="post" action="change_password_ac.php" enctype="multipart/form-data">
			
					<span class="help-block with-errors" style="color:#FF0000; text-align:center;" >
						<?php	
							
							$error_view = $_REQUEST["error_view"];
							if(!empty($error_view)){
								echo $error_view;
							}
						?>
					</span>
					
					<span class="help-block with-errors" style="color: #006600; text-align:center;" >
						<?php	
							
							$succ = $_REQUEST["succ"];
							if(!empty($succ)){
								echo $succ;
							}
						?>
					</span>
									
					<div class="input-wrap col-md-12">
						<input name="c_pass" placeholder="Current Password" class="form-control" type="password" >
					</div>
					
					<div class="input-wrap col-md-12">
						<input name="n_pass" placeholder="New Password" class="form-control" type="password"  >
					</div>
					
					<div class="input-wrap col-md-12">
						<input name="c_n_pass" placeholder="Confirm New Password " class="form-control" type="password"  >
					</div>
				
			
				<div class="input-wrap col-md-12">
				
				<button name="personal_details" type="submit" class="btn btn-default btn-block btn-lg" href="#">
					Update
				</button>
				
				</div>
			
			</form>
		
	  </div>

   	</div>

   </div>
 </div>
   
</div>


    </div>
  </div>
</div>




<?php	
		include '../footer.php';
		include '../footer_script.php';
?>
