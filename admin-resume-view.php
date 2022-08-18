<?php
include("fj-admin/config/confg.php");
include("fj-admin/session_check.php");

$user_id = $_REQUEST["user_id"];
$user_resume=mysqli_query($con, "select * from job_seeker_resume where user_id = '$user_id'");
$user_resume_data=mysqli_fetch_array($user_resume);

$user_edu_info = "SELECT * FROM job_seeker_education WHERE user_id = '$user_id' ";
$user_edu_info_result = $con->query($user_edu_info);

$profess_info = "SELECT * FROM job_seeker_profess_info WHERE user_id = '$user_id' ";
$profess_info_result = $con->query($profess_info);

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
      




<div class="col-md-12"> 




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
        <?php  
          $user_id = $_REQUEST["user_id"];
          $user_data = mysqli_query($con, "select * from job_seeker_info where user_id = '$user_id'");
          $user_data_view = mysqli_fetch_array($user_data);
        ?>
        <h2><span itemprop="name"><?php echo $user_data_view['full_name'];?></span></h2>
        <h5><span itemprop="jobTitle">
        <?php 
        $skill_category= $user_data_view['skill_category'];
        $skill_cate=mysqli_query($con, "select * from job_categories where id = '$skill_category'");
        $skill_cat_view=mysqli_fetch_array($skill_cate);
        echo $skill_cat_view['cate_name'];

?></span></h5>
        <?php if ($user_resume_data['present_address'] !='') { ?>
        <small itemprop="address" itemscope itemtype="#">
          <span itemprop="addressLocality">Address:<?php echo $user_resume_data['present_address'];?></span>
        </small>
        <?php } ?>
        <br>
        <small><span itemprop="email">e-mail: <?php echo $user_data_view['email'];?></span></small>
      </div>
      
      <div id="photo">
        <?php 
          $user_image = "SELECT * FROM job_seeker_image WHERE user_id = '$user_id' "; 
          $user_image_result = $con->query($user_image);
          $user_image_data = $user_image_result->fetch_assoc();
        ?>
       <img src="<?php echo $base_url; ?>image/<?php if ($user_image_data['image_file'] !=''){ echo $user_image_data['image_file'];}else{ echo 'user.jpg';  }?>" alt="" />
      </div>
    </header>
    <hr>
    <?php if ($user_resume_data['career_objective'] !='') { ?>
    <section id="profile">
      <h4 style="background: aliceblue;">Career Objective:</h4>
      <p itemprop="description"><?php echo $user_resume_data['career_objective'];?></p>
    </section>
    <?php } ?>


     <?php if ($user_resume_data['career_summary'] !='') { ?>
     <section id="profile">
      <h4 style="background: aliceblue;">Career Summary:</h4>
      <p itemprop="description"><?php echo $user_resume_data['career_summary'];?></p>
    </section>
    <?php } ?>

   


   
<?php if ($profess_info_result->num_rows > 0) { ?>
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
<?php  while($profess_info_data = $profess_info_result->fetch_assoc()) { ?>
<tr>
 
<td><?php echo $profess_info_data['certification'];?></td>
<td><?php echo $profess_info_data['location'];?></td>
<td><?php echo $profess_info_data['institute'];?></td>
<td><?php echo $profess_info_data['certi_startdate'];?></td>
<td><?php echo $profess_info_data['certi_enddate'];?></td>

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
         <td  >Father's Name </td>
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