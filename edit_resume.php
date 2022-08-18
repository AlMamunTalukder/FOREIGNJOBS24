<?php
include("fj-admin/config/confg.php");
include("session_check.php");
$user_id=$_SESSION['user_id'];

$user_resume = "SELECT * FROM job_seeker_resume WHERE user_id = '$user_id' ";
$user_resume_data = $con->query($user_resume);


$user_edu_info = "SELECT * FROM job_seeker_education WHERE user_id = '$user_id' ";
$user_edu_info_result = $con->query($user_edu_info);

$profess_info = "SELECT * FROM job_seeker_profess_info WHERE user_id = '$user_id' ";
$profess_info_result = $con->query($profess_info);



?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>

<link rel="stylesheet" href="css/neon-forms.css">

</head>
<body>
<?php include 'header-menu.php';?>




<div class="inner-content loginWrp">
  <div class="container">
    <div class="row">
      <?php include("user-sidebar-menu.php"); ?>
      


<div class="col-md-9"> 
  <!-- Blog List start -->
  <div class="user-content">
    <div class="panel-heading panel-heading-01"><i class="fa fa-pencil-square-o"></i> Edit Resume</div>

    <div class="ucon-panel-body">

     


     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           Personal Details 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">

<?php if($user_resume_view = $user_resume_data->fetch_assoc()){?>

<div class="input-wrap col-md-6">
         <label>Your Father's Name</label>
                <input name="fathers_ame" placeholder="Your Father's Name" class="form-control" type="text" value="<?php echo $user_resume_view['fathers_ame'];?>">
              </div>

              <div class="input-wrap col-md-6">
        <label>Your Mother's Name</label>
                <input name="mother_name" placeholder="Your Mother's Name" class="form-control" type="text" value="<?php echo $user_resume_view['mother_name'];?>">
              </div>


              <div class="input-wrap col-md-6">
         <label>Date of Birth</label>
                <input name="birth_date" placeholder="Date of Birth" class="form-control" type="Date" value="<?php echo $user_resume_view['birth_date'];?>">
              </div>


              <div class="input-wrap col-md-6">
         <label>Religion</label>
                <input name="religion" placeholder="Religion" class="form-control" type="text" value="<?php echo $user_resume_view['religion'];?>">
              </div>


               <div class="input-wrap col-md-6">
        <label>Marital Status</label>
                <input name="marital_status" placeholder="Marital Status" class="form-control" type="text" value="<?php echo $user_resume_view['marital_status'];?>">
              </div>

              <div class="input-wrap col-md-6">
         <label>Nationality</label>
                <input name="nationality" placeholder="Nationality" class="form-control" type="text" value="<?php echo $user_resume_view['nationality'];?>">
              </div>

              <div class="input-wrap col-md-6">
         <label>National Id No</label>
                 <input name="nid" id="nid" placeholder="National Id No" class="form-control" type="text" value="<?php echo $user_resume_view['nid'];?>">
            </div>

              <div class="input-wrap col-md-6">
       <label>Present Address</label>
                <textarea name="present_address" class="form-control" placeholder="Present Address"><?php echo $user_resume_view['present_address'];?></textarea>
                
              </div>



              <div class="input-wrap col-md-12">
    <label>Permanent Address</label>
                <textarea name="permanent_address" class="form-control" placeholder="Permanent Address"><?php echo $user_resume_view['permanent_address'];?></textarea>
                
              </div>


              <div class="input-wrap col-md-12">

                 <button name="personal_details" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
             </div>
</div>
<?php } else { ?>

Personal details dosn't added 

<?php } ?>
          </form>
     

     
      </div>
    </div>
  </div>




  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingcarerApp">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsecarerApp" aria-expanded="true" aria-controls="collapsecarerApp">
           Career and Application Information
        </a>
      </h4>
    </div>
    <div id="collapsecarerApp" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingcarerApp">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">



<?php 
      
$CareerApplication_info = "SELECT * FROM job_seeker_carieer_details WHERE user_id = '$user_id' ";
$CareerApplication_info_result = $con->query($CareerApplication_info);


