<?php
require('db.php');
mysqli_query($conn, "SELECT * FROM `9sem`");
$pass = $_POST['pass'];
$username = $_POST['username'];
$otpr = "SELECT * FROM `9sem` WHERE `username` = '$username' AND `password` = '$pass'";


$result = mysqli_query($conn, $otpr);

$row = mysqli_fetch_assoc($result);


if($row['username'] != NULL)
{
	session_start();
	$_SESSION['username'] = $row['username'];
	header('Location: /log.php');
}else{
	echo "pomenya ples";
}
?>
