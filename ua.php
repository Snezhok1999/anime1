<?php include "./header.php" ?>
				<main>
			<ul class='list'>
					<?php 
					$cann = mysqli_connect('localhost','olechka','QWa!1234','dz');
					$otpr = "SELECT * FROM `Anime` where `id` = 6";
                    $result = mysqli_query($cann, $otpr) or die('Error'.mysqli_error($cann));

					while ($row = mysqli_fetch_assoc($result)) {
						$name = $row['name'];
						$poster = $row['poster'];
						$score_anime = $row['score_anime'];
						$janre = $row['janre'];
						$godvih = $row['godvih'];
						$org = $row['ogr'];
						$opis = $row['opis'];
					
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
					<br>
					

				
				<?php
				
				
			}
				?>
				</ul>
				<div class=bookmarks>
					<form method="POST" action="<?php $url ?>">
					<center><input type="submit" name="bookmark" style='font-size: 20px;' value="Добавить в закладки" class='a-q h2'>						<center><?php require('add_bookmark.php'); ?></center>
					</form>
				</div>
				<div id='series'></div>
				<center><h1 class='h1' style='margin:0;'>1 сезон</h1></center>
				<center><a class='serii' onclick="document.querySelector('.video1').style.display='block';
				document.querySelector('.video2').style.display='none';" href='#series'>1</a>
				<a class='serii' onclick="document.querySelector('.video2').style.display='block'; 
				document.querySelector('.video1').style.display='none';" href='#series'>2</a>
				</center>
				<center><iframe class='video video1' width="730" height="411" src="https://www.youtube.com/embed/S81qgGzfNXY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
				<center><iframe class='video video2' width="730" height="411" src="https://www.youtube.com/embed/cC2tw9ip4Zc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
				
				<?php
	$username = $_SESSION["username"];
	if(isset($_SESSION['username']) ) { ?>
		<center>
		<form action="new_comment.php" method="POST">
			<input type="hidden" name="id_anime" value='6'>
			<input type="hidden" name="username" value=<?php echo "\"".$username."\""; ?>>
			<br>
			<span class='h1' style='font-size: 25px; margin-left:0;'>Напиши комментарий, братик:</span>
			<br>
			<textarea name="text" rows="8" cols="50" class='textarea'></textarea>
			<br>
			<span style="color: white; font-size: 20px; font-family: 'Bradley Hand', cursive;">Поставь оценку:</span>
            <select name="score">
            	<option selected value="-">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
			<input type="submit" style='font-size: 20px;' value="Клац" class='a-q h2'>
		</form>
	</center>

		<center><h2 class='h1' style='font-size: 25px; margin-left:0;'>Комментарии:</h2></center>
				<?php 
	 
	$query = "SELECT * FROM anime_comments WHERE  id_anime  = 6";
	$result = mysqli_query($cann, $query);
	while($row = mysqli_fetch_assoc($result))
	{
		$username = $row["username"];
		$text = $row["text"];
		$score = $row["score"];
		$comment_id = $row["id"];
		$id_anime = $row["id_anime"];
		if($text != "")
		{
			echo "<div class='textarea' style='width:50%; margin-left: auto; margin-right: auto;'>";
			echo "<h2>$username:<h2>";
			if($score != "-")
				echo "<h3>Оценка: $score из 5</h3>";
			echo "<p>$text</p>";
			echo "</div>";
			 ?>
				<form action="die_comment.php" method="POST">
					<input type="hidden" name="id" value=<?php echo $comment_id; ?>>
					<center><input type="submit" style='font-size: 20px; ' value="Удалить этот комментарий" class='a-q h2'></center>
				</form> 
	<?php }	
	}
}
				$otpr1 = "SELECT * FROM `anime_comments` where id_anime = 6";
                    $result = mysqli_query($cann, $otpr1) or die('Error'.mysqli_error($cann));
			$average_score = 0;
			$counter = 0;
			while($row = mysqli_fetch_assoc($result))
			{
				$average_score += $row["score"];
				$counter++;
			}
			if($counter)
				$average_score = $average_score / $counter;
			$average_score = substr($average_score, 0, 3);
			echo "<center><h2>Рейтинг: $average_score из 5</h2></center>";
			mysqli_query($cann, "update anime
		set score_anime = $average_score where id=6") or die('Error'.mysqli_error($cann));
	?>
		</main>

		<footer>
			<span>&copy;2019 Snezhkova O.D. По всем вопросам пишите по адресу olya.snezhok@mail.ru</span>
		</footer>
	</body>
	</html>

