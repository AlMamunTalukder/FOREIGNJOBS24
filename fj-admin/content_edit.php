<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");


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
                        <h1 class="title">  Content Edit   </h1>
                        <p class="title-description">Content Edit </p>
                    </div>
                    
					 <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   <?php
								   		$id = $_REQUEST["id"];
										
										 $content_manage245 = mysqli_query($con,"SELECT * FROM content_manage WHERE id = '$id'");
										 $content_manage = mysqli_fetch_array($content_manage245);
										 	
											$id_con = $content_manage['id'];
											$title = $content_manage['title'];
											$con_desc = $content_manage['con_desc'];
								   ?>
                                    <form name="submit" id="submit" method="post" action="content_edit_ac.php" enctype="multipart/form-data">
									<input type="hidden" name="id_con" value="<?php echo $id_con; ?>"> 
                                        <div class="form-group"> 
											<label class="control-label">Section Title</label> 
											<input type="text" class="form-control boxed" name="title" value="<?php echo $title; ?>" disabled="disabled" required>  
										</div>
										
										 <div class="form-group"> 
											<label class="control-label">Description</label> 
											<textarea name="con_desc" class="form-control boxed" placeholder="Enter Category Name" required="required"><?php echo $con_desc; ?></textarea>  
										</div>
										
										 <button type="submit" class="btn btn-warning btn-block btn-lg"> 
															<i class="fas fa-check-circle"></i> Update Content
										</button>
										
                                    </form>
									
                                </div>
                            </div>
						</div>	
						
            		</section>

                </article>



<?php
	include("footer.php");
?>