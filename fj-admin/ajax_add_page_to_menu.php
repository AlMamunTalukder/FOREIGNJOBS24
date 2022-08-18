<?php include 'includes/db.php'; 


if (isset($_POST['page_id'])) {
	$page_id = $_POST['page_id'];
	$page_fetch = "SELECT * FROM exp_pages WHERE id = $page_id";
	$page_run = mysqli_query($connection, $page_fetch);
	$page_row = mysqli_fetch_array($page_run);
	$page_name = $page_row['page_name'];
	// Inserting data to manu.
	$insert_menu = "INSERT INTO `menu`(`menu_name`) VALUES ('$page_name') ";
	if (mysqli_query($connection,$insert_menu)) {
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
		while (	$menu_row = mysqli_fetch_array($menu_run)) {
				$menu_id  = $menu_row['id'];
				$menu_name = $menu_row['menu_name'];


			?>
				   <tr>   
                              <td><?php echo "$menu_name"; ?> </td>
                              <td><button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="view">
                                     <i class="fa fa-eye" aria-hidden="true"></i></button> 
                                      <a href="exp_menu.php?delete=<?php echo $menu_id ?>">
                                      <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                      
                            </tr>  
                            <?php } ?>                                     
                          </tbody>
                        </table>
			<?php
			
		

	}
}

?>