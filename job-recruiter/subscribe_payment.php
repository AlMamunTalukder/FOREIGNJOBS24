<?php
  include("../fj-admin/config/confg.php");
  include("../session_check.php");

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
      <div class="col-md-3"></div>
      <div class="col-md-6">
<h4>Your Package Amount Send This Number XXXXXXXXXXX</h4>
<form name="submit" id="submit" method="post" action="subscribe_ac.php" enctype="multipart/form-data"> 
  <input type="hidden" name="subscribe_type" value="<?php echo $_GET['package_name']; ?>">
  <div class="form-group">
    <label for="your_amount">Your Amount</label>
    <input name="user_amount" type="text" class="form-control" id="your_amount" placeholder="Enter Your Amount">
  </div>
  <div class="form-group">
    <label for="your_amount">Your Transaction ID</label>
    <input name="user_transaction_id" type="text" class="form-control" id="your_amount" placeholder="Enter Transaction ID">
  </div>
  <div class="form-group">
    <label for="your_amount">Your Phone Number</label>
    <input name="user_phone_number" type="text" class="form-control" id="your_amount" placeholder="Enter Phone Number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>







<?php	include '../footer.php';
		include '../footer_script.php';

?>

