<?php
include("fj-admin/config/confg.php");
include("session_check.php");
$user_id=$_SESSION['user_id'];
$user_resume = "SELECT * FROM job_seeker_resume WHERE user_id = '$user_id' ";
$user_resume_data = $con->query($user_resume);


$user_resume_pre = "SELECT * FROM job_seeker_pref_details WHERE user_id = '$user_id' ";
$user_resume_pre_data = $con->query($user_resume_pre);


$user_resume_cari = "SELECT * FROM job_seeker_pref_details WHERE user_id = '$user_id' ";
$user_resume_carieer_data = $con->query($user_resume_cari);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
<link rel="stylesheet" href="css/neon-forms.css">

<style type="text/css">

.m-b-10 {
    margin-bottom: 10px !important;
}
.input-note {
    color: #78909c;
    font-size: 13px;
    display: block;
    font-style: italic;
}
  .checkbox-container {
    height: 200px;
    overflow-x: hidden;
    overflow-y: scroll;
    border: 1px solid #bdbdbd;
    padding: 10px 15px;
}
.chips-container {
    display: block;
    /* overflow: hidden; */
}

.well-sm {
    border-radius: 2px;
    padding: 6px 10px;
    background-color: #eceff1;
    color: #455a64;
    font-size: 13px;
    /* border: 1px solid #cfd8dc; */
    -webkit-transition: .2s;
    -o-transition: .2s;
    transition: .2s;
    margin-bottom: 10px;
    font-weight: 500;
}

.well {
    float: left;
    width: auto;
    height: auto;
    margin-right: 4px;
    background-color: #f2f2f2;
    border: none;
    margin-top: 10px;
    margin-bottom: 5px;
    box-shadow: none;
}
</style>

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
    <div class="panel-heading panel-heading-01"><i class="fa fa-plus-circle"></i> Add Resume</div>

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
         <form role="form" method="post" enctype="multipart/form-data" name="post"  action="add_resume_ac.php">


<?php if($user_resume_view = $user_resume_data->fetch_assoc()){?>
Personal details already added . If you want you can edit 
<?php } else { ?>


    <div class="input-wrap col-md-6">
         <label>Your Father's Name</label>
         <input name="fathers_ame" placeholder="Your Father's Name" class="form-control" type="text">
    </div>

    <div class="input-wrap col-md-6">
        <label>Your Mother's Name</label>
         <input name="mother_name" placeholder="Your Mother's Name" class="form-control" type="text">
    </div>


    <div class="input-wrap col-md-6">
         <label>Date of Birth*</label>
         <input name="birth_date" placeholder="Date of Birth" class="form-control" type="Date" required="">
    </div>


    <div class="input-wrap col-md-6">
         <label>Religion*</label>
         <input name="religion" placeholder="Religion" class="form-control" type="text" required="">
    </div>


     <div class="input-wrap col-md-6">
        <label>Marital Status*</label>
         <input name="marital_status" placeholder="Marital Status" class="form-control" type="text" required="">
    </div>

    <div class="input-wrap col-md-6">
         <label>Nationality*</label>
         <input name="nationality" placeholder="Nationality" class="form-control" type="text" required="">
    </div>

    <div class="input-wrap col-md-6">
         <label>National Id No*</label>
         <input name="nid" id="nid" placeholder="National Id No" class="form-control" type="text" required="">
    </div>

     <div class="input-wrap col-md-6">
       <label>Present Address*</label>
       <textarea name="present_address" class="form-control" placeholder="Present Address" required=""></textarea>
      
    </div>



    <div class="input-wrap col-md-12">
    <label>Permanent Address</label>
    <textarea name="permanent_address" class="form-control" placeholder="Permanent Address"></textarea>

    </div>

              <div class="input-wrap col-md-3">

                 <button name="personal_details" type="submit" class="btn btn-default btn-block" href="#">
              Save
            </button>
             </div>
</div>

          </form>
<?php } ?>     

     
      </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtagor">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetagor" aria-expanded="false" aria-controls="collapsetagor">
         Career and Application Information
        </a>
      </h4>
    </div>
    <div id="collapsetagor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtagor">
      <div class="panel-body">

