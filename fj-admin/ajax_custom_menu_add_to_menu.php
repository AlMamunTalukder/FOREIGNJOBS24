<?php include 'includes/db.php'; 


if (isset($_POST)) {
	$custom_menu_link = $_POST['custom_menu_link'];
	$custom_menu_name = $_POST['custom_menu_name'];
	$insert_menu = "INSERT INTO `menu`(`menu_name`, `menu_link`) VALUES ('$custom_menu_name','$custom_menu_link') ";
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