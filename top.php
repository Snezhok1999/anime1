<?php include "./header.php" ?>
		<main>
			<h1 class='h1 katalog'>Топ аниме</h1>
			<div class='top'>
			<?php 
			$i=1;
			$conn = mysqli_connect('localhost','olechka','QWa!1234','dz');
			$result = mysqli_query($conn,"SELECT * FROM anime where dostup = 1 ORDER BY `score_anime` DESC ");
			while ($row = mysqli_fetch_assoc($result))  {
						$name = $row['name'];
						$poster = $row['poster'];
						$url = $row['url'];
						$score_anime = $row['score_anime'];?>
						<div class='el-anime2'>
						<a href="<?php echo $url;?>" class='a-m'>
						<figure>
							<p style="color: white;"><?php echo $i++;?> место</p>
							<p style="color: white;">Оценка: <?php echo $score_anime;?></p>
						<img src='<?php echo $poster;?>' alt='<?php echo $name;?>'><br>
						<figcaption><?php echo $name;?></figcaption>
						</figure>
						</a>
					</div>
				<?php }; ?>
					<!--<li class='el-anime2'>
						<a href="log.php" class='a-m'>
						<figure>
							<p>2 место</p>
						<img src='ua.jpg' alt='Убийца Акамэ!'><br>
						<figcaption>Убийца Акамэ!</figcaption>
						</figure>
						</a>
					</li>
						<li class='el-anime2'>
						<a href="log.php" class='a-m'>
						<figure>
							<p>3 место</p>
						<img src='bb.jpg' alt='Бездомный бог'>
						<figcaption>Бездомный бог</figcaption>
						</figure>
					</a>
					</li>
					<li class='el-anime2'>
						<a href="log.php" class='a-m'>
						<figure>
							<p>4 место</p>
						<img src='n.jpg' alt='Наруто'><br>
						<figcaption>Наруто</figcaption>
						</figure>
						</a>
					</li>
				</ul>
				<ul class='list list2'>
					<li class='el-anime2'>
						<a href="log.php" class='a-m'>
						<figure>
							<p style="color:pink;">5 место</p>
						<img src='b.jpg' alt='Блич'><br>
						<figcaption>Блич</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="log.php" class='a-m'>
						<figure>
							<p style="color:pink;">6 место</p>
						<img src='v.jpg' alt='Ванпанчмен'><br>
						<figcaption>Ванпанчмен</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="log.php" class='a-m'>
						<figure>
							<p style="color:pink;">7 место</p>
						<img src='tg.jpg' alt='Токийский Гуль'><br>
						<figcaption>Токийский Гуль</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="log.php" class='a-m'>
						<figure>
							<p style="color:pink;">8 место</p>
						<img src='zg.jpg' alt='За гранью'><br>
						<figcaption>За гранью</figcaption>
						</figure>
						</a>
					</li>-->
				</div>
		</main>
		<footer>
			<span>&copy;2019 Snezhkova O.D. По всем вопросам пишите по адресу olya.snezhok@mail.ru</span>
		</footer>
	</body>
	</html>
