<?php
include 'core/init.php';
 include 'includes/overall/header.php';
function output_errors($errors){
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}

 
 if(empty($_POST) === false)
 {
	 $username= $_POST['username'];
	 $password=$_POST['password'];
	 
	if(empty($username) === true || empty($password) === true){
		$errors[]= 'You need to enter username and password';
	}
	else if(user_exist($username) === false){
		$errors[]= 'We can\'t find username have you regesterd' ;
	}
		else if(user_active($username) === false){
			$errors[]= 'You haven \'t activate your account';
		} else {
			$login = login($username,$password);
			if($login === false)
				{
				$errors[] = 'That username/password combination is incorrect';
				}
			else{
				$_SESSION['user_id']= $login;
				header('Location: index.php');
				
				exit();
				}		
			}
		
		
		echo output_errors($errors);
}
include 'includes/overall/footer.php';
?>