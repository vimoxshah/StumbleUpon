<?php

$conn=mysqli_connect('localhost','root' ,'' ,'lr');
$ra=rand(1,30);
$sql = "SELECT id, name FROM Sites WHERE id='$ra'";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
		header('Location: http://'.$row["name"]);
	}
mysqli_close($conn);

?>