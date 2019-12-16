<?php
session_start();
if (isset ($_POST['bookmark'])) {
	require('db.php');
$current_name = $_SESSION['username'];
$query_user="SELECT * FROM `9sem` WHERE `9sem`.`username` = '$current_name' ";
$query_anime="SELECT * FROM `anime` WHERE `anime`.`url` = '$url' ";
//echo $query_user;
//echo $query_anime;
$result_u = mysqli_query($conn, $query_user);
$row_u = mysqli_fetch_array($result_u, MYSQLI_ASSOC);
$row_u['id'];
$id_u=$row_u['id'];
$result_a = mysqli_query($conn, $query_anime);
$row_a = mysqli_fetch_array($result_a, MYSQLI_ASSOC);
$id_a=$row_a['id'];

$query_prereq="SELECT * FROM `bookmarks` WHERE `user_id`=$id_u and `anime_id`=$id_a";
$result_p=mysqli_query($conn, $query_prereq);

if (mysqli_num_rows ( $result_p ) > 0 ){
		echo "Закладка уже добавлена";
	} else {

$query_bookmark="INSERT into `bookmarks` (`user_id`,`anime_id`) VALUES ($id_u, $id_a)";
//echo $query_bookmark;

if (mysqli_query($conn, $query_bookmark)) {
	echo "Закладка добавлена";
}
}
}
?>
