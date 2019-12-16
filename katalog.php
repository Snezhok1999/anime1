<?php include "./header.php" ?>
		<main>
			<h1 class='h1 katalog'>Каталог аниме</h1>
				<ul class='list list2'>

			<?php 
			$conn = mysqli_connect('localhost','olechka','QWa!1234','dz');
			$result = mysqli_query($conn,"SELECT * FROM anime where dostup = 1 ORDER BY 'score' DESC");
			$count=1;
			while ($row = mysqli_fetch_assoc($result))  {
						$count++;
						$name = $row['name'];
						$poster = $row['poster'];
						$url = $row['url'];?>
						<li class='el-anime2'>
						<a href="<?php echo $url;?>" class='a-m'>
						<figure>
						<img src='<?php echo $poster;?>' alt='<?php echo $name;?>'><br>
						<figcaption><?php echo $name;?></figcaption>
						</figure>
						</a>
					</li>
					<?php if ($count > 4) {
						$count = 1;
						echo "</ul><ul class='list list2'>";
					}
					}; ?>

					<!--li class='el-anime2'>
						<a href="bb.php" class='a-m'>
						<figure>
						<img src='bb.jpg' alt='Бездомный бог'>
						<figcaption>Бездомный бог</figcaption>
						</figure>
					</a>
					</li>
					<li class='el-anime2'>
						<a href="zg.php" class='a-m'>
						<figure>
						<img src='zg.jpg' alt='За гранью'><br>
						<figcaption>За гранью</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="chk.php" class='a-m'>
						<figure>
						<img src='chk.png' alt='Черный клевер'><br>
						<figcaption>Черный клевер</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="b.php" class='a-m'>
						<figure>
						<img src='b.jpg' alt='Блич'><br>
						<figcaption>Блич</figcaption>
						</figure>
						</a>
					</li>
				</ul>
				<ul class='list list2'>
					<li class='el-anime2'>
						<a href="n.php" class='a-m'>
						<figure>
						<img src='n.jpg' alt='Наруто'><br>
						<figcaption>Наруто</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="v.php" class='a-m'>
						<figure>
						<img src='v.jpg' alt='Ванпанчмен'><br>
						<figcaption>Ванпанчмен</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="tg.php" class='a-m'>
						<figure>
						<img src='tg.jpg' alt='Токийский Гуль'><br>
						<figcaption>Токийский Гуль</figcaption>
						</figure>
						</a>
					</li>
					<li class='el-anime2'>
						<a href="ua.php" class='a-m'>
						<figure>
						<img src='ua.jpg' alt='Убийца Акамэ!'><br>
						<figcaption>Убийца Акамэ!</figcaption>
						</figure>
						</a>
					</li-->
				</ul>
		</main>
		<footer>
			<span>&copy;2019 Snezhkova O.D. По всем вопросам пишите по адресу olya.snezhok@mail.ru</span>
		</footer>
	</body>
	</html>