if($CareerApplication_view = $CareerApplication_info_result->fetch_assoc()){?>

<div class="input-wrap col-md-12">
   <label>Career Objective</label>
   <textarea name="career_objective" class="form-control" placeholder="Career Objective">
    <?php echo $CareerApplication_view['career_objective'];?>
      
    </textarea>
</div>

<div class="input-wrap col-md-12">
   <label>Career Summary</label>
   <textarea name="career_summary" class="form-control" placeholder="Career Summary">
    <?php echo $CareerApplication_view['career_summary'];?>
     
   </textarea>
</div>

      <div class="input-wrap col-md-6">
         <label>Present Salary</label>
       <input name="presnt_salary" placeholder="10000" class="form-control" type="number" value="<?php echo $CareerApplication_view['presnt_salary'];?>">
      </div>


      <div class="input-wrap col-md-6">
         <label>Expected Salary</label>
        <input name="expected_salary" placeholder="12000" class="form-control" type="number" value="<?php echo $CareerApplication_view['expected_salary'];?>">
      </div>


      <div class="input-wrap col-md-6">
         <label>Looking for (Job Level)</label>
        <div class="btn-form-control">
         

         <?php 

         $optLevel = $CareerApplication_view['optLevel'];

         if ($optLevel =='Entry'){
         
         ?>
        
        <label class="radio-inline">
        <input type="s" name="optLevel" id="levelRadio" value="Entry" checked="checked"> Entry Level 
         </label>
         
         <?php }else{ ?>
         
        <label class="radio-inline">
         <input type="radio" name="optLevel" id="levelRadio" value="Entry"> Entry Level 
         </label>
         
         <?php }if($optLevel =='Mid') {
         
         ?>

         <label class="radio-inline">
         <input type="radio" name="optLevel" id="levelRadio" value="Mid" checked="checked"> Mid Level
         </label>
      
       <?php }else{ ?>
      
        <label class="radio-inline">
         <input type="radio" name="optLevel" id="levelRadio" value="Mid"> Mid Level
         </label>
      
       <?php } if ($optLevel =='Top') { ?>
      
         <label class="radio-inline">
         <input type="radio" name="optLevel" id="levelRadio" value="Top" checked="checked"> Top Level 
         </label>
      
         <?php } else{ ?>
      
        <label class="radio-inline">
         <input type="radio" name="optLevel" id="levelRadio" value="Top"> Top Level 
         </label>
      
         <?php } ?>
      
      </div>
      </div>


      <div class="input-wrap col-md-6">
         <label>Available for (Job Nature)</label>
       <div class="btn-form-control">

        <?php 

        $optAvail = $CareerApplication_view['optAvail'];

         if ($optAvail =='Full Time'){
         
         ?>

         <label class="radio-inline">
         <input type="radio" name="optAvail" id="avaiRadio" value="Full Time" checked="checked"> Full time
         </label>
        <?php } else { ?>
          <label class="radio-inline">
         <input type="radio" name="optAvail" id="avaiRadio" value="Full Time"> Full time
         </label>

       <?php }if($optAvail =='Part Time') {?>

         <label class="radio-inline">
         <input type="radio" name="optAvail" id="avaiRadio" value="Part Time" checked="checked"> Part time
         </label>
<?php }else{ ?>

         <label class="radio-inline">
         <input type="radio" name="optAvail" id="avaiRadio" value="Part Time"> Part time
         </label>
  <?php } if($optAvail =='Contract') {?>

         <label class="radio-inline">
         <input type="radio" name="optAvail" id="avaiRadio" value="Contract" checked="checked"> Contract
         </label>
  <?php }else{ ?>   
         <label class="radio-inline">
         <input type="radio" name="optAvail" id="avaiRadio" value="Contract" checked="checked"> Contract
         </label>    
<?php } ?>

      </div>
      </div><br>
      <br>


              <div class="input-wrap col-md-12">

                 <button name="career_appli_update" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
             </div>
</div>
<?php } else { ?>

Career and Application Information dosn't added 

<?php } ?>
          </form>
     

     
      </div>
    </div>
 


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingpref">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsepref" aria-expanded="true" aria-controls="collapsepref">
           Preferred Areas
        </a>
      </h4>
    </div>
    <div id="collapsepref" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingpref">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">