<form role="form" method="post" enctype="multipart/form-data" name="post"  action="add_resume_ac.php" >

<?php if($user_resume_carieer_view = $user_resume_carieer_data->fetch_assoc()){?>
Personal details already added . If you want you can edit 
<?php } else { ?>

<div class="controls"> 

   <div class="entry">
                

<div class="input-wrap col-md-12">
   <label>Career Objective</label>
   <textarea name="career_objective" class="form-control" placeholder="Career Objective"></textarea>
</div>

<div class="input-wrap col-md-12">
   <label>Career Summary</label>
   <textarea name="career_summary" class="form-control" placeholder="Career Summary"></textarea>
</div>

      <div class="input-wrap col-md-6">
         <label>Present Salary</label>
        <input name="presnt_salary" placeholder="10000" class="form-control" type="number">
      </div>


      <div class="input-wrap col-md-6">
         <label>Expected Salary</label>
        <input name="expected_salary" placeholder="12000" class="form-control" type="number" >
      </div>


      <div class="input-wrap col-md-6">
         <label>Looking for (Job Level)</label>
        <div class="btn-form-control">
                                             <label class="radio-inline">
                                             <input type="radio" name="optLevel" id="levelRadio" value="Entry"> Entry Level 
                                             </label>
                                             <label class="radio-inline">
                                             <input type="radio" name="optLevel" id="levelRadio" value="Mid" checked="checked"> Mid Level
                                             </label>

                                             <label class="radio-inline">
                                             <input type="radio" name="optLevel" id="levelRadio" value="Top"> Top Level 
                                             </label>
                                          </div>
      </div>
      <div class="input-wrap col-md-6">
         <label>Available for (Job Nature)</label>
       <div class="btn-form-control">
                                             <label class="radio-inline">
                                             <input type="radio" name="optAvail" id="avaiRadio" value="Full Time" checked="checked"> Full time
                                             </label>
                                             <label class="radio-inline">
                                             <input type="radio" name="optAvail" id="avaiRadio" value="Part Time"> Part time
                                             </label>
                                             <label class="radio-inline">
                                             <input type="radio" name="optAvail" id="avaiRadio" value="Contract"> Contract
                                             </label>
                                          </div>
      </div><br>
      <br>

       
</div>

      </div>
<div class="input-wrap col-md-3">
 <button name="carieer_details_add" type="submit" class="btn btn-default btn-block" href="#">
Save
</button>
</div>

       </form>
<?php } ?>
      </div>
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingPsref">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsePreferd" aria-expanded="false" aria-controls="collapsePreferd">
         Preferred Areas
        </a>
      </h4>
    </div>
    <div id="collapsePreferd" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPsref">
      <div class="panel-body">




<form role="form" method="post" enctype="multipart/form-data" name="post"  action="add_resume_ac.php">

  <?php if($user_resume_pre_view = $user_resume_pre_data->fetch_assoc()){?>
Personal details already added . If you want you can edit 
<?php } else { ?>

<div class="controls"> 

   <div class="entry">
                
           <div class="all-info jclo_0">
           <div class="sub-header">
           <div id="alertDiv_jclo"></div>
              
       <div class="form-group col-md-12">
          <div class="row">
           <div class="col-md-6 input-wrap">
           
              <label for="">Select Job Category</label>
        <select  name="job_cate" class="form-control" type="text">
          <option value="">Select Job Category</option>
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
              
               <input name="special_skill" id="special_skill" placeholder="Special Skills" class="form-control" type="text">
             </div>
             <br>
             <br>
             <div class="col-md-6 input-wrap">
           
              <label for="">Inside Bangladesh</label>
              
               <input name="districs" id="districs" placeholder="Add Districs" class="form-control" type="text">
             </div>

              <div class="col-md-6 input-wrap">
           
              <label for="">Outside Bangladesh</label>
              
               <input name="country" id="country" placeholder="Add Country" class="form-control" type="text">
             </div>

             <div class="col-md-6 input-wrap">
           
              <label for="">Add your preferred organization type</label>
              
               <input name="orgainization_type" id="orgainization_type" placeholder="Add Organization Type" class="form-control" type="text">
             </div>

                             
           </div>                                            
          </div>

        </div>    
      </div>
           
</div>

</div>

      
<div class="input-wrap col-md-3">
 <button name="pref_details_add" type="submit" class="btn btn-default btn-block" href="#">
Save
</button>
</div>

       </form>
<?php } ?>

