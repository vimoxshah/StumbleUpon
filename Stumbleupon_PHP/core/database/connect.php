<?php
$connect_error='Sorry We\'re Checking  Connection Problems';
mysql_connect('localhost','root','');  
mysql_select_db('lr') or die($connect_error);
?>