<?php 
      
$preferred_areas_info = "SELECT * FROM job_seeker_pref_details WHERE user_id = '$user_id' ";
$preferred_areas_info_result = $con->query($preferred_areas_info);


if($preferred_areas_view = $preferred_areas_info_result->fetch_assoc()){
    
   $job_cate = $preferred_areas_view['job_cate'];

   $cate_sql = "SELECT * FROM job_categories WHERE id = '$job_cate' ";
$cate_sql_result = $con->query($cate_sql);
$cate_result_view = $cate_sql_result->fetch_assoc();


  ?>

<div class="col-md-6 input-wrap">
           
              <label for="">Job Category</label>
        <select  name="job_cate" class="form-control" type="text">
          <option value="<?php echo $cate_result_view['id'];?>"><?php echo $cate_result_view['cate_name'];?></option>
        <?php 
               $query = mysqli_query($con,"select * from job_categories");
                while($tagor =mysqli_fetch_array($query)) {
        ?> 
          <option value="<?php echo $tagor['id'];?>"><?php echo $tagor['cate_name'];?></option>

        <?php } ?>

        </select> 
            </div>

            <div class="col-md-6 input-wrap">
           
              <label for="">Special Skills</label>
              
               <input name="special_skill" id="special_skill" placeholder="Special Skills" class="form-control" type="text" value="<?php echo $preferred_areas_view['special_skill'];?>">
             </div>



      <div class="col-md-6 input-wrap">
           
      <label for="">Inside Bangladesh</label>
      
       <input name="districs" id="districs" placeholder="Add Districs" class="form-control" type="text" value="<?php echo $preferred_areas_view['districs'];?>">
     </div>


      <div class="col-md-6 input-wrap">
   
      <label for="">Outside Bangladesh</label>
      
       <input name="country" id="country" placeholder="Add Country" class="form-control" type="text" value="<?php echo $preferred_areas_view['country'];?>">
     </div>


      <div class="col-md-12 input-wrap">
           
              <label for="">Add your preferred organization type</label>
              
               <input name="orgainization_type" id="orgainization_type" placeholder="Add Organization Type" class="form-control" type="text" value="<?php echo $preferred_areas_view['orgainization_type'];?>">
             </div>


              <div class="input-wrap col-md-12">

                 <button name="pref_aras_update" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
             </div>
</div>
<?php } else { ?>

Preferred Areas dosn't added 

<?php } ?>
          </form>
     

     
      </div>
    </div>
  

<?php 
      
$ort_info = mysqli_query($con,"SELECT * FROM job_seeker_other_relatiive_info WHERE user_id = '$user_id' ");
$ort_info_result = mysqli_num_rows($ort_info);

