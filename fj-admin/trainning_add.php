<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");


?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  Trainning  Add   </h1>
                        <p class="title-description"> New Trainning  </p>
                    </div>
                    
					 <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   
                                    <form name="submit" id="submit" method="post" action="trainning_add_ac.php" enctype="multipart/form-data">
									
                                        <div class="form-group"> 
											<label class="control-label">Select Category </label> 
											<select class="form-control boxed" name="category_name" required>
											<option value="">Select</option>
											 <?php 
													
													 $page_run = mysqli_query($con,"SELECT * FROM trainning_category ORDER BY ID DESC");
													 while ($page_row = mysqli_fetch_array($page_run)) {
													 $category_name = $page_row['category_name'];
													 
													 
													 
                                                   ?>
											<option value="<?php echo $category_name; ?>"><?php echo $category_name; ?></option>
											<?php } ?>
											</select> 
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Course Title </label> 
											<input type="text" class="form-control boxed" name="title" placeholder="Enter Course Title" required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label">Course Description </label> 
											<textarea name="description" class="form-control boxed" placeholder="Enter Description" ></textarea>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Date  </label> 
											<input type="text" class="form-control boxed" name="dates" placeholder="Enter Date " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Duration  </label> 
											<input type="text" class="form-control boxed" name="duration" placeholder="Enter Duration " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> No. of Classes/ Sessions  </label> 
											<input type="text" class="form-control boxed" name="no_of_class" placeholder="Enter No. of Classes/ Sessions " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Class Schedule   </label> 
											<input type="text" class="form-control boxed" name="class_sechdule" placeholder="Enter Class Schedule  " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Total Hours  </label> 
											<input type="text" class="form-control boxed" name="total_houre" placeholder="Enter Total Hours " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Last Date of Registration  </label> 
											<input type="text" class="form-control boxed" name="last_date" placeholder="Enter Last Date of Registration " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Venue  </label> 
											<input type="text" class="form-control boxed" name="venue" placeholder="Enter Venue " required>  
										</div>
										
										
										
										<div class="form-group"> 
											<label class="control-label"> Fees  </label> 
											<input type="text" class="form-control boxed" name="fees" placeholder="Enter Fees " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Contact Numbers  </label> 
											<input type="text" class="form-control boxed" name="contacts" placeholder="Enter Contact Numbers " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Email  </label> 
											<input type="text" class="form-control boxed" name="email" placeholder="Enter Email " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Who Can Attend  </label> 
											<input type="text" class="form-control boxed" name="who_can_attend" placeholder="Enter Who Can Attend  " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Tutor Name  </label> 
											<input type="text" class="form-control boxed" name="tutor_name" placeholder="Enter Tutor Name " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label"> Tutor Designation  </label> 
											<input type="text" class="form-control boxed" name="tutor_desig" placeholder="Enter Tutor Designation " required>  
										</div>
										
										<div class="form-group"> 
											<label class="control-label">Tutor Details </label> 
											<textarea name="tutor_details" class="form-control boxed" placeholder="Enter Details" ></textarea>  
										</div>
										
										 <button type="submit" class="btn btn-success btn-block btn-lg"> 
															<i class="fas fa-check-circle"></i> Add New
										</button>
										
                                    </form>
									
                                </div>
                            </div>
							
								 </div>
								  </div>
								   </div>
				
            </section>

                </article>

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
	
<?php
	include("footer.php");
?>