<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");
	
	$job_id = $_REQUEST["job_id"];
	$job_category = $_REQUEST["job_category"];
	

?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  CV Bank Send   </h1>
                      
                    </div>
                    
					 <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   
                                    <form name="submit" id="submit" method="post" action="cv_bank_send.php?job_id=<?php echo $job_id; ?>&job_category=<?php echo $job_category; ?>" enctype="multipart/form-data">
									
										
									
									<h1 class="title">  Job ID : <?php echo $job_id = $_REQUEST["job_id"]; ?>   </h1>
									<h1 class="title">  Category : <?php echo $job_category = $_REQUEST["job_category"]; ?>   </h1>
									
                                        <div class="form-group"> 
											<label class="control-label">Number of CV to Send</label> 
											<input type="number" class="form-control boxed" name="cv_number" placeholder="Enter Number " required>  
										</div>
										
										
										 <button type="submit" class="btn btn-success btn-block btn-lg"> 
															<i class="fas fa-check-circle"></i> Send
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