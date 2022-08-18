<?php
include("fj-admin/config/confg.php");
include("session_check.php");
$user_id=$_SESSION['user_id'];

if(isset($_POST['change_pwd'])){
  $user_id=$_SESSION['user_id'];
   $old_password=md5($_POST['old_password']);
  $new_password=md5($_POST['new_password']);
  $con_password=md5($_POST['con_password']);
  
$chg_pwd = "SELECT * FROM job_seeker_info WHERE user_id = '$user_id' ";
$user_pass_result = $con->query($chg_pwd);
$data_pwd_o = $user_pass_result->fetch_assoc();
$data_pwd=$data_pwd_o['password'];

  if($data_pwd==$old_password){
  if($new_password==$con_password){
 $update_pwd = mysqli_query($con,"UPDATE `job_seeker_info` SET password='$new_password' WHERE user_id='$user_id'");

    $change_pwd_error='<p class="text-success">Password update sucessfully.</p>';
   }
   else{
    $change_pwd_error='<p class="text-danger">Your new password and retype password is not match !!!</p>';
   }
  }
    else
    {
    $change_pwd_error='<p class="text-danger">Your current password is wrong !!!</p>';
  }
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
     <i class="fa fa-key"></i> Change Password
    </div>
      

      <div class="ucon-panel-body">
        <div class="panel-body" id="">
         <p align="center" class="error"><?php echo $change_pwd_error ; ?></p>   
            <form action="" method="post">

              


<div class="input-wrap col-md-12">
<label>Current password*</label>
<input name="old_password" placeholder="Type your current password" class="form-control" type="password" required style="padding: 0px;">
</div>

<?php 

?>
<div class="input-wrap col-md-12">
<label>New password*</label>
<input name="new_password" placeholder="Type your new password" class="form-control" type="password" required style="padding: 0px;">
</div>


<div class="input-wrap col-md-12">
<label>Retype new password*</label>
<input name="con_password" placeholder="Retype your new password" class="form-control" type="password" required style="padding: 0px;">
</div>



<div class="input-wrap col-md-3">

<button name="change_pwd" type="submit" class="btn btn-default btn-block" href="#">
Change
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


<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>


</body>
</html>