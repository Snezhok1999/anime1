<?php
session_start();
if (isset ($_POST['ava'])) {
	require('db.php');
$new_ava = $_POST['ava'];
echo $new_ava;
$current_name = $_SESSION['username'];
$query_a="UPDATE `9sem` SET `ava` = '$new_ava' WHERE `9sem`.`username` = '$current_name' ";
//echo $query_c;
if (mysqli_query($conn, $query_a)) {
	echo "Аватар изменен";
}
}
?>
