<?php 
	include("session_check.php");
	include 'config/confg.php'; 
	include("header.php");
	include("sidebar.php");


?>

<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content static-tables-page">
                    <div class="title-block">
                        <h1 class="title">  Country  Add   </h1>
                        <p class="title-description"> New Country  </p>
                    </div>
                    
					 <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   
                                    <form name="submit" id="submit" method="post" action="country_add_ac.php" enctype="multipart/form-data">
									
                                        <div class="form-group"> 
											<label class="control-label">Country Name</label> 
											<input type="text" class="form-control boxed" name="country_name" placeholder="Enter Category Name" required>  
										</div>
										
										 <div class="form-group"> 
											<label class="control-label">Country Map SVG Code </label> 
											<textarea name="map_code" rows="25" class="form-control boxed" placeholder="Enter Category Name" required="required"></textarea>  
										</div>
										
										 <button type="submit" class="btn btn-success btn-block btn-lg"> 
															<i class="fas fa-check-circle"></i> Add New
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