if($ort_info_result !='0'){
    
   
  ?>


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingorti">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseorti" aria-expanded="true" aria-controls="collapseorti">
           Other Relevant Information
        </a>
      </h4>
    </div>
    <div id="collapseorti" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingorti">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">

<?php 
while($ort_info_view = mysqli_fetch_array($ort_info)){

?>

      <div class="input-wrap col-md-12">
        <label>Career Summary</label>
       <textarea name="orthinfo_career_summary" class="form-control" placeholder="Career Summary"><?php echo $ort_info_view['orthinfo_career_summary'];?></textarea>
    </div>

    <div class="input-wrap col-md-12">
      <label>Special Qualification</label>
        <textarea name="orthinfo_specific_summary" class="form-control" placeholder="Special Qualification"><?php echo $ort_info_view['orthinfo_specific_summary'];?></textarea>
    </div>



      <div class="input-wrap col-md-12">
         <label>Keywords</label>
        <input name="ortinfo_key" placeholder="Keywords" class="form-control" type="text" value="<?php echo $ort_info_view['ortinfo_key'];?>">
      </div>

<?php } ?>

          <div class="input-wrap col-md-12">

            <button name="otri_update" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
          </div>
</div>
<?php } else { ?>

Other Relevant Information dosn't added 

<?php } ?>
          </form>
     

     
      </div>
    </div>


  <?php if ($user_edu_info_result->num_rows > 0) { // if ($user_edu == ' ') {?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Academic Summary 
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

      

            <div class="controls"> 
  <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php" >
     
    <?php 
$serial = 1; 
while($user_edu_data = $user_edu_info_result->fetch_assoc()) {
 $s_num = $serial++;
$table_name = 'job_seeker_education';
?>  

 <div class="input-wrap col-md-12">
<label><?php echo 'Academic-' . $s_num;?>
  <span><a href="javascript:;" onClick="delete_function_con('<?php echo $user_edu_data['id']; ?>','<?php echo $table_name; ?>');" 
  class=""> 
    <i class="fa fa-trash-o"></i> Delete 
  </a></span>
</label>
</div>


<input type="hidden" name="id[]" value="<?php echo $user_edu_data['id'];?>" />


   <div class="entry">
                
<div class="col-md-6 input-wrap">
        <label>Level of Education</label>
         <select name="education_level[]" class="form-control" required="">
          <option value="<?php echo $user_edu_data['education_level'];?>"><?php echo $user_edu_data['education_level'];?></option>
          <option value="PSC/5 pass">PSC/5 pass</option>
          <option value="JSC/JDC/8 pass">JSC/JDC/8 pass</option>
          <option value="Secondary(SSC)">Secondary(SSC)</option>
          <option value="Higher Secondary(HSC)">Higher Secondary(HSC)</option>
          <option value="Diploma">Diploma</option>
          <option value="Bachelor/Honors">Bachelor/Honors</option>
          <option value="Masters">Masters</option>
          <option value="PhD">PhD (Doctor of Philosophy)</option>
        </select>
      </div>


    <div class="input-wrap col-md-6">
        <label>GPA/CGPA/Division</label>
         <input name="cgpa[]" placeholder="GPA/CGPA/Division" class="form-control" type="text" value="<?php echo $user_edu_data['cgpa'];?>">
      </div>




      <div class="col-md-6 input-wrap">
         <label>Year of Passing</label>
         <select name="passing_year[]" class="form-control" required="">
         <option value="<?php echo $user_edu_data['passing_year'];?>"><?php echo $user_edu_data['passing_year'];?></option>
            <?php 
           for($i = 1990 ; $i < date('Y'); $i++){
          echo "<option value='$i'>$i</option>";
           }
            ?>
          </select>
      </div>



      <div class="input-wrap col-md-6">
         <label>Concentration/Major/Group</label>
         <input name="major_group[]" placeholder="Concentration/ Major/Group" class="form-control" type="text" value="<?php echo $user_edu_data['major_group'];?>">
      </div>


      <div class="input-wrap col-md-6">
         <label>Duration (Years)</label>
         <input name="duration_years[]" placeholder="Duration (Years)" class="form-control" type="text" value="<?php echo $user_edu_data['duration_years'];?>">
      </div>


      <div class="input-wrap col-md-6">
        <label>Institute Name</label>
         <input name="institute_name[]" placeholder="Institute Name" class="form-control" type="text" value="<?php echo $user_edu_data['institute_name'];?>">
      </div><br>

<!--         <span class="input-group-btn">
              <button class="btn btn-success btn-add" type="button">
                <span class="fa fa-plus-circle"> Add Education (If Required)</span>
              </button>
          </span>
 -->

</div>



 <?php } ?>
<div class="input-wrap col-md-12">
<button name="academic_details_Update" type="submit" class="btn btn-default btn-block" href="#">
Update
</button>
</div>
</form>


   </div>
 </div>
</div>
 <?php } ?>
  </div>


<?php 
   
$training_info = mysqli_query($con,"SELECT * FROM job_seeker_training WHERE user_id = '$user_id' ");
$training_info_result = mysqli_num_rows($training_info);

