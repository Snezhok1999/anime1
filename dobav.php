<?php
session_start();
$conn = mysqli_connect('localhost','olechka','QWa!1234','dz');
if(!$conn)
	die("conn error ". mysqli_connect_error());
mysqli_query($conn, "SELECT * FROM `9sem`");
	
	$type = $_POST["type"];
	$name = $_POST["name"];
	$description = $_POST["description"];
	$manufacturer = $_POST["manufacturer"];
	$price = $_POST["price"];
	$photo_path = $_POST["photo_path"];

	$query = "INSERT INTO dobav(type, name, description, manufacturer, price, photo_path) 
	VALUES(\"".$type."\",\"".$name."\", \"".$description."\",\"".$manufacturer."\",\"".$price."\",\"".$photo_path."\")";
	
	mysqli_query($conn, $query);
	echo "text".mysqli_connect_error($conn);
	mysqli_close($conn);
	header('Refresh:2; url=log.php');
}
else
{
	header('Refresh:2; url=log.php');
	echo "Yout don't have administrator rights!";
}

?>
