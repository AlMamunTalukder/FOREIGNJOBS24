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
      <div class="col-md-12">

<style>
.planContainer {
  display: flex;
  flex-wrap: wrap;
  margin: 1em;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
}

.plan {
  background: white;
  width: 20em;
  box-sizing: border-box;
  text-align: center;
  margin: 1em;
  margin-bottom: 1em;
}
.plan .titleContainer {
  background-color: #9b59b6;
  padding: 1.4em;
}
.plan .titleContainer .title {
  font-size: 1.7em;
  text-transform: uppercase;
  color: white;
  font-weight: 700;
}
.plan .titleContainer .price {
  font-size: 1.45em;
  padding-top: 1em;
  padding-bottom: 0.25em;
  color: white;
  font-weight: 500;
  margin-top: 0;
  display: inline-block;
  width: 80%;
}
.plan .titleContainer .price p {
  font-size: 1.45em;
  display: inline-block;
  margin: 0;
}
.plan .titleContainer .price span {
  font-size: 1.0875em;
  display: inline-block;
}
.plan .infoContainer {
  padding: 1em;
  color: #2d3b48;
  box-sizing: border-box;
}
.plan .infoContainer .desc {
  padding: 1em 0;
  border-bottom: 2px solid #efefef;
  margin: 0 auto;
  width: 90%;
}
.plan .infoContainer .desc em {
  font-size: 1em;
  font-weight: 500;
}
.plan .infoContainer .features {
  font-size: 1em;
  list-style: none;
  padding-left: 0;
}
.plan .infoContainer .features li {
  padding: 0.5em;
}
.plan .infoContainer .selectPlan {
  border: 2px solid #9b59b6;
  padding: 0.75em 1em;
  border-radius: 2.5em;
  cursor: pointer;
  transition: all 0.25s;
  margin: 1em auto;
  box-sizing: border-box;
  max-width: 70%;
  display: block;
  font-weight: 700;
}
.plan .infoContainer .selectPlan:hover {
  background-color: #9b59b6;
  color: white;
}
.price{
  background: transparent;
}
@media screen and (max-width: 25em) {
  .planContainer {
    margin: 0;
  }
  .planContainer .plan {
    width: 100%;
    margin: 1em 0;
  }
}
</style>
<div class="planContainer">
<?php  
$package_db = mysqli_query($con,"SELECT * FROM package");
while ($package_data = mysqli_fetch_array($package_db)) {
?>
  <div class="plan">
    <div class="titleContainer">
      <div class="title"><?php echo $package_data['package_name']; ?></div>
      <div class="price">
        <p style="color: #fff;"><?php echo $package_data['package_fee']; ?></p>
      </div>
    </div>
    <div class="infoContainer">
      <ul class="features">
        <li><strong><?php echo $package_data['package_limit']; ?></strong> Job Post</li>
      </ul><a href="<?php echo $base_url; ?>job-recruiter/subscribe_payment.php?package_name=<?php echo $package_data['package_id']; ?>" class="selectPlan">Select Plan</a>
    </div>
  </div>
<?php } ?>
</div>

      </div>
      <div class="col-md-12 text-center" style="margin-top: 40px;">
        <a href="<?php echo $base_url; ?>job-recruiter/dashboard.php" class="btn btn-success">Go To Deshbord</a>
      </div>
    </div>
  </div>
</div>







<?php	include '../footer.php';
		include '../footer_script.php';

?>