</div>
      </div>
    </div>
 

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingorinfo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsegorinfo" aria-expanded="false" aria-controls="collapsegorinfo">
         Other Relevant Information
        </a>
      </h4>
    </div>
    <div id="collapsegorinfo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingorinfo">
      <div class="panel-body">




<form role="form" method="post" enctype="multipart/form-data" name="post"  action="add_resume_ac.php" >
<?php 
$user_resume_other_relatiive = "SELECT * FROM job_seeker_other_relatiive_info WHERE user_id = '$user_id' ";
$user_resume_other_relatiive_data = $con->query($user_resume_other_relatiive);

if($user_resume_other_relatiive_view = $user_resume_other_relatiive_data->fetch_assoc()){?>
Personal details already added . If you want you can edit 
<?php } else {

?>


<div class="controls"> 

   <div class="entry">
                

<div class="input-wrap col-md-12">
   <label>Career Summary</label>
   <textarea name="orthinfo_career_summary" class="form-control" placeholder="Career Summary"></textarea>
</div>

<div class="input-wrap col-md-12">
   <label>Special Qualification</label>
   <textarea name="orthinfo_specific_summary" class="form-control" placeholder="Special Qualification"></textarea>
</div>

      <div class="input-wrap col-md-12">
         <label>Keywords*</label>
        <input name="ortinfo_key" placeholder="Keywords" class="form-control" type="text">
      </div>


      <br>
      <br>

        

</div>

      </div>
<div class="input-wrap col-md-3">
 <button name="other_relatiive_info_add" type="submit" class="btn btn-default btn-block" href="#">
Save
</button>
</div>

       </form>
<?php } ?>
      </div>
    </div>
  </div>



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


<form role="form" method="post" enctype="multipart/form-data" name="post"  action="academic_summery_add_resume_ac.php" >
<div class="controls"> 

   <div class="entry">
                
<div class="col-md-6 input-wrap">
   <label>Level of Education*</label>
        <select name="education_level[]" class="form-control" required="">
          <option value="">Level of Education</option>
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
       <label>GPA/CGPA/Division*</label>
        <input name="cgpa[]" placeholder="GPA/CGPA/Division" class="form-control" type="text" required="">
      </div>




      <div class="col-md-6 input-wrap">
         <label>Year of Passing*</label>
        <select name="passing_year[]" class="form-control" required="">
         <option value="">Year of Passing </option>
            <?php 
           for($i = 1990 ; $i < date('Y'); $i++){
          echo "<option value='$i'>$i</option>";
           }
            ?>
          </select>
      </div>



      <div class="input-wrap col-md-6">
         <label>Concentration/Major/Group*</label>
        <input name="major_group[]" placeholder="Concentration/Major/Group" class="form-control" type="text" required="" >
      </div>


      <div class="input-wrap col-md-6">
         <label>Duration (Years)</label>
        <input name="duration_years[]" placeholder="Duration (Years)" class="form-control" type="text" >
      </div>


      <div class="input-wrap col-md-6">
         <label>Institute Name*</label>
        <input name="institute_name[]" placeholder="Institute Name" class="form-control" type="text" required="">
      </div><br>

        <span class="input-group-btn">

              <button class="btn btn-success btn-add" type="button">
                <span class="fa fa-plus-circle"> Add Education Qualification</span>
              </button>
          </span>


</div>

      </div>
<div class="input-wrap col-md-3">
 <button name="academic_details_add" type="submit" class="btn btn-default btn-block" >
Save
</button>
</div>

       </form>

      </div>
    </div>
  </div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTrasum">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTrasum" aria-expanded="false" aria-controls="collapseTrasum">
         Training Summary
        </a>
      </h4>
    </div>
    <div id="collapseTrasum" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTrasum">
      <div class="panel-body">


