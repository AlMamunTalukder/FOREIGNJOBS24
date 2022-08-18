<?php
include("fj-admin/config/confg.php");
include("session_check.php");

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
    <div class="panel-heading panel-heading-01"><i class="fa fa-bars"></i> My Profile</div>

    <div class="ucon-panel-body">
     <table class="table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      <?php
      $user_id=$_SESSION['user_id'];
    $user_identity=mysqli_query($con, "select * from job_seeker_info where user_id = '$user_id'");
    $user_identity_results = mysqli_fetch_array($user_identity);

    $userper_identity=mysqli_query($con, "select * from job_seeker_resume where user_id = '$user_id'");
    $userper_identity_results = mysqli_fetch_array($userper_identity);
    ?>

    </thead>
    <tbody>
      <form role="form" method="post" enctype="multipart/form-data" name="post"  action="profile_update_ac.php">
      <tr>
        <td>User Name</td>
		
        <td>
          <input type="text" name="full_name" class="form-control" value="<?php echo $user_identity_results['full_name'];?>">
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>User Email</td>
		
        <td>
          <input type="text" name="email" class="form-control" value="<?php echo $user_identity_results['email'];?>"> 
        </td>
        <td>&nbsp;</td>
      </tr>
	  
	  <tr>
	  
        <td>User Phone </td>
        <td>
          <input type="text" name="phone" class="form-control" value="<?php echo $user_identity_results['phone'];?>">
        </td>
        <td>&nbsp;</td>
      </tr>
	  
       <tr>
	  
        <td>User Address</td>
        <td><textarea type="text" name="present_address" class="form-control"><?php echo $userper_identity_results["present_address"]; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td>&nbsp;</td>
        <td>
          <button name="update_details" type="submit" class="btn btn-default btn-block" href="#">
            Update
          </button>
        </td>
        <td>&nbsp;</td>
      </tr>
</form>
    </tbody>
  </table>
</div>
   
  </div>
</div>



</div></div></div>





<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>
</body>
</html>