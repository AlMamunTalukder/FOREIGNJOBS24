<?php
include("fj-admin/config/confg.php");
include("session_check.php");
$user_id=$_SESSION['user_id'];

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
        
      <div class="user-content">
          <div class="panel-heading panel-heading-01"><i class="fa fa-list-alt" aria-hidden="true"></i> Save Jobs List </div>

          <div class="ucon-panel-body">
           <table class="table">
          <thead>
              <tr>
              
              <th>ID</th>
              <th>Job Title</th>
              <th></th>
              <th></th>
              <th>Action</th>
              </tr>
          </thead>
          <tbody>
            <?php  
              // $save_jobs_list_db = mysqli_query($con, "SELECT * FROM save_jobs WHERE seeker_user_id = '$user_id'");
              // $save_jobs_list = mysqli_fetch_array($save_jobs_list_db);
              $i = 1;
              $save_jobs_list_db = mysqli_query($con,"SELECT * FROM save_jobs WHERE seeker_user_id = '$user_id'");
              while ($save_jobs_list = mysqli_fetch_array($save_jobs_list_db)) {
            ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $save_jobs_list['job_title'] ?></td>
                <td></td>
                <td></td>
                <td>
                 <a href="#" class="btn btn-success">View Job</a>  
                </td>
              </tr>
            <?php
              }
              
            ?>
          </tbody>
        </table>
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