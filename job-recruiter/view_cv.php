<?php
include("../fj-admin/config/confg.php");
include("../session_check.php");

$user_id = $_REQUEST['user_id'];

$user_resume = "SELECT * FROM job_seeker_upload_resume WHERE user_id = '$user_id' ";
$user_resume_data = $con->query($user_resume);

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
    <div class="panel-heading panel-heading-01">
     <i class="fa fa-upload"></i> Upload CV View 
    </div>
      

      <div class="ucon-panel-body">
        <div class="panel-body" id="">
         <p class="error"><?php echo $error_msg ; ?></p>    
            
<?php if($user_resume_view = $user_resume_data->fetch_assoc()){ ?>


<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="../resume/<?php echo $user_resume_view['resume']; ?>"></iframe>
</div>

<?php } else { ?> 


<div class="embed-responsive embed-responsive-4by3">
This user didn't upload his cv.
</div>

<?php } ?>

</div>

          </div>
      </div>
    </div>
</div>




    </div>
  </div>
</div>


<?php include '../footer.php';?>


<script src="../js/jquery-2.1.4.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/carousel.js"></script>
<script type="text/javascript" src="../js/js_script.js"></script>

<script type="text/javascript" src="../js/bootstrap_validator.min.js"></script>
  <!-- Imported scripts on this page -->
  <script src="../js/fileinput.js"></script>


</body>
</html>