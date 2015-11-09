<?php
include 'core/init.php';
include 'includes/head.php'; 
include 'includes/header.php';
function output_errors($errors){
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
if(empty($_POST) === false){
	$required_fields= array('current_password','password','password_again');
	foreach($_POST as $key=>$value){
		if(empty($value) && in_array($key,$required_fields) === true){
			$errors[]= 'Fields marked with an asterisk are required';
			break 1;
		}
		
	}
	if(md5($_POST['current_password']) === $user_data['password']) {
		//$errors[]= 'Your Current Password Not match';
		if(md5($_POST['password']) !== md5($_POST['password_again'])){
			$errors[]= 'your password do not match ';
			}else if(strlen($_POST['password']) <6){
				$errors[]= 'Your password must be at least 6 character';
			}
	}else{
		$errors[] ="Your password is Incorrect";
	}
}
?>
<div id="center">
<h1>Change Your Password</h1>
<?php
if(isset($_GET['success']) && empty($_GET['success'])){
	
	echo ' <b> <a href ="logout.php">Log out </a> </b> &nbsp  &nbsp';
	echo ' <b><a href ="changepassword.php">Change Password </a> </b>&nbsp  &nbsp';
	echo '<b> <a href="settings.php">Settings</a></b>  &nbsp  &nbsp';
	?><b><a href="<?php echo $user_data['username']; ?>" >Profile</b></a><br><br>
	<?php
	echo 'Your password Successfully Chnaged';	
} 
	else{
		 if(isset($_GET['force']) && empty($_GET['force'])){
			?> 
			<p> You must change your password </p>
	<?php		 
		 }
		if(empty($_POST) === false && empty($errors) === true){
		change_password($s_id,$_POST['password']);
		header('Location: changepassword.php?success');
		} else if(empty($errors) === false){
			echo output_errors($errors);
		}
?>
<form action="" method="POST">
	<ul>
		<li>
		    Current Password*:<br>
			<input type="password" name="current_password">
		</li>
		<li>
		    New Password*:<br>
			<input type="password" name="password">
		</li>
		<li>
		    Confirm Password*:<br>
			<input type="password" name="password_again">
		</li>
		<li>
			<input type="submit"  class ="hvr-back-pulse" style="width:80px; height:40px;" name="submit">
		</li>
			
</div>
			
<?php 
	}
include 'includes/overall/footer.php';
?>
                                          