<?php
include("../fj-admin/config/confg.php");
include("../session_check.php");

$user_id = $_SESSION['user_id'];

$user_resume = mysqli_query($con, "SELECT * FROM recurator_verification WHERE user_id = '$user_id' ");
$recurator_verification = mysqli_num_rows($user_resume);
$rec_ver_data = mysqli_fetch_array($user_resume);

$status = $rec_ver_data["status"];

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
    <div class="panel-heading panel-heading-01"><i class="fa fa-check-circle" aria-hidden="true"></i>  Profile Verification </div>

    <div class="ucon-panel-body">

      <div class="panel-body">
	  
	  <?php if($recurator_verification == 0){ ?>
			<form method="post" action="profile_verificaiton_ac.php" enctype="multipart/form-data">
			
				<div class="input-wrap col-md-12">
				
					<label class="control-label">Your Recent Color Photo :</label>
					<br/>
					<label class="btn btn-default btn-file">
						Recent Color Photo Upload <input type="file" name="rec_pho" required>
					</label>
					
				</div>
				
				<div class="input-wrap col-md-12">
				
					<label class="control-label"> Trade Licence / National ID Card /Passport / Driving Licence Front Part :</label>
					<br/>
					<label class="btn btn-default btn-file">
						Front Part Upload <input type="file" name="f_part" required>
					</label>
				</div>
				
				<div class="input-wrap col-md-12">
				
					<label class="control-label"> Trade Licence / National ID Card /Passport / Driving Licence Back Part :</label>
					<br/>
					<label class="btn btn-default btn-file">
						Back Part Upload <input type="file" name="b_part" required>
					</label>
					
				</div>
				
				<div class="input-wrap col-md-12">
				
					<label class="control-label"> E-Tin ( Optional Field) :</label>
					<br/>
					<label class="btn btn-default btn-file">
						 Upload <input type="file" name="etin" >
					</label>
					
				</div>
				
				
				<div class="input-wrap col-md-12">
				
					<label class="control-label"> Certificate of Incorporation (For Limited Company - Optional Field) :</label>
					<br/>
					<label class="btn btn-default btn-file">
						 Upload <input type="file" name="c_i" >
					</label>
					
				</div>
				
				<div class="input-wrap col-md-12">
				
					<label class="control-label"> Articles of Association (For Limited Company - Optional Field) :</label>
					<br/>
					<label class="btn btn-default btn-file">
						 Upload <input type="file" name="a_a" >
					</label>
					
				</div>
				
				<div class="input-wrap col-md-12">
				
					<label class="control-label"> Memorandum of Association (For Limited Company - Optional Field) :</label>
					<br/>
					<label class="btn btn-default btn-file">
						Upload <input type="file" name="m_a" >
					</label>
					
				</div>
				
			
				<div class="input-wrap col-md-12">
				
				<button name="personal_details" type="submit" class="btn btn-default btn-block btn-lg" href="#">
					Get Verified
				</button>
				
				</div>
			
			</form>
			
			<?php } else { ?>
			
			<?php if($status == 1){ ?>
			
				<h2 align="center">Your Profile Successfully Verified by Admin.</h2>
				
			<?php } else { ?>
			
				<h2 align="center">We received your Profile Verification Documents.wait untill your documents approved by admin.</h2>
				
			<?php } } ?>
			
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
