<?php
include 'core/init.php';
include 'includes/head.php'; 
include 'includes/header.php';
?>
<div id="center">

<?php
if(isset($_GET['username']) === true && empty($_GET['username']) === false) {
	$username = $_GET['username'];
	if(user_exist($username) === true){
	$user_id      = user_id_from_username($username);
	$profile_data = user_data($user_id, 'first_name', 'last_name', 'email');
	?>
	<h1><?php echo $profile_data['first_name']; ?>'s Profile 
	
	</h1>
	
	<div class="profile">
	<h2> Hello,<?php echo $user_data['first_name'];?>!! </h2>
	<?php
		if(isset($_FILES['profile']) === true){
			if(empty($_FILES['profile']['name']) === true){
				echo 'Please Choose a File';
			}
			else{
				$allowed= array('jpg', 'jpeg','gif', 'png');
				$file_name = $_FILES['profile']['name'];
				$file_extn = strtolower(end(explode('.', $file_name)));
				$file_temp=  $file_name = $_FILES['profile']['tmp_name'];
					if(in_array($file_extn, $allowed) === true){
						$current= $user_data['username'];
						change_profile_image($s_id, $file_temp, $file_extn);
						header('Location: ' . $current);
						exit();
						}
						else{
							echo 'Incorrect file format .Allowed Format are :';
							echo implode(', ' , $allowed);
						}
			}
		}
	
		if(empty($user_data['profile']) === false){
			echo '<img src ="', $user_data['profile'], '" alt="', $user_data['first_name'], '\'s Profile Image">';
			
		}
	?>
	<form action =	"" method="POST" enctype="multipart/form-data">
		<input type="file" name="profile"> <br>
		<input type="submit" class ="hvr-back-pulse" style="width:80px; height:40px;"><br>
	
	</div>
</form>
	<a href="settings.php">Edit Profile</a><br><br>
	<p>Your User Name:
	<?php echo $user_data['username']; ?></p>
	<p>Your Last Name:
	<?php echo $user_data['last_name'];?></p>
	<p>Your Email Id :
	<?php echo $profile_data['email'];?></p>
	</div>
	<?php
	}else{
		echo 'Sorry,that user not exists';
	}
	
}else{
	header('Location : index.php');
	exit();
}
include 'includes/overall/footer.php'; 
?>