if($training_info_result !='0'){
    
   
  ?>

 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtrain">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetrain" aria-expanded="true" aria-controls="collapsetrain">
           Training Summary
        </a>
      </h4>
    </div>
    <div id="collapsetrain" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingtrain">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">

<?php 
$serial = 1; 
while($training_info_view = mysqli_fetch_array($training_info)){
$s_num = $serial++;

  $table_name = 'job_seeker_training';
?>

<div class="input-wrap col-md-12">
<label><?php echo 'Training-' . $s_num;?>
  <span><a href="javascript:;" onClick="delete_function_con('<?php echo $training_info_view['id']; ?>','<?php echo $table_name; ?>');" 
  class=""> 
    <i class="fa fa-trash-o"></i> Delete 
  </a></span>
</label>
</div>

  <div class="col-md-6 input-wrap">
   <label>Training Title</label>
<input name="train_title[]" placeholder="Training Title" class="form-control" type="text" value="<?php echo $training_info_view['train_title'];?>">

</div>

    <div class="input-wrap col-md-6">
       <label>Country</label>
        <input name="train_cont[]" placeholder="Country" class="form-control" type="text" value="<?php echo $training_info_view['train_cont'];?>">
      </div>


      <div class="input-wrap col-md-6">
       <label>Topics Covered</label>
        <input name="train_coverd[]" placeholder="Topics Covered" class="form-control" type="text" value="<?php echo $training_info_view['train_coverd'];?>">
      </div>

      <div class="col-md-6 input-wrap">
         <label>Training Year</label>
        <select name="train_year[]" class="form-control" required="">
         <option value="<?php echo $training_info_view['train_year'];?>"><?php echo $training_info_view['train_year'];?> </option>
            <?php 
           for($i = 1990 ; $i < date('Y'); $i++){
          echo "<option value='$i'>$i</option>";
           }
            ?>
          </select>
      </div>

      <div class="input-wrap col-md-6">
       <label>Institute</label>
        <input name="trarin_insti[]" placeholder="Institute" class="form-control" type="text" value="<?php echo $training_info_view['trarin_insti'];?>">
      </div>

      <div class="input-wrap col-md-6">
       <label>Duration</label>
        <input name="train_duration[]" placeholder="Duration" class="form-control" type="text" value="<?php echo $training_info_view['train_duration'];?>">
      </div>

      <div class="input-wrap col-md-12">
       <label>Location</label>
        <input name="train_location[]" placeholder="Location" class="form-control" type="text" value="<?php echo $training_info_view['train_location'];?>">
      </div>

<?php } ?>

          <div class="input-wrap col-md-12">

            <button name="taining_summery_update" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
          </div>
</div>
<?php } else { ?>

Training Summary dosn't added 

<?php } ?>
          </form>
     

     
      </div>
    </div>
  



<?php 
      
$emp_histo_info = mysqli_query($con,"SELECT * FROM job_seeker_emp_histo WHERE user_id = '$user_id' ");
$emp_histo_info_result = mysqli_num_rows($emp_histo_info);

if($emp_histo_info_result !='0'){
    
   
  ?>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingemp">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseemp" aria-expanded="true" aria-controls="collapseemp">
           Employment History
        </a>
      </h4>
    </div>
    <div id="collapseemp" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingemp">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">

<?php 
$serial = 1;
while($emp_histo_info_view = mysqli_fetch_array($emp_histo_info)){
$s_num = $serial++;

  $table_name = 'job_seeker_emp_histo';
?>

<div class="input-wrap col-md-12">
<label><?php echo 'Employment History-' . $s_num;?>
  <span><a href="javascript:;" onClick="delete_function_con('<?php echo $emp_histo_info_view['id']; ?>','<?php echo $table_name; ?>');" 
  class=""> 
    <i class="fa fa-trash-o"></i> Delete 
  </a></span>
</label>
</div>

  <div class="input-wrap col-md-6">
         <label>Company Name</label>
         <input name="com_name[]" placeholder="Company Name" class="form-control" type="text" value="<?php echo $emp_histo_info_view['com_name'];?>">
      </div>

    <div class="input-wrap col-md-6">
         <label>Company Business</label>
         <input name="com_busines[]" placeholder="Company Business" class="form-control" type="text" value="<?php echo $emp_histo_info_view['com_busines'];?>">
      </div>


     <div class="input-wrap col-md-12">
         <label>Responsibilities</label>
         <textarea name="emp_responsibility[]" placeholder="Responsibilities" class="form-control" type="text">
          <?php echo $emp_histo_info_view['emp_responsibility'];?>
            
          </textarea>
         
      </div>

      <div class="input-wrap col-md-6">
         <label>Company location*</label>
         <input name="com_location[]" placeholder="Company location" class="form-control" type="text" value="<?php echo $emp_histo_info_view['com_location'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Designation</label>
         <input name="com_design[]" placeholder="Designation" class="form-control" type="text" value="<?php echo $emp_histo_info_view['com_design'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Department</label>
         <input name="com_department[]" placeholder="Department" class="form-control" type="text" value="<?php echo $emp_histo_info_view['com_department'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Area of Experiences</label>
         <input name="area_of_expre[]" placeholder="Area of Experiences:" class="form-control" type="text" value="<?php echo $emp_histo_info_view['area_of_expre'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Employment Period (From Date)</label>
         
         <input name="emp_from[]" placeholder="Employment Period" class="form-control" type="date" value="<?php echo $emp_histo_info_view['emp_from'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Employment Period (To Date)</label>
          
         <input name="emp_to[]" placeholder="Employment Period" class="form-control" type="date" value="<?php echo $emp_histo_info_view['emp_to'];?>"> <br>
      </div>

<?php } ?>

          <div class="input-wrap col-md-12">

            <button name="employeee_history_update" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
          </div>
</div>
<?php } else { ?>

Employment History dosn't added 

<?php } ?>
          </form>
     

     
      </div>
    </div>






  


