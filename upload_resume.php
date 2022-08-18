<?php
include("fj-admin/config/confg.php");
include("session_check.php");
$user_id=$_SESSION['user_id'];
$user_resume = "SELECT * FROM job_seeker_upload_resume WHERE user_id = '$user_id' ";
$user_resume_data = $con->query($user_resume);


if (isset($_POST["submit_cv_pdf"])){
$extention = strrchr($_FILES['resume']['name'], ".");
if ($extention == '.pdf') {
$user_id=$_SESSION['user_id'];
$folder = "resume/";
$new_name = time();
$resume = $new_name.$extention;
$uploaddir = $folder . $resume;
move_uploaded_file($_FILES['resume']['tmp_name'], $uploaddir);
$resume_insert = mysqli_query($con,"INSERT INTO `job_seeker_upload_resume` (`id`, `user_id`, `resume`) VALUES (NULL, '$user_id', '$resume')");
}else{
?>

<script language="javascript" type="text/javascript">
alert("Invalid file (please uploaded a pdf file).");
location.replace('upload_resume.php');
</script>

<!-- $error_msg ='<p class="text-danger">Invalid file (please uploaded a pdf file)</p>'; -->
<?php
 
}
?>

<script language="javascript" type="text/javascript">
location.replace('upload_resume.php');
</script>


<?php
}

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
     <i class="fa fa-upload"></i> Upload Resume
    </div>
      

      <div class="ucon-panel-body">
        <div class="panel-body" id="">
         <p class="error"><?php echo $error_msg ; ?></p>    
            
<?php if($user_resume_view = $user_resume_data->fetch_assoc()){
 $table_name = 'job_seeker_upload_resume' ;?>

 <div class="input-wrap col-md-12">
<label>Resume 
  <span><a href="javascript:;" onClick="delete_function_con('<?php echo $user_resume_view['id']; ?>','<?php echo $table_name; ?>');" 
  class=""> 
    <i class="fa fa-trash-o"></i> Delete 
  </a></span>
</label>
</div>


<br><br>
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="resume/<?php echo $user_resume_view['resume']; ?>"></iframe>



</div>

<?php } else { ?>
<form role="form" method="post" enctype="multipart/form-data" name="post" >


<div class="col-md-2"></div>
  
  <div class="form-group">
                <label class="col-sm-3 control-label">Upload File:</label>
 <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                   <!-- <img src="image/<?php echo $user_image_data['image_file']; ?>" > -->
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                  <div>
                   <span class="btn btn-white btn-file">
                  <span class="fileinput-new">Upload File</span>
                  <span class="fileinput-exists">Change</span>
                  
                  <input name="resume" type="file" class="uploader" id="resume" accept="application/pdf">
                   </span>
                   <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                 </div>
</div>

<div class="col-md-3"></div><br>
<div class="input-wrap col-md-3">
<input class="btn btn-default btn-block" type="submit" name="submit_cv_pdf" value="Save" />
</div>
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


<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>

<script type="text/javascript" src="js/bootstrap_validator.min.js"></script>
  <!-- Imported scripts on this page -->
  <script src="js/fileinput.js"></script>


</body>
</html>