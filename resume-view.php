<?php
include("fj-admin/config/confg.php");
include("session_check.php");
$user_id=$_SESSION['user_id'];
$user_resume = mysqli_query($con, "select * from job_seeker_resume where user_id = '$user_id'");
$user_resume_data = mysqli_fetch_array($user_resume);

$user_carieer_info = mysqli_query($con, "select * from job_seeker_other_relatiive_info where user_id = '$user_id'");
$user_carieer_info_result = mysqli_fetch_array($user_carieer_info);

$user_edu_info = "SELECT * FROM job_seeker_education WHERE user_id = '$user_id' ";
$user_edu_info_result = $con->query($user_edu_info);



?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>

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
    <div class="panel-heading panel-heading-01">
      <i class="fa fa-eye"></i> View Resume
      <span style="float: right;margin: -6px 0px 0px 0px;"> 
	  
	  <a href="down_pdf.php?user_id=<?php echo $user_id; ?>" target="_blank" class="btn btn-default"> PDF Download  <i class="fa fa-cloud-download"></i> </a> 
	  
	  </span>
    </div>



      <div class="ucon-panel-body">
        <div class="panel-body" >

    <header class="clearfix">
      <div id="info">     
        <h2><span itemprop="name"><?php echo $user_data_view['full_name'];?></span></h2>
        <h5><span itemprop="jobTitle">
        <?php 
        $skill_category=$user_data_view['skill_category'];
        $skill_cate=mysqli_query($con, "select * from job_categories where id = '$skill_category'");
$skill_cat_view=mysqli_fetch_array($skill_cate);
echo$skill_cat_view['cate_name'];

?></span></h5>
        <?php if ($user_resume_data['present_address'] !='') { ?>
        <small itemprop="address" itemscope itemtype="#">
          <span itemprop="addressLocality">Address:<?php echo $user_resume_data['present_address'];?></span>
        </small>
        <?php } ?>
        <br>
        <small><span itemprop="email">e-mail:<?php echo $user_data_view['email'];?></span></small>
      </div>
      
      <div id="photo">
      
       <img src="image/<?php if ($user_image_data['image_file'] !=''){ echo $user_image_data['image_file'];}else{ echo 'user.jpg';  }?>" alt="" />
      </div>
    </header>
    <hr>
    <?php if ($user_carieer_info_result['orthinfo_career_summary'] !='') { ?>
    <section id="profile">
      <h4 style="background: aliceblue;">Career Objective:</h4>
      <p itemprop="description"><?php echo $user_carieer_info_result['orthinfo_career_summary'];?></p>
    </section>
    <?php } ?>


     <?php if ($user_carieer_info_result['orthinfo_specific_summary'] !='') { ?>
     <section id="profile">
      <h4 style="background: aliceblue;">Career Summary:</h4>
      <p itemprop="description"><?php echo $user_carieer_info_result['orthinfo_specific_summary'];?></p>
    </section>
    <?php } ?>

<?php
  $serial=0;
    $user_resume1 = mysqli_query($con, "SELECT * FROM job_seeker_emp_histo WHERE user_id = '$user_id'");
    $emp_his_rows = mysqli_num_rows($user_resume1);

if ($emp_his_rows > 0) { ?>
  
<section id="education">
      <h4 style="background: aliceblue;">Employment History:</h4>
      <p>
       <div class="table-responsive">
        <?php  while($emp_his_result = mysqli_fetch_array($user_resume1)){ 
          $serial++
          ?>
        <table class="">

        <tr>
            <td style="line-height: 50px;"><?php 
                 $from = $emp_his_result['emp_from'];
                  $to = $emp_his_result['emp_to'];

                  $datetime1 = new DateTime($from);

                  $datetime2 = new DateTime($to);

                  $difference = $datetime1->diff($datetime2);

                  echo ''.$difference->y.' years, ' 
                                     .$difference->m.' months, ' 
                                     .$difference->d.' days';

            ?>
              
            </td>
        </tr>
<tr>
    <td style="line-height: 50px;"><b><?php echo $serial;?>. <?php echo $emp_his_result['com_design'];?> (<?php echo $from; ?> to <?php echo $to; ?>)</b></td>
</tr>
        
<tr>
    <td style="line-height: 50px;"><b><?php echo $emp_his_result['com_name'];?></b></td>
</tr>

<tr>
    <td style="line-height: 30px;">Company Address: <?php echo $emp_his_result['com_location'];?></td>
</tr>

<tr>
    <td style="line-height: 30px;">Department: <?php echo $emp_his_result['com_department'];?></td>
</tr>

<tr>
    <td style="line-height: 30px; padding-bottom: 15px;"><b>Duties/Responsibilities:</b> <br> <?php echo $emp_his_result['emp_responsibility'];?><hr></td>
</tr>
      

     </table>
     <?php } ?>
   </div>
       </p>
    </section>
    <?php } ?> 


   
