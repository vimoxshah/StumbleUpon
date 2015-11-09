<?php include 'includes/overall/header.php';?>
<?php include 'core/init.php';?>
		
<center>	<p id="big"><font color="#BEE554"><h2><b>Welcome to the most powerful way to discover your favorite content. 
		
	</center>
	<?php	
			
		$s_id=$_SESSION['user_id'];
		$username= $user_data['username'];
		if(isset($s_id)){
			
	?>
			
	<?php
			echo ' <b> <a href ="logout.php">Log out </a> </b> &nbsp  &nbsp';
			echo ' <b><a href ="changepassword.php">Change Password </a> </b>  &nbsp  &nbsp';
			echo '<b> <a href="settings.php">Settings</a></b>  &nbsp  &nbsp';
			
			
			?>
			
			<b><a href="<?php echo$username; ?>" >Profile</b></a><br><br><br>
			<center>
			<a href="#" class="myButton" onclick="window.open('stumbleup.php')">Stumble</a>
			</center>
		<?php
			
		}	else {
				echo '';
		}
		
		
		?>

<?php include 'includes/overall/footer.php';?>
                                       