<?php if ($profess_info_result->num_rows > 0) { ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       Professional Qualification 
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       

<form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php" >
     
<?php  $serial = 1; 
 while($profess_info_data = $profess_info_result->fetch_assoc()) {
  $s_num = $serial++;
     $table_name = 'job_seeker_profess_info';

   ?>


<div class="input-wrap col-md-12">
<label><?php echo 'Profession-' . $s_num;?>
  <span><a href="javascript:;" onClick="delete_function_con('<?php echo $profess_info_data['id']; ?>','<?php echo $table_name; ?>');" 
  class=""> 
    <i class="fa fa-trash-o"></i> Delete 
  </a></span>
</label>
</div>



<input type="hidden" name="prof_id[]" value="<?php echo $profess_info_data['id'];?>" />



     <div class="input-wrap col-md-6">
         <label>Certification</label>
         <input name="certification[]" placeholder="Certification" class="form-control" type="text" value="<?php echo $profess_info_data['certification'];?>">
      </div>


      <div class="input-wrap col-md-6">
        <label>Location</label>
         <input name="location[]" placeholder="Location" class="form-control" type="text" value="<?php echo $profess_info_data['location'];?>">
      </div>


      <div class="input-wrap col-md-6">
        <label>Institute</label>
        <input name="institute[]" placeholder="Institute" class="form-control" type="text"  value="<?php echo $profess_info_data['institute'];?>">
      </div>


    <div class="input-wrap col-md-3">
        <label>Certification Period*</label>
        <input style="padding: 0" name="certi_startdate[]" placeholder="Start date" class="form-control" type="Date" value="<?php echo $profess_info_data['certi_startdate'];?>">
      </div>

        <div class="input-wrap col-md-3">
        <label>End date*</label>
        <input style="padding: 0" name="certi_enddate[]" placeholder="End date" class="form-control" type="Date" value="<?php echo $profess_info_data['certi_enddate'];?>">
      </div>

      <br>

 <?php } ?>

<div class="input-wrap col-md-12">
<button name="professional_details_Update" type="submit" class="btn btn-default btn-block" href="#">
Update
</button>
</div>
</form>





      </div>
    </div>
  </div>

   <?php } ?> 



<?php 
      
$Specialization_info = mysqli_query($con,"SELECT * FROM job_seeker_specialization WHERE user_id = '$user_id' ");
$Specialization_info_result = mysqli_num_rows($Specialization_info);

