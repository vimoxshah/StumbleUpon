<?php
include 'core/init.php';
include 'includes/head.php'; 
include 'includes/header.php';
 
?>
<div id="center">
<h1> Recover</h1>
<?php
if(isset($_GET['success']) === true && empty($_GET['success']) === true ){
?>
	<p> Thanks,We've send You email </p>
<?php
}
else{
	$mode_allowed = array('username','password');
	if(isset($_GET['mode']) === true && in_array($_GET['mode'],$mode_allowed) === true){
		if(isset($_POST['email']) === true && empty($_POST['email']) === false){
			if(email_exist($_POST['email']) === true){
				recover($_GET['mode'], $_POST['email']);
				header('Location: recover.php?success');
				exit();
				}else{
				echo '<p> Oops,We can\'t find ur email address</p>';
				}
			}
?>
	<form action="" method="POST">
		<ul>
			<li>
				Please Enter Your Email Address:<br>
				<input type="text" name="email">
			</li>
			<li>
				<input type= "submit" class ="hvr-back-pulse" style="width:80px; height:30px; " value="Send">
			</li>
		</ul>
	</div>	
	</form>		
			
	<?php
	} else{
			header('Location: index.php');
			exit();
		}	
}
	?>			
<?php include 'includes/overall/footer.php';?>			