<?php 

$user_resume12 = mysqli_query($con, "SELECT * FROM job_seeker_profess_info WHERE user_id = '$user_id'");
$profess_info_rows = mysqli_num_rows($user_resume12);
  
  
if ($profess_info_rows > 0) { ?>
<section id="education">
      <h4 style="background: aliceblue;">Professional Qualification:</h4>
      <p>
       <div class="table-responsive">
        <table  class="table table-bordered">
      
      
         <tbody>
          <tr>
            <th>Certification</th>
            <th>Institute</th>
            <th>Location</th>
            <th>From</th>
            <th>To</th>


          </tr>
<?php  

while($profess_info_result = mysqli_fetch_array($user_resume12)){ ?>
<tr>
 
<td><?php echo $profess_info_result['certification'];?></td>
<td><?php echo $profess_info_result['location'];?></td>
<td><?php echo $profess_info_result['institute'];?></td>
<td><?php echo $profess_info_result['certi_startdate'];?></td>
<td><?php echo $profess_info_result['certi_enddate'];?></td>

        </tr>
      <?php } ?>

       </tbody>
     </table>
   </div>
       </p>
    </section>
    <?php } ?> 

<?php 

$user_resume2 = mysqli_query($con, "SELECT * FROM job_seeker_training WHERE user_id = '$user_id'");
$trainning_info_rows = mysqli_num_rows($user_resume2);
  
  
if ($trainning_info_rows > 0) { ?>
<section id="education">
      <h4 style="background: aliceblue;">Training Summary:</h4>
      <p>
       <div class="table-responsive">
        <table  class="table table-bordered">
      
      
         <tbody>
          <tr>
            <th>Training Title</th>
            <th>Topic</th>
            <th>Institute</th>
            <th>Country</th>
            <th>Location</th>
            <th>Year</th>
            <th>Duration</th>


          </tr>
<?php  

while($trainning_info_result = mysqli_fetch_array($user_resume2)){ ?>
<tr>
 
<td><?php echo $trainning_info_result['train_title'];?></td>
<td><?php echo $trainning_info_result['train_coverd'];?></td>
<td><?php echo $trainning_info_result['trarin_insti'];?></td>
<td><?php echo $trainning_info_result['train_cont'];?></td>
<td><?php echo $trainning_info_result['train_location'];?></td>
<td><?php echo $trainning_info_result['train_year'];?></td>
<td><?php echo $trainning_info_result['train_duration'];?></td>

        </tr>
      <?php } ?>

       </tbody>
     </table>
   </div>
       </p>
    </section>
    <?php } ?> 


<?php 

