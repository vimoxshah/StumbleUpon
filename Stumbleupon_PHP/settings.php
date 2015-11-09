<?php
include 'core/init.php';
include 'includes/head.php'; 
include 'includes/header.php';
function output_errors($errors){
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
if(empty($_POST) === false){
	$required_fields= array('first_name','email');
	foreach($_POST as $key=>$value){
		if(empty($value) && in_array($key,$required_fields) === true){
			$errors[]= 'Fields marked with an asterisk are required';
			break 1;
		}
		}
		if(empty($errors)=== true){
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
				$errors[]= 'A valid email address is required';
			}else if(email_exist($_POST['email'] === true)){
				$errors[]= 'Sorry,the email \'' . $_POST['email'] . '\' is already is in use';
			}
		 }
		
	}

	?>	
<div id="center">
<h1>Settings</h1>
<?php
if(isset($_GET['success']) && empty($_GET['success'])){
	
	echo ' <b> <a href ="logout.php">Log out </a> </b> &nbsp  &nbsp';
	echo ' <b><a href ="changepassword.php">Change Password </a> </b> &nbsp  &nbsp';
	echo '<b> <a href="settings.php">Settings</a></b>&nbsp  &nbsp';
	?>
	<b><a href="<?php echo $user_data['username']; ?>" >Profile</b></a><br><br>
	<?php 
	echo 'Your  detaiils have been Successfully Changed';	
	}
	else{
		if(empty($_POST) === false && empty($errors) === true){
		  $update_data = array(
			'first_name' => $_POST['first_name'],
			'last_name'  => $_POST['last_name'],
			'email'      => $_POST['email'],
		);
		update_user($s_id,$update_data);
		header('Location: settings.php?success');
		exit();
		} else if(empty($errors) === false){
			echo output_errors($errors);
		}
?>
<form action="" method="POST">
	<ul>
		<li>
		    First Name*:<br>
			<input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>" >
		</li>
		<li>
		    Last Name*:<br>
			<input type="text" name="last_name"  value="<?php echo $user_data['last_name']; ?>">
		</li>
		<li>
		    E-mail*:<br>
			<input type="text" name="email" value= "<?php echo $user_data['email'];?>">
		</li>
		<li>
			<input type="submit"   class ="hvr-back-pulse" style="width:80px; height:40px;" value="Update">
		</li>
			
</div>
			
<?php 
}
include 'includes/overall/footer.php';
?>
                                          