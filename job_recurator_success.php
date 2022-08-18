<?php
include("fj-admin/config/confg.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
<?php include 'header-menu.php';?>

<div class="inner-heading">
  <div class="container">
    <h3>Registration as Job Recurator </h3>
  </div>
</div>




<div class="inner-content loginWrp">
  <div class="container"> 
   
    <div class="row">
      <div class="col-md-3 col-sm-2"></div>
      <div class="col-md-6 col-sm-8">
        <div class="login">
          <div class="contctxt" align="center">Success... Now You can login.</div>

         <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i>  <a href="login.php">Login Here</a></div>


        </div>
      </div>
      <div class="col-md-3 col-sm-2"></div>
    </div>
    

</div>
</div>





<?php 	include 'footer.php';
		include 'footer_script.php';
?>

<script>
 

function pass_chk_func() {
	
	password = $('#password').val();
	c_password = $('#c_password').val();
	
	$.ajax({
			   url: 'pass_chk.php',
			   
			   data: {
				   password: password,
				   c_password: c_password
				   
			   },
			   type: 'post',
			   success: function (output) {
				   
				   $('#pass_chk').html(output);
			   }
		   });
}



function email_address_check() {
	
	rec_email = $('#rec_email').val();
	
	$.ajax({
			   url: 'email_address_check_recurtor.php',
			   
			   data: {
				 
				   rec_email: rec_email
				   
			   },
			   type: 'post',
			   success: function (output) {
				   
				   $('#email_address_check').html(output);
			   }
		   });
}




</script>