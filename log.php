<?php
session_start();

if($_SESSION['username'] != NULL)
{
	$username = $_SESSION['username'];
	require('db.php');
	$otpr = "SELECT * FROM `Anime` where `dostup` = 1 ";


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
			<h1 class='h1'>Новое аниме на сайте</h1>
				<ul class='list'>
					<?php 
					$otpr = "SELECT * FROM `Anime` where id=1 or id=2";
                    $result = mysqli_query($conn, $otpr);

					while ($row = mysqli_fetch_assoc($result)) {
						$name = $row['name'];
						$poster = $row['poster'];
						$score_anime = $row['score_anime'];
						$janre = $row['janre'];
						$godvih = $row['godvih'];
						$org = $row['ogr'];
						$opis = $row['opis'];
						$url = $row['url'];
					
					echo "<li class='el-anime'>
						<a href='$url'><img src='$poster' alt='$poster'></a>";
						?>
						<span class='description'>
						<strong style='font-size: 25px; '><?php echo $name;?></strong>
						<br>
						<strong> 
						Оценка зрителей:
						</strong>
						<?php echo $score_anime;?>
						<br>
						<strong> 
						Жанр:
						</strong>
						<?php echo $janre;?>
						<br>
						<strong> 
						Год выхода: 
						</strong>
						<?php echo $godvih;?> 
						<br>
						<strong> 
						Возрастной рейтинг: 
						</strong>
						<?php echo $org;?>
						<br>
						<br>
						<?php echo $opis;?> 
						</span>
					</li>
				
				<?php
			}
				?>
				</ul>
			<h1 class="h1">Скоро на сайте</h1>
			<ul class='list'>
										<?php 
					$otpr = "SELECT * FROM `Anime` where `dostup` = 0";
                    $result = mysqli_query($conn, $otpr);

					while ($row = mysqli_fetch_assoc($result)) {
						$name = $row['name'];
						$poster = $row['poster'];
						$score_anime = $row['score_anime'];
						$janre = $row['janre'];
						$godvih = $row['godvih'];
						$org = $row['ogr'];
						$opis = $row['opis'];
					
					echo "<li class='el-anime'>
						<img src='$poster' alt='$poster'>";
						?>
						<span class='description'>
						<strong style='font-size: 25px; '><?php echo $name;?></strong>
						<br>
						<strong> 
						Оценка зрителей:
						</strong>
						<?php echo $score_anime;?>
						<br>
						<strong> 
						Жанр:
						</strong>
						<?php echo $janre;?>
						<br>
						<strong> 
						Год выхода: 
						</strong>
						<?php echo $godvih;?> 
						<br>
						<strong> 
						Возрастной рейтинг: 
						</strong>
						<?php echo $org;?>
						<br>
						<br>
						<?php echo $opis;?> 
						</span>
					</li>
				
				<?php
			}
				?>
				</ul>
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
