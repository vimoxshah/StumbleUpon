<?php include 'includes/overall/header.php';?>
<?php include 'core/init.php';?>
<?php 
admin_protect();
	if(is_admin($s_id) === true){
			echo '<h1> Admin </h1><br>
				<p>Admin Page</p>';
		}
?>





<?php include 'includes/overall/footer.php';?>