<form role="form" method="post" enctype="multipart/form-data" name="post"  action="add_resume_ac.php" >
<div class="controls2"> 

   <div class="entry2">
                
<div class="col-md-6 input-wrap">
   <label>Training Title*</label>
<input name="train_title[]" placeholder="Training Title" class="form-control" type="text" >

</div>


    <div class="input-wrap col-md-6">
       <label>Country*</label>
        <input name="train_cont[]" placeholder="Country" class="form-control" type="text" required="">
      </div>

      <div class="input-wrap col-md-6">
       <label>Topics Covered</label>
        <input name="train_coverd[]" placeholder="Topics Covered" class="form-control" type="text">
      </div>

      <div class="col-md-6 input-wrap">
         <label>Training Year*</label>
        <select name="train_year[]" class="form-control" required="">
         <option value="">Year of Training </option>
            <?php 
           for($i = 1990 ; $i < date('Y'); $i++){
          echo "<option value='$i'>$i</option>";
           }
            ?>
          </select>
      </div>

      <div class="input-wrap col-md-6">
       <label>Institute*</label>
        <input name="trarin_insti[]" placeholder="Institute" class="form-control" type="text" required="">
      </div>

      <div class="input-wrap col-md-6">
       <label>Duration*</label>
        <input name="train_duration[]" placeholder="Duration" class="form-control" type="text" required="">
      </div>

      <div class="input-wrap col-md-12">
       <label>Location*</label>
        <input name="train_location[]" placeholder="Location" class="form-control" type="text">
      </div>


      <br>

        <span class="input-group-btn">

              <button class="btn btn-success btn-add2" type="button">
                <span class="fa fa-plus-circle"> Add Training Summary</span>
              </button>
          </span>


</div>

      </div>
<div class="input-wrap col-md-3">
 <button name="training_summary_add" type="submit" class="btn btn-default btn-block" href="#">
Save
</button>
</div>

       </form>

      </div>
    </div>
  </div>  


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headinglan_emp_his">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseempHis" aria-expanded="false" aria-controls="collapseempHis">
       
      Employment History
        </a>
      </h4>
    </div>
    <div id="collapseempHis" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinglan_emp_his">
      <div class="panel-body">


 
      <form role="form" method="post" enctype="multipart/form-data" name="post" action="add_resume_ac.php" >
           <div class="controls3"> 

            <div class="entry3">

        <div class="input-wrap col-md-6">
         <label>Company Name*</label>
         <input name="com_name[]" placeholder="Company Name" class="form-control" type="text" required="">
      </div>
      <div class="input-wrap col-md-6">
         <label>Company Business*</label>
         <input name="com_busines[]" placeholder="Company Business" class="form-control" type="text" required="">
      </div>


      <div class="input-wrap col-md-12">
         <label>Responsibilities</label>
         <textarea name="emp_responsibility[]" placeholder="Responsibilities" class="form-control" type="text"></textarea>
         
      </div>


      <div class="input-wrap col-md-6">
         <label>Company location*</label>
         <input name="com_location[]" placeholder="Company location" class="form-control" type="text" required="">
      </div>

      <div class="input-wrap col-md-6">
         <label>Designation*</label>
         <input name="com_design[]" placeholder="Designation" class="form-control" type="text" required="">
      </div>
      <div class="input-wrap col-md-6">
         <label>Department*</label>
         <input name="com_department[]" placeholder="Department" class="form-control" type="text" required="">
      </div>

      <div class="input-wrap col-md-6">
         <label>Area of Experiences*</label>
         <input name="area_of_expre[]" placeholder="Area of Experiences:" class="form-control" type="text" required="">
      </div>
      

      <div class="input-wrap col-md-6">
         <label>Employment Period* (From Date)</label>
         
         <input name="emp_from[]" placeholder="Employment Period" class="form-control" type="date" required="">
      </div>
      <div class="input-wrap col-md-6">
         <label>Employment Period (To Date)</label>
          
         <input name="emp_to[]" placeholder="Employment Period" class="form-control" type="date"> <br>
         <label class="checkbox-inline">
          <input type="checkbox" name="chkContinue" id="chkContinue" value="ON" checked=""> Currently Working
        </label>

      </div>


      <span class="input-group-btn">
              <button class="btn btn-success btn-add3" type="button">
                <span class="fa fa-plus-circle">Add Employment History</span>
              </button>
          </span>
      </div>
      

      </div>


