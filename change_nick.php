<?php
session_start();
if (isset ($_POST['username'])) {
	require('db.php');
$new_name = $_POST['username'];
$current_name = $_SESSION['username'];
$query_c="UPDATE `9sem` SET `username` = '$new_name' WHERE `9sem`.`username` = '$current_name' ";
//echo $query_c;
if (mysqli_query($conn, $query_c)) {
	echo "Имя пользователя изменено";
}
}
?>
