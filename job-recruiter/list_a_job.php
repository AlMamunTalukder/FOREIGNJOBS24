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
    <div class="panel-heading panel-heading-01"><i class="fa fa-th-list" aria-hidden="true"></i> List A Job </div>

    <div class="ucon-panel-body">

      <div class="panel-body">
	  
			<form method="post" action="list_a_job_ac.php" enctype="multipart/form-data">
			
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
				<input name="job_title" placeholder="Job Title" class="form-control" type="text" required>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Description :</label>
				<textarea name="job_description" class="form-control" placeholder="Job Description" ></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
					<label class="control-label" style="padding:10px; font-size:16px;">Salary :</label>
				</div>
				
			
				
											
						<label class="custom-control custom-checkbox col-md-6">
						
							<input class="custom-control-input" type="radio" id="chkPassport" onClick="ShowHideDiv1(this)" name="salary" value="Negotiable"  >
							
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description"> 
								<span class="terms" style="font-size:16px; color:#333333;"> Negotiable
									</span>
								</span>
							</label>
			
						
						<label class="custom-control custom-checkbox col-md-6">
						
							<input class="custom-control-input" type="radio" id="chkPassport" onClick="ShowHideDiv(this)" name="salary" >
							
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description"> 
							<span class="terms" style="font-size:16px; color:#333333;"> Salary Amount
							</span>
							</span>
						</label>
								
										
					
						
								 <div id="dvPassport" style="visibility:hidden;">
									 <div class="input-wrap col-md-12">
										<input type="number" class="form-control" name="salary" id="refieldother" placeholder="Enter Salary Per Month Example : 25000 " >
									</div>
								</div>		
				
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Category :</label>
				<select name="job_category" class="form-control" required="">
				  <option value="">Select Job Category</option>
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
				  <option value="">Select Job Type</option>
				
				  <option value="Full Time">Full Time</option>
				  <option value="Part Time">Part Time</option>

				  <option value="Permanent">Permanent </option>
				  <option value="Temporary">Temporary </option>
				  <option value="Contractual">Contractual </option>
				  <option value="Internship">Internship </option>
				  <option value="Optional">Optional </option>
				  
				</select>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Vacancy :</label>
				<input name="no_of_vacancy" placeholder="Number of Vacancy " class="form-control" type="text"  required>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Educational Requirements :</label>
				<textarea name="edu_requirments" class="form-control" placeholder="Job Description" ></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Experience Requirements :</label>
				<textarea name="experiences_req" class="form-control" placeholder="Job Description"></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Requirements :</label>
				<textarea name="job_requirements" class="form-control" placeholder="Job Description"></textarea>
				</div>
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Other Benefits :</label>
				<textarea name="other_benefits" class="form-control" placeholder="Job Description"></textarea>
				</div>
				
				
				
				<div class="input-wrap col-md-12">
				<label class="control-label" style="padding:10px; font-size:16px;">Job Location :</label>
				<input name="job_location" placeholder="Job Location Example : Dhaka" class="form-control" type="text" required>
				</div>
				
				<div class="input-wrap col-md-12">
				 <label class="control-label" style="padding:10px; font-size:16px;">Job Country :</label>
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
			  
			  <div class="input-wrap col-md-12">
			  <label class="control-label" style="padding:10px; font-size:16px;">Job Deadline :</label>
				<input name="job_deadline" placeholder="Job Deadline" id="datePicker" class="form-control" type="text" required>				
			</div>
				
				
				<div class="input-wrap col-md-12">
				
				<button name="personal_details" type="submit" class="btn btn-default btn-block btn-lg" href="#">
				 Post Job
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
