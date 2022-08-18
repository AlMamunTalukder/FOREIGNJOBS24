<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php';?>
</head>
<body>
<?php include 'header-menu.php';?>

<div class="inner-heading">
  <div class="container">
    <h3>All Jobs</h3>
  </div>
</div>





<div class="inner-content listing">
  <div class="container"> 



<div class="row search-row fadeInUp">
<form id="seach" name="search" action="" method="GET">

<div class="col-lg-3 col-sm-3 search-col relative">
<img src="image/copy-io.png" class="icon-docs icon-append">
<input name="q" class="form-control keyword has-icon" placeholder="What ?" value="" type="text">
</div>

<div class="col-lg-3 col-sm-3 search-col relative locationicon">
<img src="image/map-io.png" class="icon-docs icon-append">
<div class="input-group">
                <select name="location" class="form-control">
                  <option> All Categories ... </option>
                  <option value="">Civil & Construction</option>
                  <option value=""> Real Estate </option>
                  <option value=""> Medical & Healthcare </option>
                  <option value="">  Human Resources  </option>
                  <option value="">  Marketing & Communication  </option>
                </select>
              </div>

</div>

<div class="col-lg-3 col-sm-3 search-col relative locationicon">
<img src="image/map-io.png" class="icon-docs icon-append">
<input id="locSearch" name="location" class="form-control locinput input-rel searchtag-input has-icon tooltipHere" placeholder="Where ?" type="text">
</div>