if($Specialization_info_result !='0'){
    
   
  ?>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingspecial">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsespecial" aria-expanded="true" aria-controls="collapsespecial">
           Specialization
        </a>
      </h4>
    </div>
    <div id="collapsespecial" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingspecial">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">

<?php 
while($Specialization_info_view = mysqli_fetch_array($Specialization_info)){

?>

      <div class="input-wrap col-md-12">
         <label>Skills</label>

         <textarea name="skills" class="form-control" type="text" ><?php echo $Specialization_info_view['skills'];?>
         </textarea>
      </div>

    <div class="input-wrap col-md-12">
         <label>Skill Description*</label>

         <textarea name="skill_description" class="form-control" type="text"><?php echo $Specialization_info_view['skill_description'];?>
         </textarea>
      </div>



       <div class="input-wrap col-md-12">
         <label>Extracurricular Activities</label>

         <textarea name="extra_activitis" class="form-control" type="text"><?php echo $Specialization_info_view['extra_activitis'];?>
         </textarea>
      </div>

<?php } ?>

          <div class="input-wrap col-md-12">

            <button name="specializatin_update" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
          </div>
</div>
<?php } else { ?>

Specialization dosn't added 

<?php } ?>
          </form>
     

     
      </div>
    </div>
 


<?php 
      
$language_info = mysqli_query($con,"SELECT * FROM job_seeker_lang_pro WHERE user_id = '$user_id' ");
$language_info_result = mysqli_num_rows($language_info);

if($language_info_result !='0'){
    
   
  ?>

 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headinglan">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapselan" aria-expanded="true" aria-controls="collapselan">
          Language Proficiency
        </a>
      </h4>
    </div>
    <div id="collapselan" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headinglan">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">

<?php 
$serial = 1;
while($language_info_view = mysqli_fetch_array($language_info)){
$s_num = $serial++;

  $table_name = 'job_seeker_lang_pro';
?>

<div class="input-wrap col-md-12">
<label><?php echo 'Language Proficiency-' . $s_num;?>
  <span><a href="javascript:;" onClick="delete_function_con('<?php echo $language_info_view['id']; ?>','<?php echo $table_name; ?>');" 
  class=""> 
    <i class="fa fa-trash-o"></i> Delete 
  </a></span>
</label>
</div>

 <div class="input-wrap col-md-6">
         <label>Language</label>
         <input name="lan[]" placeholder="Language" class="form-control" type="text" value="<?php echo $language_info_view['lan']; ?>">
      </div>

    <div class="input-wrap col-md-6">
        <label>Reading</label>

        <select name="lan_reading[]" class="form-control" required="">
         <option value="<?php echo $language_info_view['lan_reading']; ?>"><?php echo $language_info_view['lan_reading']; ?> </option>
         <option value="High">High</option>
         <option value="Medium">Medium</option>
         <option value="Low">Low</option>
            
          </select>
         
      </div>


    <div class="input-wrap col-md-6">
        <label>Writing</label>

        <select name="lan_writing[]" class="form-control" required="">
         <option value="<?php echo $language_info_view['lan_writing']; ?>"><?php echo $language_info_view['lan_writing']; ?> </option>
         <option value="High">High</option>
         <option value="Medium">Medium</option>
         <option value="Low">Low</option>
            
          </select>
         
      </div>


      <div class="input-wrap col-md-6">
        <label>Speaking</label>

        <select name="lan_speaking[]" class="form-control" required="">
         <option value="<?php echo $language_info_view['lan_speaking']; ?>"><?php echo $language_info_view['lan_speaking']; ?> </option>
         <option value="High">High</option>
         <option value="Medium">Medium</option>
         <option value="Low">Low</option>
            
          </select>
         
      </div>

<?php } ?>

          <div class="input-wrap col-md-3">

            <button name="language_pro_update" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
          </div>
</div>
<?php } else { ?>

Language Proficiency dosn't added 

<?php } ?>
          </form>
     

     
      </div>
    </div>




<?php 
      
$Reference_info = mysqli_query($con,"SELECT * FROM job_seeker_reff WHERE user_id = '$user_id' ");
$Reference_info_result = mysqli_num_rows($Reference_info);

