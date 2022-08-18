<?php
include("../fj-admin/config/confg.php");
include("../session_check.php");

$user_id = $_SESSION['user_id'];

$user_resume = mysqli_query($con, "SELECT * FROM recurator_info WHERE user_id = '$user_id' ");
$user_resume_view = mysqli_fetch_array($user_resume);

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
    <div class="panel-heading panel-heading-01"><i class="fa fa-pencil-square-o"></i> Profile Update </div>

    <div class="ucon-panel-body">

      <div class="panel-body">
	  
			<form method="post" action="update_profile_ac.php" enctype="multipart/form-data">
			
				<div class="input-wrap col-md-12">
					<div class="form-group">
						<label class="col-sm-4 control-label">Company Logo Uploade :</label>
					<div class="fileinput fileinput-new" data-provides="fileinput">
					
						  <div class="fileinput-new thumbnail" style="width: 200px; height: auto;" data-trigger="fileinput">
						   
						     <img src="com-logo/<?php echo $user_resume_view['com_logo']; ?>" alt="Image Not Found">
							 
						  </div>
						  
						  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
						  <div>
						   <span class="btn btn-white btn-file">
						  <span class="fileinput-new">Upload Logo</span>
						  <span class="fileinput-exists">Change</span>
						  
						  <input name="image_file" type="file" class="uploader" id="image_file" multiple="multiple">
						   </span>
						   <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
						  </div>
						 </div>
					</div>
				</div>
				
				<div class="input-wrap col-md-12">
					<div class="form-group">
						<label class="col-sm-4 control-label">Company Cover Uploade :</label>
					<div class="fileinput fileinput-new" data-provides="fileinput">
					
						  <div class="fileinput-new thumbnail" style="width: 200px; height: auto;" data-trigger="fileinput">
						   
						     <img src="com-cover/<?php echo $user_resume_view['c_cover']; ?>" alt="Image Not Found">
							 
						  </div>
						  
						  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
						  <div>
						   <span class="btn btn-white btn-file">
						  <span class="fileinput-new">Upload Logo</span>
						  <span class="fileinput-exists">Change</span>
						  
						  <input name="c_cover" type="file" class="uploader" id="c_cover">
						   </span>
						   <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
						  </div>
						 </div>
					</div>
				</div>
			
				<div class="input-wrap col-md-12">
				<input name="full_name" placeholder="Full Name" class="form-control" type="text" value="<?php echo $user_resume_view['full_name'];?>" required>
				</div>
				
				<div class="input-wrap col-md-12">
				<input name="company_name" placeholder="Company Name" class="form-control" type="text" value="<?php echo $user_resume_view['company_name'];?>" required>
				</div>
				
					<div class="input-wrap col-md-12">
				<select name="c_type" class="form-control" required="">
				  <option value="<?php echo $user_resume_view['c_type'];?>"><?php echo $user_resume_view['c_type'];?></option>
				   <option value=""> --- Select --- </option>
				  <?php
				  $company_typer = mysqli_query($con,"SELECT * FROM company_type");
				  while ($company_type = mysqli_fetch_assoc($company_typer)) {
				  ?>
				  <option value="<?php echo $company_type['com_type'];?>"><?php echo $company_type['com_type'];?></option>
				  <?php } ?>
				</select>
				</div>
				
				
				
				
				<div class="input-wrap col-md-12">
				
				<select name="company_category" class="form-control" required="">
				  <option value="<?php echo $user_resume_view['company_category'];?>"><?php echo $user_resume_view['company_category'];?></option>
				  <option value=""> --- Select --- </option>
				  <?php
				  $job_cat = mysqli_query($con,"SELECT * FROM job_categories");
				  while ($job_cat_view = mysqli_fetch_assoc($job_cat)) {
				  ?>
				  <option value="<?php echo $job_cat_view['cate_name'];?>"><?php echo $job_cat_view['cate_name'];?></option>
				  <?php } ?>
				</select>
				
				</div>
				
				
				
				<div class="input-wrap col-md-12">
				<input name="email" placeholder="Email" class="form-control" type="email" value="<?php echo $user_resume_view['email'];?>" >
				</div>
				
				<div class="input-wrap col-md-12">
				<input name="phone" placeholder="Phone " class="form-control" type="text" value="<?php echo $user_resume_view['phone'];?>" required>
				</div>
				
				<div class="input-wrap col-md-12">
				<textarea name="com_desc" class="form-control" placeholder="Your Company Description" required><?php echo $user_resume_view['com_desc'];?></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
				<input name="designation" placeholder="Your Designation" class="form-control" type="text" value="<?php echo $user_resume_view['designation'];?>" required>
				</div>
				
				<div class="input-wrap col-md-12">
				<textarea name="address" class="form-control" placeholder="Address" required><?php echo $user_resume_view['address'];?></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
				<input name="city" placeholder="City" class="form-control" type="text" value="<?php echo $user_resume_view['city'];?>" required>
				</div>
				
				<div class="input-wrap col-md-12">
				<input name="zip" placeholder="Zip" class="form-control" type="text" value="<?php echo $user_resume_view['zip'];?>" required>
				</div>
				
				<div class="input-wrap col-md-12">
				<input name="country" placeholder="Website URL " class="form-control" type="url" value="<?php echo $user_resume_view['country'];?>" readonly="readonly">
				</div>
				
				<div class="input-wrap col-md-12">
				<input name="web_url" placeholder="Website URL " class="form-control" type="url" value="<?php echo $user_resume_view['web_url'];?>" required>
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
  <!-- Imported scripts on this page -->
  <script src="../js/fileinput.js"></script>

