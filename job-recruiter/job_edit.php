<?php
include("../fj-admin/config/confg.php");
include("../session_check.php");

$user_id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../head.php';?>

<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
			             selector: "textarea",
			             menubar: false,
			             statusbar: false,
			             plugins: [
				             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
				             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				             "save table contextmenu directionality emoticons template paste textcolor table code"
			             ],
			             content_css: "css/content.css",
			             toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image | preview media fullpage | forecolor backcolor emoticons | inserttable | code table",
			             style_formats: [
				             {title: 'Bold text', inline: 'b'},
				             {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
				             {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
				             {title: 'Example 1', inline: 'span', classes: 'example1'},
				             {title: 'Example 2', inline: 'span', classes: 'example2'},
				             {title: 'Table styles'},
				             {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
			             ]
		             });
	</script>
	
	<link rel="stylesheet" href="datepicker/datepickercss2.css"/>
	
	<?php
			$job_id = $_REQUEST["job_id"];
			$user_resume = mysqli_query($con, "SELECT * FROM job_listing WHERE id = '$job_id' ");
			$job_listing_data = mysqli_fetch_array($user_resume);
			
				$id = $job_listing_data["id"];
				$job_title = $job_listing_data["job_title"];
				$status = $job_listing_data["status"];
				
				$post_date = $job_listing_data["post_date"];
		?>
	
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
    <div class="panel-heading panel-heading-01"><i class="fa fa-th-list" aria-hidden="true"></i> Job Edit </div>

    <div class="ucon-panel-body">

      <div class="panel-body">
	  
			<form method="post" action="edit_job_ac.php" enctype="multipart/form-data">
			
			<input name="job_id" type="hidden" value="<?php echo $job_id; ?>" required>
			
			<span class="help-block with-errors" style="color: #006600; text-align:center;" >
						<?php	
							
							$succ = $_REQUEST["succ"];
							if(!empty($succ)){
								echo $succ;
							}
						?>
					</span>
				
			
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Title :</label>
				<input name="job_title" placeholder="Job Title" class="form-control" type="text" value="<?php echo $job_listing_data["job_title"]; ?>" required>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Description :</label>
				<textarea name="job_description" class="form-control" placeholder="Job Description" ><?php echo $job_listing_data["job_description"]; ?></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
					<label class="control-label" style="padding:10px; font-size:16px;">Salary :</label>
				</div>
				
			
				<?php $salary = $job_listing_data["salary"]; ?>
											
						<label class="custom-control custom-checkbox col-md-6">
						
							<input class="custom-control-input" type="radio" id="chkPassport" <?php if($salary == ""){ ?> checked="checked" <?php } ?> onClick="ShowHideDiv1(this)" name="salary" value="Negotiable"  >
							
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description"> 
								<span class="terms" style="font-size:16px; color:#333333;"> Negotiable
									</span>
								</span>
							</label>
			
						
						<label class="custom-control custom-checkbox col-md-6">
						
							<input class="custom-control-input" type="radio" id="chkPassport" <?php if($salary != ""){ ?> checked="checked" <?php } ?> onClick="ShowHideDiv(this)" name="salary" >
							
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description"> 
							<span class="terms" style="font-size:16px; color:#333333;"> Salary Amount
							</span>
							</span>
						</label>
								
										
					
						
								 <div id="dvPassport" <?php if($salary != ""){ ?> style="visibility:visible;"  <?php } else { ?> style="visibility: hidden;" <?php } ?> >
									 <div class="input-wrap col-md-12">
										<input type="number" class="form-control" name="salary" id="refieldother" placeholder="Enter Salary Per Month Example : 25000 " 
										value="<?php echo $salary = $job_listing_data["salary"]; ?>" >
									</div>
								</div>		
				
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Category :</label>
				<select name="job_category" class="form-control" required="">
				  <option value="<?php echo $job_category = $job_listing_data["job_category"]; ?>"><?php echo $job_category = $job_listing_data["job_category"]; ?></option>
				  <option value="">-------------</option>
				  <?php
				  $job_cat = mysqli_query($con,"SELECT * FROM job_categories");
				  while ($job_cat_view = mysqli_fetch_assoc($job_cat)) {
				  ?>
				  <option value="<?php echo $job_cat_view['cate_name'];?>"><?php echo $job_cat_view['cate_name'];?></option>
				  <?php } ?>
				</select>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Type :</label>
				<select name="job_type" class="form-control" required="">
				 <option value="<?php echo $job_type = $job_listing_data["job_type"]; ?>"><?php echo $job_type = $job_listing_data["job_type"]; ?></option>
				  <option value="">-------------</option>
				  <option value="Full Time">Full Time</option>
				  <option value="Part Time">Part Time</option>
				  
				</select>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Vacancy :</label>
				<input name="no_of_vacancy" placeholder="Number of Vacancy " class="form-control" type="text" value="<?php echo $no_of_vacancy = $job_listing_data["no_of_vacancy"]; ?>" required>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Educational Requirements :</label>
				<textarea name="edu_requirments" class="form-control" placeholder="Job Description" ><?php echo $edu_requirments = $job_listing_data["edu_requirments"]; ?></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Experience Requirements :</label>
				<textarea name="experiences_req" class="form-control" placeholder="Job Description"><?php echo $experiences_req = $job_listing_data["experiences_req"]; ?></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Requirements :</label>
				<textarea name="job_requirements" class="form-control" placeholder="Job Description"><?php echo $job_requirements = $job_listing_data["job_requirements"]; ?></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Other Benefits :</label>
				<textarea name="other_benefits" class="form-control" placeholder="Job Description"><?php echo $other_benefits = $job_listing_data["other_benefits"]; ?></textarea>
				</div>
				
				
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Location :</label>
				<input name="job_location" placeholder="Job Location Example : Dhaka" class="form-control" type="text" value="<?php echo $job_location = $job_listing_data["job_location"]; ?>" required>
				</div>
				
				<div class="input-wrap col-md-12">
				 <label class="control-label" style="padding:10px; font-size:16px;">Job Country :</label>
                <select name="country" class="form-control" required="">
				  <option value="<?php echo $country = $job_listing_data["country"]; ?>"><?php echo $country = $job_listing_data["country"]; ?></option>
				  <option value="">-------------</option>
				  <?php
				  $coun = mysqli_query($con,"SELECT * FROM all_country");
				  while ($all_country = mysqli_fetch_assoc($coun)) {
				  ?>
				  <option value="<?php echo $all_country['country_name'];?>"><?php echo $all_country['country_name'];?></option>
				  <?php } ?>
				</select>
              </div>
			  
			  <div class="input-wrap col-md-12">
			  <label class="control-label" style="padding:10px; font-size:16px;">Job Deadline :</label>
				<input name="job_deadline" placeholder="Job Deadline" id="datePicker" class="form-control" type="text" value="<?php echo $job_deadline = $job_listing_data["job_deadline"]; ?>" required>				
			</div>
				
				
				<div class="input-wrap col-md-12">
				
				<button name="personal_details" type="submit" class="btn btn-default btn-block btn-lg" href="#">
				Update Job
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

<script src="datepicker/datepickerjs.js"></script>

<script>
	
	$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'yyyy-mm-dd'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });

});

</script>

<script type="text/javascript">

	function ShowHideDiv(chkPassport) {
		var dvPassport = document.getElementById("dvPassport");
		dvPassport.style.visibility = chkPassport.checked ? "visible" : "hidden";
		
		if(chkPassport.checked){
			$("#refieldother").prop('required',true);
		}	
		
	}
	
	function ShowHideDiv1(chkPassport) {
		var dvPassport = document.getElementById("dvPassport");
		dvPassport.style.visibility = chkPassport.checked ? "hidden" : "visible";
	

	}
	


	
	
</script>