if($Reference_info_result !='0'){
    
   
  ?>

 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingref">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseref" aria-expanded="true" aria-controls="collapseref">
          Reference
        </a>
      </h4>
    </div>
    <div id="collapseref" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingref">
      <div class="panel-body">
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php">

<?php 
$serial = 1;
while($Reference_info_view = mysqli_fetch_array($Reference_info)){
$s_num = $serial++;

  $table_name = 'job_seeker_reff';
?>

<div class="input-wrap col-md-12">
<label><?php echo 'Reference-' . $s_num;?>
  <span><a href="javascript:;" onClick="delete_function_con('<?php echo $Reference_info_view['id']; ?>','<?php echo $table_name; ?>');" 
  class=""> 
    <i class="fa fa-trash-o"></i> Delete 
  </a></span>
</label>
</div>

       <div class="input-wrap col-md-6">
         <label>Name</label>
         <input name="ref_name[]" placeholder="Name" class="form-control" type="text" value="<?php echo $Reference_info_view['ref_name'];?>">
      </div>

    <div class="input-wrap col-md-6">
         <label>Organization</label>
         <input name="ref_org[]" placeholder="Organization" class="form-control" type="text" value="<?php echo $Reference_info_view['ref_org'];?>">
      </div>


      <div class="input-wrap col-md-6">
         <label>Designation</label>
         <input name="ref_designation[]" placeholder="Designation" class="form-control" type="text" value="<?php echo $Reference_info_view['ref_designation'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Phone (Off)</label>
         <input name="ref_phone[]" placeholder="Phone (Off)" class="form-control" type="text" value="<?php echo $Reference_info_view['ref_phone'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Mobile</label>
         <input name="ref_mobile[]" placeholder="Mobile " class="form-control" type="text" value="<?php echo $Reference_info_view['ref_mobile'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Phone (Res)</label>
         <input name="ref_phone_res[]" placeholder="Phone (Res)" class="form-control" type="text" value="<?php echo $Reference_info_view['ref_phone_res'];?>">
      </div>

      <div class="input-wrap col-md-6">
         <label>Email</label>
         <input name="ref_email[]" placeholder="Email" class="form-control" type="text" value="<?php echo $Reference_info_view['ref_email'];?>">
      </div>

      <div class="input-wrap col-md-6">
        <label>Relation</label>

        <select name="ref_relation[]" class="form-control">
         <option value="<?php echo $Reference_info_view['ref_relation'];?>"><?php echo $Reference_info_view['ref_relation'];?> </option>
         <option value="Relative">Relative</option>
         <option value="Family Friend">Family Friend</option>
         <option value="Academic">Academic</option>
         <option value="Professional">Professional</option>
         <option value="Others">Others</option>
            
          </select>
         
      </div>

      <div class="input-wrap col-md-12">
         <label>Address</label>
         <textarea name="ref_address[]" class="form-control" type="text"><?php echo $Reference_info_view['ref_address'];?></textarea>     
      </div>  

    
      
<?php } ?>

          <div class="input-wrap col-md-12">

            <button name="referrance_update" type="submit" class="btn btn-default btn-block" href="#">
              Update
            </button>
          </div>
</div>
<?php } else { ?>

Reference dosn't added 


          </form>
     

     
      </div>
      <?php } ?>
    </div>




<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading4">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
       Photograph
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
      <div class="panel-body">
       


<?php if ($user_image_data['image_file'] !=''){ ?>




<form role="form" method="post" enctype="multipart/form-data" name="post"  action="edit_resume_ac.php" >



<div class="col-md-3"></div>
        


<div class="form-group">
                <label class="col-sm-2 control-label">Image Uploade :</label>
 <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                   <img src="image/<?php echo $user_image_data['image_file']; ?>" alt="Image not found">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                  <div>
                   <span class="btn btn-white btn-file">
                  <span class="fileinput-new">Select image</span>
                  <span class="fileinput-exists">Change</span>
                  
                  <input name="image_file" type="file" class="uploader" id="image_file" multiple="multiple">
                   </span>
                   <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                 </div>
</div>



<div class="col-md-3"></div><br>



<div class="input-wrap col-md-12">
<button name="image_Update" type="submit" class="btn btn-default btn-block" href="#">
Update
</button>
</div>


<?php }else { ?>
Image dosn't added 
<?php } ?>


</form>
</div>

  </div>







</div>

     
  </div>
   
  </div>
</div>










    </div>
  </div>
</div>







<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>



  <!-- Imported scripts on this page -->
  <script src="js/fileinput.js"></script>

</body>
</html>