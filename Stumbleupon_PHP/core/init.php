<?php
session_start();
error_reporting(0);
require 'core/database/connect.php';
//require 'functions/general.php';
require 'functions/users.php';
$s_id=$_SESSION['user_id'];
$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

		if(isset($_SESSION['user_id'])){
			$user_data= user_data($_SESSION['user_id'],'user_id','username','password','first_name','last_name','email', 'password_recover','type','profile');
		if(user_active($user_data['username']) === false){
			session_destroy();
			header('Location:index.php');
			exit();
		}
		if($current_file !== 'changepassword.php' && $current_file !== 'logout.php' && $user_data['password_recover'] == 1){
			header('Location: changepassword.php?force');
		}
	}
 
$errors=array();
?>