$user_resume3 = mysqli_query($con, "SELECT * FROM job_seeker_carieer_details WHERE user_id = '$user_id'");
$pref_details_info_rows = mysqli_num_rows($user_resume3);
  
  
if ($pref_details_info_rows > 0) { ?>
<section id="education">
      <h4 style="background: aliceblue;">Career and Application Information:</h4>
      <p>
       <div class="table-responsive">
        <table  class="table">
      <?php  

$pref_details_info_result = mysqli_fetch_array($user_resume3); 


$user_resume4 = mysqli_query($con, "SELECT * FROM job_seeker_pref_details WHERE user_id = '$user_id'");
$pref_detailsandpref_info_rows = mysqli_fetch_array($user_resume4);

$cate_name = $pref_detailsandpref_info_rows['job_cate'];


$user_resume5 = mysqli_query($con, "SELECT * FROM job_categories WHERE id = '$cate_name'");
$job_categoris_result = mysqli_fetch_array($user_resume5);


?>
      
         <tbody>
          <tr>
            <td>Looking For</td>
            <td>:</td>
            <td><?php echo $pref_details_info_result['optLevel'];?> Level Job</td>
          </tr>

          <tr>
            <td>Available For</td>
            <td>:</td>
            <td><?php echo $pref_details_info_result['optAvail'];?></td>
          </tr>


          <tr>
            <td>Present Salary</td>
            <td>:</td>
            <td><?php echo $pref_details_info_result['presnt_salary'];?></td>
          </tr>

          <tr>
            <td>Expected Salary</td>
            <td>:</td>
            <td><?php echo $pref_details_info_result['expected_salary'];?></td>
          </tr>


          <tr>
            <td>Preferred Job Category</td>
            <td>:</td>
            <td><?php echo $job_categoris_result['cate_name'];?></td>
          </tr>

          <tr>
            <td>Preferred District</td>
            <td>:</td>
            <td><?php echo $pref_detailsandpref_info_rows['districs'];?></td>
          </tr>

          <tr>
            <td>Preferred Country</td>
            <td>:</td>
            <td><?php echo $pref_detailsandpref_info_rows['country'];?></td>
          </tr>

          <tr>
            <td>Preferred Organization Types</td>
            <td>:</td>
            <td><?php echo $pref_detailsandpref_info_rows['orgainization_type'];?></td>
          </tr>



       </tbody>
     </table>
   </div>
       </p>
    </section>
    <?php } ?>

<?php 

$user_resume17= mysqli_query($con, "SELECT * FROM job_seeker_specialization WHERE user_id = '$user_id'");
$special_info_rows = mysqli_num_rows($user_resume17);
  
  
if ($special_info_rows > 0) { ?>
<section id="education">
      <h4 style="background: aliceblue;">Specialization:</h4>
      <p>
       <div class="table-responsive">
        <table  class="table table-bordered">
      
      
         <tbody>
          <tr>
            <th width="50%">Fields of Specialization</th>
            <th width="50%">Description</th>
          </tr>
<?php  

while($special_info_result = mysqli_fetch_array($user_resume17)){ ?>
<tr>
 
<td><?php echo $special_info_result['skills'];?></td>
<td><?php echo $special_info_result['skill_description'];?></td>

        </tr>
      <?php } ?>

       </tbody>
     </table>
   </div>
       </p>
    </section>
    <?php }?> 



 

<?php 

$user_resume6 = mysqli_query($con, "SELECT * FROM job_seeker_lang_pro WHERE user_id = '$user_id'");
$lan_info_rows = mysqli_num_rows($user_resume6);
  
  
if ($lan_info_rows > 0) { ?>
<section id="education">
      <h4 style="background: aliceblue;">Language Proficiency:</h4>
      <p>
       <div class="table-responsive">
        <table  class="table table-bordered">
      
      
         <tbody>
          <tr>
            <th>Language</th>
            <th>Reading</th>
            <th>Writing</th>
            <th>Speaking</th>
            

          </tr>
<?php  

while($lan_info_result = mysqli_fetch_array($user_resume6)){ ?>
<tr>
 
<td><?php echo $lan_info_result['lan'];?></td>
<td><?php echo $lan_info_result['lan_reading'];?></td>
<td><?php echo $lan_info_result['lan_writing'];?></td>
<td><?php echo $lan_info_result['lan_speaking'];?></td>

        </tr>
      <?php } ?>

       </tbody>
     </table>
   </div>
       </p>
    </section>
    <?php } ?> 


   <!--  <section id="skills" class="clearfix" itemscope itemtype="#">
      <h2 itemprop="name">Skillset</h2>
      <section id="skills-left">
        <h4 itemprop="about">Development</h4>
        <ul>
          <li itemprop="itemListElement">HTML5/CSS3</li>
          <li itemprop="itemListElement">JavaScript &amp; jQuery</li>
          <li itemprop="itemListElement">PHP Backend</li>
          <li itemprop="itemListElement">SQL Databases</li>
          <li itemprop="itemListElement">Wordpress</li>
          <li itemprop="itemListElement">Pligg CMS</li>
          <li itemprop="itemListElement">Some Objective-C</li>
        </ul>
      </section> -->
      
     <!--  <section id="skills-right">
        <h4 itemprop="about">Software</h4>
        <ul>
          <li itemprop="itemListElement">Adobe Photoshop</li>
          <li itemprop="itemListElement">Adobe Dreamweaver</li>
          <li itemprop="itemListElement">MS Office 2007-2010</li>
          <li itemprop="itemListElement">cPanel &amp; phpMyAdmin</li>
          <li itemprop="itemListElement">Xcode 4</li>
        </ul>
      </section>
    </section> -->
    
