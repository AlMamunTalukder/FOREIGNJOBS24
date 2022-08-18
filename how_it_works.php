
<?php 
	$content_manage245 = mysqli_query($con,"SELECT * FROM content_manage WHERE id = '2'");
	$content_manage = mysqli_fetch_array($content_manage245);
	
	$id_con = $content_manage['id'];
	$title = $content_manage['title'];
	$con_desc = $content_manage['con_desc'];
?>

<?php echo $con_desc; ?>

<!--<div class="works-wrap">
  <div class="container">
    <div class="heading-title">How it <span>works</span></div>
    <div class="headTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et viverra nulla. Fusce at rhoncus diam, quis convallis ligula.
      Cras et ligula aliquet, ultrices leo non, scelerisque justo. Nunc a vehicula augue.</div>
    <div class="row works-service">
      <li class="col-md-4">
        <div class="worksIcon"><i class="fa fa-files-o" aria-hidden="true"></i></div>
        <h3>Create Your Resume</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
      <li class="col-md-4">
        <div class="worksIcon"><i class="fa fa-comment-o" aria-hidden="true"></i></div>
        <h3>Apply for Your Jobs</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
      <li class="col-md-4">
        <div class="worksIcon"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
        <h3>Hired Now</h3>
        <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed eniminim veniam quis nostrud exercition eullamco laborisaa</p>
      </li>
    </div>
  </div>
</div>-->