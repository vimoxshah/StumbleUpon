<?php
//include 'includes/overall/header.php';
include 'core/init.php';
include 'includes/head.php'; 
include 'includes/header.php';
 
 
if(empty($_POST) === false){
	$required_fields = array('username','password','password_again','first_name','last_name','site','email');
	foreach($_POST as $key=>$value){
		if(empty($value) && in_array($key,$required_fields) === true){
			$errors[]= 'Fields marked with an asterisk are required';
			break 1;
			
		}
	}
		if(empty($errors) === true){
			if(user_exist($_POST['username']) === true){
				$errors[]= 'Sorry,the username \'' . $_POST['username'] . '\' is already taken';
			}
			if(preg_match("/\\s/",$_POST['username']) == true){
				$errors[]= 'Your username must not contains any space';
			}
			if(strlen($_POST['password']) <6){
				$errors[]= 'Your password must be at least 6 character';
			}
			if($_POST['password'] !== $_POST['password_again']){
				$errors[]= 'Your password do not match';
			}
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
				$errors[]= 'A valid email address is required';
			}
			if(email_exist($_POST['email']) === true){
				$errors[]= 'Sorry,the email \'' . $_POST['email'] . '\' is already is in use';
			}
		}
}

function output_errors($errors){
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}

?>
<div id="center">


  <h1> Register </h1>
  
<?php
	
	if(isset($_GET['success']) && empty($_GET['success'])){
		
		echo 'You\'ve been registered Successfully';
		
	}
	else{


	if(empty($_POST) === false && empty($errors) === true){
		$A=$_POST['site'];$tem=$A[0];
		$N=count($A);
		for($i=1;$i<$N;$i++)
		{
			$tem=$tem.','.$A[$i];
		}
	
		
	 $register_data= array(
		'username'    => $_POST['username'],
		'password'    => $_POST['password'],
		'first_name'  => $_POST['first_name'],
		'last_name'   => $_POST['last_name'],
		'email'       => $_POST['email'],
		'interest'    => $tem,	
	
		);
		register_user($register_data);	
		 useractivated($register_data);
		header('Location: register.php?success');
		
			exit();
	
	}
	else if(empty($errors) === false){
		echo output_errors($errors);
		}
if(isset($_GET['activate']) && empty($_GET['activate'])){
	 useractivated(user_data);
	 }		

?>

<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<form action ="" method = "POST">
	
	<ul>
		 <li>
			    Username*: <br>
			    <input type="text" name ="username" placeholder="Username">
		    </li><br>
			<li>
				Password*: <br>
				<input type= "password" name="password" placeholder="Password">
			</li><br>
			<li>
				Confirm Password*:<br>
				<input type= "password" name="password_again" placeholder="Confirmpassword">
			 </li><br>
			 <li>
				First Name:*<br>
				<input type= "text" name="first_name" placeholder="firstname">
			</li><br>
			<li>
				Last Name:* <br>
				<input type= "text" name="last_name" placeholder="lastname">
			</li><br>
			<li>
			Interest:
				<input type="checkbox" name="site[]" value="Entertainment">Entertainment
				<input type="checkbox" name="site[]" value="Social">Social
				<input type="checkbox" name="site[]" value="Business">Business<br> <br> &nbsp  &nbsp   &nbsp  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp
				<input type="checkbox" name="site[]" value="Comics">Comics 
				<input type="checkbox" name="site[]" value="Lifestyle">LifeStyle
				<input type="checkbox" name="site[]" value="Sports">Sports
				
			</li>	
			<li>
				Email*: <br>
				<input type="text"  name= "email" placeholder="email address">
			</li><br>
			<div class="g-recaptcha" data-sitekey="6LedqAQTAAAAANfz0B5EfTTzX5a7ofFpyGLe0R0F"></div><br>
				<input type="submit" class ="hvr-back-pulse" style="width:100px; height:50px;"  value="Register" >
			
		</ul>
			
		
		
		</div>
		
		
</form>	
	
<?php
} 
include 'includes/overall/footer.php';?>		