<?php if ($user_edu_info_result->num_rows > 0) { // if ($user_edu == ' ') {?>
<section id="education">
      <h4 style="background: aliceblue;">Academic Qualification:</h4>
      <p>
       <div class="table-responsive">
        <table  class="table table-bordered">
      <!--Fathers Name:-->
      
         <tbody>
          <tr>
            <th>Exam Title</th>
            <th>Concentration/Major</th>
            <th>Institute</th>
            <th>Result</th>
            <th>Pas.Year  </th>
            <th>Duration</th>


          </tr>
<?php 

 while($row = $user_edu_info_result->fetch_assoc()) {
        

?>
<tr>
 
<td><?php echo $row['education_level'];?></td>
<td><?php echo $row['major_group'];?></td>
<td><?php echo $row['institute_name'];?></td>
<td><?php echo $row['cgpa'];?></td>
<td><?php echo $row['passing_year'];?></td>
<td><?php echo $row['duration_years'];?></td>

        </tr>
      <?php } ?>

       </tbody>
     </table>
   </div>
       </p>
    </section>
    <?php } ?> 
<!--     <section id="experience">
      <h2>Work Experience</h2>
      <p>Freelance Web Designer/Developer ~ 2007-2009</p>
      <p>Best Buy - Geek Squad In-Store Agent ~ 2008-2009</p>
      <p>Freelance Writer for <span itemprop="worksFor">Hongkiat.com</span> ~ 2011-Present</p>
    </section> -->
    
   <!--  <section id="articles">
      <h2>Recent Articles</h2>
      <p itemscope itemtype="#">
      <span itemprop="name">
      <a href="#" itemprop="url" title="10 Useful Fallback Methods For CSS And Javascript">10 Useful Fallback Methods For CSS And Javascript</a></span> &bull; Published in <span itemprop="datePublished">July 2012</span></p>
      
      <p itemscope itemtype="#">
      <span itemprop="name">
      <a href="#" itemprop="url" title="Rewriting URLs In WordPress: Tips And Plugins">Rewriting URLs In WordPress: Tips And Plugins</a></span> &bull; Published in <span itemprop="datePublished">July 2012</span></p>
      
      <p itemscope itemtype="#">
      <span itemprop="name">
      <a href="#" itemprop="url" title="JPEG Optimization For The Web – Ultimate Guide">JPEG Optimization For The Web – Ultimate Guide</a></span> &bull; Published in <span itemprop="datePublished">July 2012</span></p>
      
      <p itemscope itemtype="#">
      <span itemprop="name">
      <a href="#" itemprop="url" title="9 Tricks To Design The Perfect HTML Newsletter">9 Tricks To Design The Perfect HTML Newsletter</a></span> &bull; Published in <span itemprop="datePublished">May 2012</span></p>
      
      <p itemscope itemtype="#">
      <span itemprop="name">
      <a href="#" itemprop="url" title="Guide To A/B Testing With Google Website Optimizer">Guide To A/B Testing With Google Website Optimizer</a></span> &bull; Published in <span itemprop="datePublished">March 2012</span></p>
    </section> -->


    <?php if ($user_resume_data['id'] !='') { ?>
    <section id="profile">
      <h4 style="background: aliceblue;">Personal Details :</h4>
      <p itemprop="description">
      <div class="table-responsive">
        <table class="table">
      <!--Fathers Name:-->
      
         <tbody>

           <?php if ($user_resume_data['fathers_ame'] !='') { ?>
        <tr>
         <td >Father's Name </td>
         <td >:</td>
         <td > <?php echo $user_resume_data['fathers_ame'];?> </td>
        </tr>
      <?php } ?>
      <!--Mothers Name:-->
      
          <?php if ($user_resume_data['mother_name'] !='') { ?>
          <tr>
         <td >Mother's Name </td>
         <td >:</td>
         <td > <?php echo $user_resume_data['mother_name'];?>   </td>
         </tr>
          <?php } ?>
      
      <!--Date of Birth:-->
       <?php if ($user_resume_data['birth_date'] !='') { ?>
       <tr>
      <td  >Date  of Birth</td>
      <td >:</td>
      <td > <?php echo $user_resume_data['birth_date'];?>  </td>
      </tr>
       <?php } ?>
      <!--Gender:-->
       <?php if ($user_resume_data['religion'] !='') { ?>
       <tr>
      <td>Gender</td>
      <td>:</td>
      <td> <?php echo $user_resume_data['religion'];?> </td>
      </tr>
       <?php } ?>
      <!--Marital Status:-->
       <?php if ($user_resume_data['marital_status'] !='') { ?>
       <tr>
      <td>Marital  Status </td>
      <td>:</td>
      <td>  <?php echo $user_resume_data['marital_status'];?> </td>
      </tr>
       <?php } ?>
      <!--Nationality:-->
       <?php if ($user_resume_data['nationality'] !='') { ?>
       <tr>
      <td >Nationality</td>
      <td>:</td>
      <td > <?php echo $user_resume_data['nationality'];?>  </td>
      </tr>
       <?php } ?>
            

            
      <!--Religion:-->
      
         <?php if ($user_resume_data['religion'] !='') { ?>
          <tr>
         <td >Religion</td>
         <td >:</td>
         <td ><?php echo $user_resume_data['religion'];?> </td>
         </tr>
          <?php } ?>
      
      <!--Permanent Address:-->
      
         <?php if ($user_resume_data['permanent_address'] !='') { ?>
          <tr>
         <td>Permanent  Address</td>
         <td >:</td>
         <td ><?php echo $user_resume_data['permanent_address'];?></td>
         </tr>
          <?php } ?>
      
      <!--Current Location:-->
       <?php if ($user_resume_data['present_address'] !='') { ?>
       <tr>
      <td >Current  Location</td>
      <td >:</td>
      <td><?php echo $user_resume_data['present_address'];?> </td>
      </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
  </p>
      
     
    </section>

<?php } ?>
 
 <?php 

$user_resume16 = mysqli_query($con, "SELECT * FROM job_seeker_reff WHERE user_id = '$user_id'");
$ref_info_rows = mysqli_num_rows($user_resume16);
  
  
if ($ref_info_rows > 0) { ?>
<section id="education">
      <h4 style="background: aliceblue;">Reference (s):</h4>
      <p>
       <div class="table-responsive">
        <table  class="table">
      <?php  

$ref_info_result = mysqli_fetch_array($user_resume16); 
?>
      
         <tbody>
          <tr>
            <td>Name</td>
            <td>:</td>
            <td><?php echo $ref_info_result['ref_name'];?></td>
          </tr>

          <tr>
            <td>Organization</td>
            <td>:</td>
            <td><?php echo $ref_info_result['ref_org'];?></td>
          </tr>


          <tr>
            <td>Designation</td>
            <td>:</td>
            <td><?php echo $ref_info_result['ref_designation'];?></td>
          </tr>

          <tr>
            <td>Address</td>
            <td>:</td>
            <td><?php echo $ref_info_result['ref_address'];?></td>
          </tr>


          <tr>
            <td>Mobile</td>
            <td>:</td>
            <td><?php echo $ref_info_result['ref_mobile'];?></td>
          </tr>

          <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $ref_info_result['ref_email'];?></td>
          </tr>

          <tr>
            <td>Relation</td>
            <td>:</td>
            <td><?php echo $ref_info_result['ref_relation'];?></td>
          </tr>



       </tbody>
     </table>
   </div>
       </p>
    </section>
    <?php } ?>



        </div>
      </div>
	  
	  <div id="editor"></div>
	  
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


</body>
</html>