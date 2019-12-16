<?php
session_start();

if($_SESSION['username'] != NULL)
{
	$username = $_SESSION['username'];
	require('db.php');
	$otpr = "SELECT * FROM `Anime` where `dostup` = 1";


$result = mysqli_query($conn, $otpr);

$row = mysqli_fetch_assoc($result);
	?>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stili.css">
			</head>
	<body>
			<?php include "./header.php" ?>
		<main>
<?php
require('poisk.php');
?>
		</main>
		<footer>
			<span>&copy;2019 Snezhkova O.D. По всем вопросам пишите по адресу olya.snezhok@mail.ru</span>
		</footer>
	</body>
	</html>
	<?php
}else
{
	header('Location: /str.php');
}
?>