<div class="input-wrap col-md-3">
 <button name="add_empHist" type="submit" class="btn btn-default btn-block" href="#">Save</button>
</div>

       </form>


      </div>
    </div>
  </div>



    
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


 
      <form role="form" method="post" enctype="multipart/form-data" name="post"  action="add_resume_ac.php" >
           <div class="controls4"> 

            <div class="entry4">


        <div class="input-wrap col-md-6">
         <label>Certification*</label>
         <input name="certification[]" placeholder="Certification" class="form-control" type="text" required="">
      </div>


      <div class="input-wrap col-md-6">
        <label>Location</label>
         <input name="location[]" placeholder="Location" class="form-control" type="text">
      </div>


      <div class="input-wrap col-md-6">
        <label>Institute*</label>
        <input name="institute[]" placeholder="Institute" class="form-control" type="text"  required="">
      </div>


    <div class="input-wrap col-md-3">
        <label>Certification Period*</label>
        <input style="padding: 0" name="certi_startdate[]" placeholder="Start date" class="form-control" type="Date" required="">
      </div>

        <div class="input-wrap col-md-3">
        <label>End date*</label>
        <input style="padding: 0" name="certi_enddate[]" placeholder="End date" class="form-control" type="Date" >
      </div>

      <br>




      <span class="input-group-btn">
              <button class="btn btn-success btn-add4" type="button">
                <span class="fa fa-plus-circle">Add Professional Qualification</span>
              </button>
          </span>
      </div>
      

      </div>



<div class="input-wrap col-md-3">
 <button name="add_professional" type="submit" class="btn btn-default btn-block" href="#">Save</button>
</div>

       </form>


      </div>
    </div>
  </div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSpecialization">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSpecialization" aria-expanded="false" aria-controls="collapseSpecialization">
       Specialization
        </a>
      </h4>
    </div>
    <div id="collapseSpecialization" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSpecialization">
      <div class="panel-body">

      <form role="form" method="post" enctype="multipart/form-data" name="post" action="add_resume_ac.php" >
        
           <div class="controls2"> 

            <div class="entry2">


        <div class="input-wrap col-md-12">
         <label>Skills*</label>

         <textarea name="skills" class="form-control" type="text" required="">
         </textarea>
      </div>

      <div class="input-wrap col-md-12">
         <label>Skill Description*</label>

         <textarea name="skill_description" class="form-control" type="text" required="">
         </textarea>
      </div>

      <div class="input-wrap col-md-12">
         <label>Extracurricular Activities*</label>

         <textarea name="extra_activitis" class="form-control" type="text">
         </textarea>
      </div>


      </div>
      

      </div>



<div class="input-wrap col-md-3">
 <button name="add_specialization" type="submit" class="btn btn-default btn-block" href="#">Save</button>
</div>

       </form>


      </div>
    </div>
  </div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headinglan_pre">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapselanPro" aria-expanded="false" aria-controls="collapselanPro">
       Language Proficiency
        </a>
      </h4>
    </div>
    <div id="collapselanPro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinglan_pre">
      <div class="panel-body">


 
      <form role="form" method="post" enctype="multipart/form-data" name="post"  action="add_resume_ac.php" >
           <div class="controls5"> 

            <div class="entry5">


        <div class="input-wrap col-md-6">
         <label>Language*</label>
         <input name="lan[]" placeholder="Language" class="form-control" type="text" required="">
      </div>

     
      <div class="input-wrap col-md-6">
        <label>Reading*</label>

        <select name="lan_reading[]" class="form-control" required="">
         <option value="">Select </option>
         <option value="High">High</option>
         <option value="Medium">Medium</option>
         <option value="Low">Low</option>
            
          </select>
         
      </div>

      <div class="input-wrap col-md-6">
        <label>Writing*</label>

        <select name="lan_writing[]" class="form-control" required="">
         <option value="">Select </option>
         <option value="High">High</option>
         <option value="Medium">Medium</option>
         <option value="Low">Low</option>
            
          </select>
         
      </div>

      <div class="input-wrap col-md-6">
        <label>Speaking*</label>

        <select name="lan_speaking[]" class="form-control" required="">
         <option value="">Select </option>
         <option value="High">High</option>
         <option value="Medium">Medium</option>
         <option value="Low">Low</option>
            
          </select>
         
      </div>

      <span class="input-group-btn">
              <button class="btn btn-success btn-add5" type="button">
                <span class="fa fa-plus-circle">Add Language Proficiency</span>
              </button>
          </span>
      </div>
      

      </div>


