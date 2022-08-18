<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");

	$stmt565 = mysqli_query($con,"SELECT * FROM contact_manage where id = '1'");
	$contact_manage = mysqli_fetch_array($stmt565);
	
	$stmt565 = mysqli_query($con,"SELECT * FROM social_manage where id = '1'");
	$social_manage = mysqli_fetch_array($stmt565);
	
?>


<!-- Place inside the <head> of your HTML -->
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
	menubar:false,
    statusbar: false,
	plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor table code"
   ],

	 content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image | preview media fullpage | forecolor backcolor emoticons | inserttable | code table", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
	
	


	

 });
</script>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  Contact Manage   </h1>
                        <p class="title-description"> Contact Information Update  </p>
                    </div>
                    
					 <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   
                                    <form name="submit" id="submit" method="post" action="contact_us_sett_ac.php" enctype="multipart/form-data">

                                        <div class="form-group"> 
											<label class="control-label">Address</label> 
											 <textarea name="address_con" class="form-control" id="text"><?php echo $contact_manage["address_con"]; ?></textarea>
										</div>
										
										 <div class="form-group"> 
											<label class="control-label">Google Map Link </label> 
											<input name="google_map" type="text" class="form-control" id="text"  Placeholder="Enter Google Map Iframe Code"> 
										</div>
										
										 <div class="form-group"> 
											<label class="control-label">Google Map Show</label> 
											 <?php echo $contact_manage["google_map"]; ?>
										</div>
										
										<div class="form-group"> 
											<label class="control-label">Facebook </label> 
											<input name="facebook" type="text" class="form-control" id="text" value="<?php echo $social_manage["facebook"]; ?>">
										</div>
										
										<div class="form-group"> 
											<label class="control-label">Twitter </label> 
											<input name="twitter" type="text" class="form-control" id="text" value="<?php echo $social_manage["twitter"]; ?>">
										</div>
										
										<div class="form-group"> 
											<label class="control-label">Google + </label> 
											<input name="google_plus" type="text" class="form-control" id="text" value="<?php echo $social_manage["google_plus"]; ?>">
										</div>
										
										<div class="form-group"> 
											<label class="control-label">Linked IN </label> 
											 <input name="linkedin" type="text" class="form-control" id="text" value="<?php echo $social_manage["linkedin"]; ?>">
										</div>
										
										<div class="form-group"> 
											<label class="control-label">Youtube </label> 
											<input name="youtube" type="text" class="form-control" id="text" value="<?php echo $social_manage["youtube"]; ?>">
										</div>
										 
										
										
										
										 <button type="submit" class="btn btn-success btn-block btn-lg"> 
															<i class="fas fa-check-circle"></i> Update
										</button>
										
                                    </form>
									
                                </div>
                            </div>
							
								<div class="col-md-6">
									<!--<div class="card card-block sameheight-item">
										<div class="title-block">
											<h3 class="title"> Boxed Inputs Validation </h3>
										</div>
										<form role="form">
											<div class="form-group has-success"> <label class="control-label" for="inputSuccess1">Input with success</label> <input type="text" class="form-control boxed" id="inputSuccess1"> <span class="has-success">Success message.</span> </div>
											<div class="form-group has-warning">
											<label class="control-label" for="inputWarning1">Input with warning</label> <input type="text" class="form-control boxed" id="inputWarning1"> <span class="has-warning">Warning message.</span> </div>
											<div class="form-group has-error">
											<label class="control-label" for="inputError1">Input with error</label> <input type="text" class="form-control boxed" id="inputError1"> <span class="has-error">Error message.</span> </div>
											<div class="form-group has-success  has-feedback">
											<label class="control-label" for="inputSuccess2">Input with success icon</label> <input type="text" class="form-control boxed" id="inputSuccess2"> <span class="fa fa-check form-control-feedback"></span> </div>
											<div
												class="form-group has-warning  has-feedback"> <label class="control-label" for="inputWarning2">Input with warning icon</label> <input type="text" class="form-control boxed" id="inputWarning2"> <span class="fa fa-exclamation form-control-feedback"></span> </div>
									<div class="form-group has-error  has-feedback"> <label class="control-label" for="inputError2">Input with error icon</label> <input type="text" class="form-control boxed" id="inputError2"> <span class="fa fa-times form-control-feedback"></span> </div>
									</form>
								</div>
							</div>-->
				</div>
				
            </section>

                </article>


<?php
	include("footer.php");
?>