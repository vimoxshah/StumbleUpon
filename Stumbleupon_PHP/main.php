<head>
<style type="text/css">
form {
  margin: 0;
}
.sign-up-header {
  color: #ffffff;
  text-align:left;
}
.sign-up-header {
  font-size: 48px;
  font-family: "Raleway";
  margin-bottom: 0;
  text-shadow: 200 15px 2px #111;
}
h1.login-form-wrap-center{
	 position: absolute;
	 top:50px;
    left: 20px;
}
.login-form-wrap-center {
	 font-size: 20px;
	font-family: "Raleway";
	margin-top: 50px;
  display: inline-block;
  text-align:left;
}
.wrapper-form {
	font-family: "Lato";
  width: 300px;
  padding: 25px;
  margin: 0 auto;
  position: relative;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
body
{
background-image:url('images/st.jpg');
background-color:transparent;
background-repeat:repeat-x;
background-attachment:inherit;
background-position:center;
}
#button {
	border-radius:15px;
    background-color:#E3170D; 
    padding: 2px 4px;
    font: 28px Quicksand;
	
    text-decoration: none;
    border: 1px solid #000;
    border-color: #aaa #444 #444 #aaa;
    color: white;
	}
#button.hvr-fade {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  overflow: hidden;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: color, background-color;
  transition-property: color, background-color;
}
#button.hvr-fade:hover, .hvr-fade:focus, .hvr-fade:active {
  background-color: #8C1717;
  color: white;
}
</style>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
  </head>
<body>
<h5 class="sign-up-header"><a href="main.php"><img src="images/stumble.jpg" style="width:300px; height:70px;" /></h5></a>
<center>

 <div class="login-form-wrap-center">
    <h1><font color="white"><br>
	<font color="#BEE554" >Stop searching and start Stumbling! </font><br>
	Welcome,
	
	
	</font></h1>
    <div class="wrapper-form">
		<h2><font color="white">Want to sign in?</font></h2>
		
		<form action="index.php" method="post">
		<div class ="hvr-fade">
		<input type ="submit" id= "button" class="hvr-fade"  value="Login"  style="width:250px; height:50px;" >
		</div>
		</form>
		<h3><font color="white" >OR</font></h3>
		<div class=".hvr-sweep-to-right">

           <form action="register.php" method="post">
		<input type ="submit" id= "button" class="hvr-fade" style="width:250px; height:50px;"value="SignUp">
		</form>


                </div>
            </div>
 </center>
 
