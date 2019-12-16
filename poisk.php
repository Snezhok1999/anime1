<?php
if ($_GET['poisk'] != null) {
$zapros = $_GET['poisk'];
require('db.php');
$otpr = "SELECT * FROM `Anime` where `name` = '$zapros'";
$result = mysqli_query($conn, $otpr);
?>

<?php
if(mysqli_num_rows($result)==0)
{
echo '<p align="center" style="color:red;">Такого аниме нетю, сори, братик(</p>';
}
else{
	echo "<ul class='list'>";
while ($row = mysqli_fetch_assoc($result)) {
						$name = $row['name'];
						$poster = $row['poster'];
						$score_anime = $row['score_anime'];
						$janre = $row['janre'];
						$godvih = $row['godvih'];
						$org = $row['ogr'];
						$opis = $row['opis'];
						$url = $row['url'];
					
					echo "<li class='el-anime' style='width:50%; margin-left: auto; margin-right: auto; margin-bottom: 10px;'>
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
						<br>
						<center><a href='<?php echo $url; ?>' class='h1'>Перейти к просмотру серий</a></center>
<?php
}
}else{
	echo "<center><p style='color:red;'>Вы ничего не ввели!</p></center>";
}?>
