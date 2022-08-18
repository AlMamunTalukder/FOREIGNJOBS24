<?php include 'includes/header.php'; ?>

    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
                <i class="fa fa-bars"></i>
            </button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                                <div class="underline"></div>
                            </div>
                        </form>
                    </div>
       
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                        
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div> <span class="name">
                      John Doe
                    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1"> <a class="dropdown-item" href="#">
                      <i class="fa fa-user icon"></i>
                      Profile
                    </a> <a class="dropdown-item" href="#">
                      <i class="fa fa-bell icon"></i>
                      Notifications
                    </a> <a class="dropdown-item" href="#">
                      <i class="fa fa-gear icon"></i>
                      Settings
                    </a>
                                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="login.html">
                      <i class="fa fa-power-off icon"></i>
                      Logout
                    </a> </div>
                            </li>
                        </ul>
                    </div>
                </header>
               <?php include 'includes/sidebar.php'; ?>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content items-list-page">
                  <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Menu </h3>
                                    
                                    <p class="title-description"> List of sample menus - e.g. home, about, service, etc... </p>
                                </div>
                            </div>
                        </div>
                   <div class="row">
                     <div class="col-md-4 add_menu_col">
                       <h3>Add Menu</h3>
                       <hr>
                        <div class="menu_add_form">
                            <div class="card page_add_menu">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Add Pages </h3>
                                        </div>
                                        <section class="example">
                                            <table class="table">
                                              <?php 
                                                  $page_fetch = "SELECT * FROM exp_pages ORDER BY id DESC";
                                                  $page_run = mysqli_query($connection, $page_fetch);

                                               ?>
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Page name</th>
                                                        <th>Add</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php 
                                                       while ($page_row = mysqli_fetch_array($page_run)) {
                                                $page_id = $page_row['id'];
                                                $page_name = $page_row['page_name'];
                                                   ?>
                                                    <tr>
                                                       
                                                        <td><?php echo "$page_name"; ?> </td>
                                                        <td><button class="btn btn-success btn-sm add_page_to_menu"
                                                         id="<?php echo $page_id ?> "><i class="fa fa-check-square" aria-hidden="true"></i></button> </td>
                                                     
                                                    </tr>
                                                    <?php } ?>
                                                  
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                </div>
                                <hr class="menu_add_hr">
                                <div class="custom_menu_add">
                                   <div class="card-title-block">
                                            <h4 class="title"> Add Custom link </h4>
                                            <hr>
                                        </div>
                                  <form action="" id="custom_menu_add_form">
                                    <div class="form-group"> 
                                      <label class="control-label">Link</label> 
                                      <input type="text" class="form-control boxed" name="custom_menu_link" value="http://"> 
                                    </div>
                                    <div class="form-group"> 
                                      <label class="control-label">Link Name</label> 
                                      <input type="text" class="form-control boxed" name="custom_menu_name"> 
                                    </div>
                                    
                                       <div class="add_btn">
                                         <button class="btn btn-success btn-sm" id="add_custom_menu">Add Manu</button> 
                                       </div>
                                    
                                  </form>
                                </div>
                        </div>
                        <br>
                     </div>
                     <div class="col-md-8">
                      <?php 
                        if (isset($_GET['delete'])) {
                          $delete_id = $_GET['delete'];
                          $delete_menu = "DELETE FROM `menu` WHERE id =$delete_id";
                          if (mysqli_query($connection,$delete_menu)) {
                               echo "<div class='alert alert-danger' role='alert'>
                                            Menu has been deleted
                                    </div>";
                                 header("Refresh:0; url=exp_menu.php");
                          }
                        }


                       ?>
                       <h3> Menu Table</h3>
                       <hr>
                       <div class="page_table" id="page_table">
                        <?php 

                           $menu_fetch = "SELECT * FROM menu ORDER BY id DESC";
                            $menu_run = mysqli_query($connection,$menu_fetch);
                            ?>

                           <table class="table ">
                              <thead>
                               <tr>   
                                <th scope="col">Menu</th>
                                <th scope="col">Action</th>
                               </tr>
                              </thead>
                           <tbody>
                                               
                          <?php
                          while ( $menu_row = mysqli_fetch_array($menu_run)) {
                              $menu_id  = $menu_row['id'];
                              $menu_name = $menu_row['menu_name'];


                            ?>
                                 <tr>   
                                   <td><?php echo "$menu_name"; ?> </td>
                                    <td><button class="btn btn-info" data-toggle="modal" data-target="#menu_view_modal">
                                     <i class="fa fa-eye" aria-hidden="true"></i></button> 
                                      <a href="exp_menu.php?delete=<?php echo $menu_id ?>">
                                      <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                                            
                                  </tr>  
                                <?php } ?>                                     
                             </tbody>
                            </table>


                        
                     </div>
                     </div>
                   </div>     
                  </div>
                 
                    
                     

                  
                </article>
























<!-- Modal -->
<div class="modal fade" id="menu_view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




































  <?php include 'includes/footer.php'; ?>





  <script type="text/javascript">
$(document).ready(function(){

  $('.add_page_to_menu').click( function(event){ 
        event.preventDefault(); 
           var page_id = $(this).attr("id");  
           $.ajax({  
                url:"ajax_add_page_to_menu.php",  
                method:"POST",  
                data:{page_id:page_id},  
                 dataType:"text", 
                success:function(data){  
                   $('#page_table').html(data)
                 

                }  
           });  
      });   



  $('#add_custom_menu').click(function(event){
    event.preventDefault();
      $.ajax({
            url: "ajax_custom_menu_add_to_menu.php",
            method: "post",
            data:$('#custom_menu_add_form').serialize(),
            dataType:"text",
            success:function(data){
             $('#page_table').html(data)

            }



      });


  });



});

</script>