<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");

	include 'paginate.php';

	

//////////////////////////////////////////////////////////////////////////////////////////////////////
	// this is for pagination
	//////////////////////////////////////////////////////////////////////////////////////////////////////
	// set $limit (per page) for pagination
	$limit = 25;
	
	
						 //show records
           			 	$query =  mysqli_query($con,"SELECT * FROM testmonial_manage ORDER BY ID ASC ");
						$total_rows = mysqli_num_rows($query);
	
	$page;
	// prepare $_GET['page'] variable for pagination
	if(isset($_GET['page']) && (int)$_GET['page']){
		
		if($_GET['page'] > ceil($total_rows/$limit)){
			$page = 1;
		} else {
			$page = $_GET['page'];
		}
		
	} else {
		$_GET['page'] = 1;
		$page = 1;
	}
	
	

	$current = ($page - 1) * $limit;
	
	// current set of data to be displayed
	$current_display = ceil($total_pages/$_GET['page']);

?>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
             selector: "textarea",
             menubar: false,
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
                        <h1 class="title">  Testimonial Manage   </h1>
                        <p class="title-description"> All Testimonial List</p>
                    </div>
                    <section class="section">
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <section class="example">
										<div class="table-responsive">
											<h6>Pages Title</h6>
											<form method="post" action="page-edit-ac.php">
	                                            <?php 
		                                            $page_id = addslashes($_REQUEST["page_id"]);
													 $page_run = mysqli_query($con,"SELECT * FROM pages WHERE id = '$page_id'");
													 while ($page_row = mysqli_fetch_array($page_run)) {													
														$name = $page_row['title'];
														$designation = $page_row['designation'];
	                                            ?>
	                                            		<input type="hidden" name="page_id" value="<?php echo $_GET['page_id'] ?>">
	                                            		<input name="page_title" placeholder="Page Title" class="form-control" type="text" value="<?php echo $name; ?>" required="">

			                                            <br><h6>Pages Content</h6>
														<textarea name="page_description" class="form-control" placeholder="Job Description" ><?php echo $designation; ?></textarea>

	                                        	<?php } ?>
	                                        	<br>
	                                        	<button name="personal_details" type="submit" class="btn btn-success">Update Page</button>
	                                        </form>
											</div>
                                        </section>
										
										<div class="row">
											<div class="col-md-12" align="center">
											
												<nav>
													<ul class="pagination">
													
														<?php
														//pagination
														echo paginate($total_rows, $_SERVER['PHP_SELF'] , $limit, $_GET['page'])
														?>
													
													</ul>
												</nav>
											
											</div>
										</div>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>


<?php
	include("footer.php");
?>