<div class="col-lg-3 col-sm-3 search-col">
<button class="btn btn-primary btn-search btn-block">
<i class="fa fa-search"></i> <strong>Find</strong>
</button>
</div>
<input name="_token" value="" type="hidden">
</form>
</div>



    
    <!--Job Listing Start-->
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <div class="leftSidebar">
        <div class="filter">Search Listings</div>
          <div class="sidebarpad">
            <form>
             

              <h4>Categories</h4>
              <div class="input-wrap">
                <select name="category" class="form-control">
                  <option>Category </option>
                  <option value="designer">Web Designer</option>
                  <option value="developer">Web Developer</option>
                  <option value="seo">SEO Expert</option>
                </select>
              </div>
              <h4>City</h4>
              <div class="input-wrap">
                <select name="city" class="form-control">
                  <option>Select Cities </option>
                  <option value="01">Dhaka</option>
                  <option value="02">Rajshahi</option>
                  <option value="03">Sylhet</option>
                  <option value="04">Kajshahi</option>
                  <option value="05">Rajshahi</option>
                </select>
              </div>
         
              


              <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">Salary Range  <i class="fa fa-chevron-down down-ar"></i></h4>

                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                      <div class="input-wrap">
                <ul class="check">
                  <li>
                    <input value="Almost Like New" name="price" id="price" type="checkbox">
                    <label for="price">$100 to $199<span>4</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="price" id="price2" type="checkbox">
                    <label for="price2">$200 to $299<span>9</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="price" id="price3" type="checkbox">
                    <label for="price3">$300 to $399<span>17</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="price" id="price4" type="checkbox">
                    <label for="price4">$400 to $499<span>42</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="price" id="price5" type="checkbox">
                    <label for="price5">$500 to $599<span>12</span></label>
                  </li>
                </ul>
              </div>
                        </div>
                    </div>
                </div>
                <!-- / panel 2 -->



                 <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4 class="panel-title collapsed">Industry <i class="fa fa-chevron-down down-ar"></i></h4>
                        </div>
                    </span>

                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                         <div class="input-wrap">
                <ul class="check">
                  <li>
                    <input value="Almost Like New" name="contract" id="contract2" type="checkbox">
                    <label for="contract2">Civil & Construction<span>241</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="contract" id="contract3" type="checkbox">
                    <label for="contract3">Banking & Financial<span>159</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="contract" id="contract4" type="checkbox">
                    <label for="contract4">News & Media<span>172</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="contract" id="contract5" type="checkbox">
                    <label for="contract5">IT & Telecom<span>322</span></label>
                  </li>
                  
                </ul>
              </div>
                        </div>
                    </div>
                </div>
                <!-- / panel 2 -->



 <!-- panel 3 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <h4 class="panel-title collapsed">Job type <i class="fa fa-chevron-down down-ar"></i></h4>
                        </div>
                    </span>

                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                         <div class="input-wrap">
                <ul class="check">
                  <li>
                    <input value="Almost Like New" name="contract" id="contract33" type="checkbox">
                    <label for="contract33">Full Time<span>241</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="contract" id="contract44" type="checkbox">
                    <label for="contract44">Part Time<span>159</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="contract" id="contract55" type="checkbox">
                    <label for="contract55">Intership<span>172</span></label>
                  </li>
                  <li>
                    <input value="Almost Like New" name="contract" id="contract66" type="checkbox">
                    <label for="contract66">Freelance<span>322</span></label>
                  </li>
                  
                </ul>
              </div>
                        </div>
                    </div>
                </div>
                <!-- / panel 3 -->

              
              <div class="sub-btn">
                <input class="sbutn" value="Search Filter" type="submit">
              </div>
            </form>
            <div class="ad"><img src="images/ad.jpg" style="display: none !important;"></div>
          </div>
        </div>
      </div>


      <div class="col-md-9 col-sm-8 jobs-list-all">
  
        <ul class="listService">
          <li>
        <div class="listWrpService featured-wrap" id="featured_jobs">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="image/Apple-logo1.jpg" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="job-details.php">Marketing Graphic Design / 2D Artist</a></h3>
              <p>Design Communication Studio</p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
                 <small class="label label-default adlistingtype">Part-time</small>

              </ul>
              
              
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="#">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
      
      
      
      
      
          <li>
        <div class="listWrpService featured-wrap" id="featured_jobs">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="image/beats.png" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="job-details.php">Technical Database Engineer</a></h3>
              <p>Design Communication Studio</p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
                <small class="label label-default adlistingtype">Full-time</small>
              </ul>
              
              
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="#">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
          <li>
        <div class="listWrpService featured-wrap">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="image/b-logo.png" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="job-details.php">Senior UI &amp; UX Designer</a></h3>
              <p>Design Communication Studio</p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
                <small class="label label-default adlistingtype">Full-time</small>
               
              </ul>
              
              
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="#">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
          <li>
        <div class="listWrpService featured-wrap">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="image/pepsi.png" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="job-details.php">Marketing Graphic Design / 2D Artist</a></h3>
              <p>Design Communication Studio</p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
                <small class="label label-default adlistingtype">Premium job</small>

              </ul>
              
              
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="#">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
          <li>
        <div class="listWrpService featured-wrap">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="image/Apple-logo1.jpg" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="job-details.php">Technical Database Engineer</a></h3>
              <p>Design Communication Studio</p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
               <small class="label label-default adlistingtype">Part-time</small>
              </ul>
              
              
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="#">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
          <li>
        <div class="listWrpService featured-wrap">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="image/beats.png" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="job-details.php">Senior UI &amp; UX Designer</a></h3>
              <p>Design Communication Studio</p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
                <small class="label label-default adlistingtype">Freelance</small>

              </ul>
              
              
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="#">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
          <li>
        <div class="listWrpService featured-wrap">
          <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-3">
              <div class="listImg"><img src="image/b-logo.png" alt=""></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-9">
            
            <div class="row">
            <div class="col-md-9">
              <h3><a href="job-details.php">Marketing Graphic Design / 2D Artist</a></h3>
              <p>Design Communication Studio</p>
              <ul class="featureInfo innerfeat">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Atlanta, GA</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i> Dec 30, 2015 - Feb 20, 2016 </li>
              <small class="label label-default adlistingtype">Freelance</small>
              </ul>
              
              
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</p>
              
              </div>
              
              <div class="col-md-3">
              <div class="click-btn apply"><a href="#">Apply Now</a></div>
              
              
              </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </li>
        </ul>


      </div>
    </div>
    
    <!--Job Listing End--> 
  </div>
</div>



    <div class="browse-category">
  <div class="container">
    <div class="heading-title">Post a job <span>Now</span></div>
    <div class="headTxt">
    <div class="click-btn apply"><a href="#">Apply Now</a></div></div>
</div>
</div>


<?php include 'footer.php';?>


<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/carousel.js"></script>
<script type="text/javascript" src="js/js_script.js"></script>


</body>
</html>