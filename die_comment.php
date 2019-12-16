<?php 
session_start();


	$cann = mysqli_connect('localhost','olechka','QWa!1234','dz');
	if(!$cann)
		die("conn err, ". mysqli_connect_error());
	mysqli_query($cann, "SELECT * FROM `9sem`");

	$id = $_POST["id"];
	$query = "DELETE FROM anime_comments WHERE id = $id";
	mysqli_query($cann, $query);
	$page = $_SERVER['HTTP_REFERER'];
	header("Location: $page");

?>
