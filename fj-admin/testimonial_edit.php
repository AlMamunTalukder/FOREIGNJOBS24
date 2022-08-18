<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");
	
	$id = $_REQUEST["id"];
	
	 $page_run = mysqli_query($con,"SELECT * FROM testmonial_manage WHERE id = '$id'");
	  $page_row = mysqli_fetch_array($page_run);
	 $id = $page_row['id'];
	
		$name = $page_row['name'];
		$designation = $page_row['designation'];
		$description = $page_row['description'];
		$photo = $page_row['photo'];

?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  Testimonial Edit   </h1>
                        <p class="title-description"> Update Testimonial  </p>
                    </div>
                    
					 <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   
                                    <form name="submit" id="submit" method="post" action="testimonial_edit_ac.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
									
										
									
                                        <div class="form-group"> 
											<label class="control-label">Name</label> 
											<input type="text" class="form-control boxed" name="name" placeholder="Enter Name " value="<?php echo $name; ?>" required>  
										</div>
										
										 <div class="form-group"> 
											<label class="control-label">Designation</label> 
											<input type="text" class="form-control boxed" name="designation" placeholder="Enter Designation "  value="<?php echo $designation; ?>" required>  
										</div>
										
										 <div class="form-group"> 
											<label class="control-label">Testmonial</label> 
											<textarea name="description" class="form-control boxed" placeholder="Enter Testmonial " required="required"><?php echo $description; ?></textarea>  
										</div>
										
										 <div class="form-group"> 
										 <img src="testimonial/<?php echo $photo; ?>" class="img-responsive" >
										 
											<label class="control-label">Photo</label> 
								
											 
											<input name="testimonial"  class="form-control" type="file" placeholder="Testimonial Image">
											
										</div>
										
										
										
										 <button type="submit" class="btn btn-success btn-block btn-lg"> 
															<i class="fas fa-check-circle"></i> Update
										</button>
										
                                    </form>
									
                                </div>
                            </div>
							
								<div class="col-md-6"></div>
				
            </section>

                </article>


<?php
	include("footer.php");
?>