<?php
include 'core/init.php';
include 'includes/head.php'; 
include 'includes/header.php';
 function output_errors($errors){
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}/*
if(!isset($_POST['textarea_message'])){
		$errors[] = 'Fields marked with an asterisk are required';
		}
	
	if(empty(isset($_POST['problem']))){
		$errors[] = 'Message is Required';
}
if(empty(isset($_POST['name']))){
		$errors[] = 'Name is Required';
}
*/
if(empty($_POST) === false){
	$required_fields = array('name','email','problem','message');	
	foreach($_POST as $key=>$value){
		if(empty($value) && in_array($key,$required_fields) === true){
			$errors[]= 'Fields marked with an asterisk are required';
			break 1;
			
		}
	}

	if(empty($errors)=== true){
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
				$errors[]= 'A valid email address is required';
			}
	}
}
	
 ?>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
	
<div id="center">
		<h1>Contact Us</h1>
		<?php 
			if(isset($_GET['success']) && empty($_GET['success'])){
			echo 'Thanks for contacting us';
		
	}
	else{
		if(empty($_POST) === false && empty($errors) === true){
	
		 $data= array(
		'name'    		=> $_POST['name'],
		'email'       	=> $_POST['email'],
		'problem'  		=> $_POST['problem'],
		'message'   	=> $_POST['message'],
	
		);
		contactus($data);	
		header('Location: contact.php?success');
			exit();
	
	}
	else if(empty($errors) === false){
		echo output_errors($errors);
		}
		?>
		<p><span class="error">* required field.</span></p>
	<form action="" method ="POST">
		Your Name: <span class="error">*</span><br>
		<input type="text" name="name" placeholder="Name"><br><br>
		Your email Address: <span class="error">*</span><br>
		<input type="text" name="email" placeholder="email address"><br><br>
		What are you contacting us about? <span class="error">*</span><br>
		<select name="problem">
			<option value="">---Select One---</option>
			<option value="reporbug">Report Bug </option>
			<option value="reportabuse">Report Abuse or inappropriate Content </option>
			<option value="accountissue">Account Issue</option>
			<option value="feedback">General Feedback</option>
			
		</select><br><br>
		Message: <span class="error">*</span><br>
			<textarea rows="4" cols="50" name="message">
		</textarea><br><br>
		<div class="g-recaptcha" data-sitekey="6LedqAQTAAAAANfz0B5EfTTzX5a7ofFpyGLe0R0F"></div><br>
		<input type="submit"  class="hvr-fade" value="Send" style="width:80px; height:40px;" >
		</div>
	</form>


<?php
	}
 include 'includes/overall/footer.php';?>