<div class="input-wrap col-md-3">
 <button name="add_language" type="submit" class="btn btn-default btn-block" href="#">Save</button>
</div>

       </form>


      </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingReference">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseReference" aria-expanded="false" aria-controls="collapseReference">
       Reference
        </a>
      </h4>
    </div>
    <div id="collapseReference" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingReference">
      <div class="panel-body">


 
      <form role="form" method="post" enctype="multipart/form-data" name="post"  action="add_resume_ac.php" >
           <div class="controls6"> 

            <div class="entry6">


        <div class="input-wrap col-md-6">
         <label>Name*</label>
         <input name="ref_name[]" placeholder="Name" class="form-control" type="text" required="">
      </div>

     
      <div class="input-wrap col-md-6">
         <label>Organization*</label>
         <input name="ref_org[]" placeholder="Organization" class="form-control" type="text" required="">
      </div>

      <div class="input-wrap col-md-6">
         <label>Designation*</label>
         <input name="ref_designation[]" placeholder="Designation" class="form-control" type="text" required="">
      </div>

      <div class="input-wrap col-md-6">
         <label>Phone (Off)</label>
         <input name="ref_phone[]" placeholder="Phone (Off)" class="form-control" type="text">
      </div>

      <div class="input-wrap col-md-6">
         <label>Mobile *</label>
         <input name="ref_mobile[]" placeholder="Mobile " class="form-control" type="text" required="">
      </div>

      <div class="input-wrap col-md-6">
         <label>Phone (Res)</label>
         <input name="ref_phone_res[]" placeholder="Phone (Res)" class="form-control" type="text">
      </div>

      <div class="input-wrap col-md-6">
         <label>Email</label>
         <input name="ref_email[]" placeholder="Email" class="form-control" type="text">
      </div>

      <div class="input-wrap col-md-6">
        <label>Relation*</label>

        <select name="ref_relation[]" class="form-control" required="">
         <option value="">Select </option>
         <option value="Relative">Relative</option>
         <option value="Family Friend">Family Friend</option>
         <option value="Academic">Academic</option>
         <option value="Professional">Professional</option>
         <option value="Others">Others</option>
            
          </select>
         
      </div>

      <div class="input-wrap col-md-12">
         <label>Address</label>
         <textarea name="ref_address[]" class="form-control" type="text"></textarea>     
      </div>

      <span class="input-group-btn">
              <button class="btn btn-success btn-add6" type="button">
                <span class="fa fa-plus-circle">Add Reference</span>
              </button>
          </span>
      </div>
      

      </div>


<div class="input-wrap col-md-3">
 <button name="add_reffarence" type="submit" class="btn btn-default btn-block" href="#">Save</button>
</div>

       </form>


      </div>
    </div>
  </div>


 
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
       Photograph
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">

<?php if($user_image_data != ''){?>
Image already added . If you want you can edit 
<?php } else{ ?>
<form role="form" method="post" enctype="multipart/form-data" name="post" action="add_resume_ac.php" >



<div class="col-md-3"></div>
  
  <div class="form-group">
                <label class="col-sm-2 control-label">Image Uploade :</label>
 <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                   <!-- <img src="image/<?php echo $user_image_data['image_file']; ?>" alt="image icon not found"> -->
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
 <button name="image_add" type="submit" class="btn btn-default btn-block" href="#">Save</button>
</div>
</form>
<?php } ?>
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