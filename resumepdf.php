<?php
include("fj-admin/config/confg.php");

session_start();
$user_id = $_REQUEST['user_id'];

$user_resume=mysqli_query($con, "select * from job_seeker_resume where user_id = '$user_id'");
$user_resume_data=mysqli_fetch_array($user_resume);

$user_edu_info = "SELECT * FROM job_seeker_education WHERE user_id = '$user_id' ";
$user_edu_info_result = $con->query($user_edu_info);

$profess_info = "SELECT * FROM job_seeker_profess_info WHERE user_id = '$user_id' ";
$profess_info_result = $con->query($profess_info);

$user_data=mysqli_query($con, "select * from job_seeker_info where user_id = '$user_id'");
$user_data_view=mysqli_fetch_array($user_data);

$user_image = "SELECT * FROM job_seeker_image WHERE user_id = '$user_id' ";
$user_image_result = $con->query($user_image);
$user_image_data = $user_image_result->fetch_assoc();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Reasume of <?php echo $user_data_view['full_name'];?></title>
<style type="text/css">
<!--
.style3 {font-size: 18px}
-->
</style>
</head>

<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0" style="padding:5px;">

  <tr>
    <td width="550" height="30" align="left" valign="middle">&nbsp;	</td>
  </tr>

  <tr>
    <td align="left" valign="middle"><table  width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="559" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" style="font-size:30px; font-weight:bold;"><?php echo $user_data_view['full_name'];?></td>
            </tr>
            <tr>
              <td height="30" style="font-size:20px; font-weight:bold;"><?php 
				$skill_category=$user_data_view['skill_category'];
				$skill_cate=mysqli_query($con, "select * from job_categories where id = '$skill_category'");
				$skill_cat_view=mysqli_fetch_array($skill_cate);
				echo $skill_cat_view['cate_name'];
				
				?>              </td>
            </tr>
            <tr>
              <td height="30" style="font-size:16px;"><?php if ($user_resume_data['present_address'] !='') { ?>
                Address: <?php echo $user_resume_data['present_address'];?>
                <?php } ?>              </td>
            </tr>
            <tr>
              <td height="30">Email:<?php echo $user_data_view['email'];?></td>
            </tr>
			<tr>
              <td height="30">Phone:<?php echo $user_data_view['phone'];?></td>
            </tr>
        </table></td>
        <td width="191" align="center" valign="middle"><img src="image/<?php if ($user_image_data['image_file'] !=''){ echo $user_image_data['image_file'];}else{ echo 'user.jpg';  }?>" alt="" style="width:135px; height:165px; padding:5px; border:1px dashed #CCCCCC;" /> </td>
      </tr>
    </table></td>
  </tr>
  
   <tr>
    <td height="30" align="left" valign="middle" style="border-bottom:1px solid #CCCCCC;">&nbsp;	</td>
  </tr>
  
   <?php if ($user_resume_data['career_objective'] !='') { ?>
    <tr>
        <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30" style="background: #154462; color:#FFFFFF; padding:2px; font-size:22px; font-weight:bold;">Career Objective:</td>
      </tr>
      <tr>
        <td><p><?php echo $user_resume_data['career_objective'];?></p></td>
      </tr>
    </table></td>
  </tr>
   <?php } ?>
   
    <?php if ($user_resume_data['career_summary'] !='') { ?>
  <tr>
    <td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30" style="background: #154462; color:#FFFFFF; padding:2px; font-size:22px; font-weight:bold;">Career Summary:</td>
      </tr>
      <tr>
        <td><p><?php echo $user_resume_data['career_summary'];?></p></td>
      </tr>
    </table></td>
  </tr>
   <?php } ?>
   
   <?php if ($profess_info_result->num_rows > 0) { ?>
  <tr>
    <td align="left" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" style="background: #154462; color:#FFFFFF; padding:2px; font-size:22px; font-weight:bold;">Professional Qualification:</td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="1" align="left" cellspacing="0" bordercolor="#154462" class="table table-bordered">
          <tbody>
            <tr>
              <th width="126" height="30" align="left" valign="middle"><span class="style3">Certification</span></th>
              <th  width="156" align="left" valign="middle"><span class="style3">Institute</span></th>
              <th  width="80" align="left" valign="middle"><span class="style3">Location</span></th>
              <th  width="80" align="center" valign="middle"><span class="style3">From</span></th>
              <th  width="86" align="center" valign="middle"><span class="style3">To</span></th>
            </tr>
            <?php  while($profess_info_data = $profess_info_result->fetch_assoc()) { ?>
            <tr>
              <td height="30" align="left" valign="middle"><?php echo $profess_info_data['certification'];?></td>
              <td align="left" valign="middle"><?php echo $profess_info_data['location'];?></td>
              <td align="left" valign="middle"><?php echo $profess_info_data['institute'];?></td>
              <td align="center" valign="middle"><?php echo $profess_info_data['certi_startdate'];?></td>
              <td align="center" valign="middle"><?php echo $profess_info_data['certi_enddate'];?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table></td>
      </tr>
    </table></td>
  </tr>
   	<tr>
        <td>&nbsp;</td>
  </tr>
   <?php } ?>
   
   <?php if ($user_edu_info_result->num_rows > 0) { // if ($user_edu == ' ') {?>
  <tr>
    <td align="left" valign="middle"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" style="background: #154462; color:#FFFFFF; padding:2px; font-size:22px; font-weight:bold;">Academic Qualification:</td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="1" align="center" cellspacing="0" bordercolor="#154462"  class="table table-bordered">
          <!--Fathers Name:-->
          <tbody>
            <tr>
              <th width="92" height="30" align="left" valign="middle" class="style3">Exam Title</th>
              <th width="107" align="left" valign="middle" class="style3">Major</th>
              <th width="140" align="left" valign="middle" class="style3">Institute</th>
              <th width="56" align="center" valign="middle" class="style3">Result</th>
              <th width="81" align="center" valign="middle" class="style3">Pas.Year </th>
              <th width="77" align="center" valign="middle" class="style3">Duration</th>
            </tr>
            <?php 
			
			 while($row = $user_edu_info_result->fetch_assoc()) {
					
			
			?>
            <tr>
              <td height="30" align="left" valign="middle"><?php echo $row['education_level'];?></td>
              <td align="left" valign="middle"><?php echo $row['major_group'];?></td>
              <td align="left" valign="middle"><?php echo $row['institute_name'];?></td>
              <td align="center" valign="middle"><?php echo $row['cgpa'];?></td>
              <td align="center" valign="middle"><?php echo $row['passing_year'];?></td>
              <td align="center" valign="middle"><?php echo $row['duration_years'];?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table></td>
      </tr>
	  
	  <tr>
        <td>&nbsp;</td>
      </tr>
	  
	  
    </table></td>
  </tr>
   <?php } ?>
   
   
    <?php if ($user_resume_data['id'] !='') { ?>
  <tr>
    <td height="30" align="left" valign="middle" style="background: #154462; color:#FFFFFF; padding:2px; font-size:22px; font-weight:bold;">Personal Details</td>
  </tr>
  
  <tr>
    <td align="left" valign="middle">
	<table width="100%" border="1" align="center" cellspacing="0" bordercolor="#154462" class="table">
      <!--Fathers Name:-->
      
         <tbody>

           <?php if ($user_resume_data['fathers_ame'] !='') { ?>
        <tr>
         <td width="24%" height="30"  ><strong>Father's Name </strong></td>
         <td width="76%" > <?php echo $user_resume_data['fathers_ame'];?> </td>
        </tr>
      <?php } ?>
      <!--Mothers Name:-->
      
          <?php if ($user_resume_data['mother_name'] !='') { ?>
          <tr>
         <td height="30" ><strong>Mother's Name </strong></td>
         <td > <?php echo $user_resume_data['mother_name'];?>   </td>
         </tr>
          <?php } ?>
      
      <!--Date of Birth:-->
       <?php if ($user_resume_data['birth_date'] !='') { ?>
       <tr>
      <td height="30"  ><strong>Date  of Birth</strong></td>
      <td > <?php echo $user_resume_data['birth_date'];?>  </td>
      </tr>
       <?php } ?>
      <!--Gender:-->
       <?php if ($user_resume_data['religion'] !='') { ?>
       <tr>
      <td height="30"><strong>Gender</strong></td>
      <td> <?php echo $user_resume_data['religion'];?> </td>
      </tr>
       <?php } ?>
      <!--Marital Status:-->
       <?php if ($user_resume_data['marital_status'] !='') { ?>
       <tr>
      <td height="30"><strong>Marital  Status </strong></td>
      <td>  <?php echo $user_resume_data['marital_status'];?> </td>
      </tr>
       <?php } ?>
      <!--Nationality:-->
       <?php if ($user_resume_data['nationality'] !='') { ?>
       <tr>
      <td height="30" ><strong>Nationality</strong></td>
      <td > <?php echo $user_resume_data['nationality'];?>  </td>
      </tr>
       <?php } ?>
            

            
      <!--Religion:-->
      
         <?php if ($user_resume_data['religion'] !='') { ?>
          <tr>
         <td height="30" ><strong>Religion</strong></td>
         <td ><?php echo $user_resume_data['religion'];?> </td>
         </tr>
          <?php } ?>
      
      <!--Permanent Address:-->
      
         <?php if ($user_resume_data['permanent_address'] !='') { ?>
          <tr>
         <td height="30"><strong>Permanent  Address</strong></td>
         <td ><?php echo $user_resume_data['permanent_address'];?></td>
         </tr>
          <?php } ?>
      
      <!--Current Location:-->
       <?php if ($user_resume_data['present_address'] !='') { ?>
       <tr>
      <td height="30" ><strong>Current  Location</strong></td>
      <td><?php echo $user_resume_data['present_address'];?> </td>
      </tr>
       <?php } ?>
    </tbody></table>
	</td>
  </tr>
   <tr>
        <td>&nbsp;</td>
  </tr>
	  
	   
  
  <?php } ?>
 
</table>
</body>
</html>
