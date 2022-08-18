>
<?php
	include("fj-admin/config/confg.php");
	//@System Analyst/Programmer : Md. Saiful Islam Sagor.
	//@Author : Expert IT Solution
	//@Cell : +88 01766 40 98 19
	//@Website : www.expertitbd.com

	$content_manage245 = mysqli_query($con,"SELECT * FROM content_manage WHERE id = '6'");
	$content_manage = mysqli_fetch_array($content_manage245);
	
	$id_con = $content_manage['id'];
	$title_con = $content_manage['title'];
	$con_desc = $content_manage['con_desc'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $title_con; ?> </title>
<?php include 'head.php';?>
</head>
<body>
<?php include 'header-menu.php';?>

<div class="inner-heading">
  <div class="container">
    <h3>  <?php echo $title_con; ?>  </h3>
  </div>
</div>


<div class="inner-content listing">
  <div class="container"> 



<div class="row">
      <div class="col-md-12 col-sm-12">
  		<div align="left" style="text-align:left; vertical-align:middle;">
			<?php echo $con_desc; ?>
		</div>
     
      </div>
    </div>
    
    <!--Job Listing End--> 
  </div>
</div>



 
<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>

</body>
</html>