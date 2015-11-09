<?php

function logged_in() {
    return (isset($_SESSION['user_id'])) ? true : false;
}
function change_profile_image($user_id , $file_temp ,$file_extn){
	$file_path = 'images/profile/' . substr(md5(time()) ,0 ,10) . '.' . $file_extn;
	move_uploaded_file($file_temp, $file_path); //default function
	mysql_query("UPDATE `users` SET `profile` = '" . mysql_real_escape_string($file_path) . "' WHERE `user_id` =" . (int)$user_id);
}
function is_admin($user_id){
	$user_id =(int)$user_id;
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `user_id` = $user_id AND `type` = 1"),0) == 1) ? true:false ;
}
function recover($mode, $email){
	$mode       = sanitize($mode);
	$email  	= sanitize($email);
	$user_data 	= user_data(user_id_from_email($email), 'first_name', 'username');
	
	 if($mode == 'username'){
		 email($email,'Your username recvory', "Hello" . $user_data['first_name'] . ",\n\nYour username is:" . $user_data['username'] . "\n\n-stumbleupon");
		}
		else if($mode == 'password'){
			 $generated_password = substr(md5(rand(999,999999)),0,8);
			 change_password($user_data['user_id'],$generated_password);
			
			update_user($user_data['user_data'], array('password_recover' => '1'));

			email($email, 'Your password recvory', "Hello" . $user_data['first_name'] . ",\n\nYour New Password is:" . $generated_password . "\n\n-StumbleUpon" );
		 }
	 
	}

function user_data($user_id) {
$data = array();
$user_id = (int)$user_id;
$func_num_args = func_num_args();
$func_get_args = func_get_args();

		if ($func_num_args > 1) {
			unset($func_get_args[0]);

			$fields = '`' . implode('`, `', $func_get_args) . '`';
			$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
			return $data;
			}
}
function update_user($user_id,$update_data){
	//global $s_id;
	$user_id=(int)$user_id;
	$update = array();
	array_walk($update_data,'array_sanitize');
	foreach($update_data as $field=>$data){
		$update[] ='`' . $field . '` = \'' . $data . '\'';
	}
	mysql_query("UPDATE `users` SET " . implode(',', $update) . " WHERE `user_id` = $user_id") or die(mysql_error());
}
function change_password($user_id,$password){
	$user_id=(int)$user_id;
	$password=md5($password);
	mysql_query("UPDATE `users` SET `password` = '$password',`password_recover` = 0 WHERE `user_id` = $user_id");
}
function register_user($register_data){
	array_walk($register_data,'array_sanitize');
	$register_data['password'] = md5($register_data['password']);
	$fields= '`' . implode('`,`',array_keys($register_data)) . '`';
	$data= '\'' . implode('\', \'',$register_data) . '\'';
	mysql_query("INSERT INTO  `users` ($fields) VALUES ($data)");
	
}
function contactus($data){
	array_walk($data,'array_sanitize');
	//$register_data['password'] = md5($register_data['password']);
	$fields= '`' . implode('`,`',array_keys($data)) . '`';
	$datas= '\'' . implode('\', \'',$data) . '\'';
	mysql_query("INSERT INTO  `contact` ($fields) VALUES ($datas)");
	
}
function user_exist($username){
	$username=sanitize($username);
	$query=mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'") or die(mysql_error());
	return(mysql_result($query,0)==1) ? true:false;
}
	function email_exist($email){
	$email=sanitize($email);
	$query=mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email'") or die(mysql_error());
	return(mysql_result($query,0)==1)?true:false;

	}
function user_active($username){
	$username=sanitize($username);
	$query= mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1");
	 return(mysql_result($query,0)==1)?true:false;
	}
	function useractivated($register_data){
		array_walk($register_data,'array_sanitize');
		 $username = $register_data['username'];
			mysql_query("UPDATE `users` SET `active` = 1 WHERE `username` = '$username'");
			echo 'You successfully activated account.So,now You can Log in.';
	}
	function user_id_from_username($username){
		$username = sanitize($username);
		return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username` ='$username'"),0,'user_id');
	}
	function user_id_from_email($email){
		$email = sanitize($email);
		return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `email` = '$email'"),0,'user_id');
	}
function login($username,$password){
	$user_id=user_id_from_username($username);
	$username = sanitize($username);
	$password = md5($password);
	return(mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username` ='$username' AND `password` = '$password'"),0)== true)?$user_id:false; 
	}

function admin_protect(){
	global $user_data;
	if(is_admin($user_data['user_id']) === false){
		header('Location: index.php');
		exit();
	}
}
function sanitize($data){
	return htmlentities(strip_tags(mysql_real_escape_string($data)));
}
function array_sanitize(&$item){
	$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
}
function email($to, $subject, $body){
	mail($to, $subject, $body, 'From:vmoksh.shah179@gmail.com');
}
function logged_in_redirect(){
	if($_SESSION['user_id']){
		header('Location: index.php');
	}
}
?>