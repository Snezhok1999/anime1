<?php include "./header.php" ?>
	<main>

	<?php
	require('db.php');
	$query="SELECT * FROM `9sem` where username='".$_SESSION['username']."'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$ava=$row['ava'];
	$user_id=$row['id'];


?>

	<div class=lk>
		<div class=el-anime>
			<img src=/avas/<?php echo $ava;?>>
			<span class='description'>Имя пользователя: <?php echo $_SESSION['username'];?></span>
			<div class=bookmarks>
				<p class='description2' style="background: violet; border-color: blueviolet;">Закладки:</p>
				<?php
					$query_bookm="SELECT * FROM `anime`, `bookmarks` WHERE `anime`.`id`=`bookmarks`.`anime_id` and `bookmarks`.`user_id`=$user_id";
					$result_b = mysqli_query($conn, $query_bookm);
					while ($row_b = mysqli_fetch_assoc($result_b)){
						echo "<a href=".$row_b['url'].">".$row_b['name']."</a>";
					}	
				?>
			</div>
		</div>
		<div class=el-anime>
			<form method="POST" action="lk.php">
				<p style="color: white; font-size: 20px; font-family: 'Bradley Hand', cursive; margin-left: 30px;">Изменить аватар:</p>
				<label>
					<input type="radio" name="ava" value="1.png">
					<img src="/avas/1.png">
				</label>
				<label>
					<input type="radio" src="/avas/2.jpg" name="ava" value="2.jpg">
					<img src="/avas/2.jpg">
				</label>
				<label>
					<input type="radio" src="/avas/3.jpg" name="ava" value="3.jpg">
					<img src="/avas/3.jpg">
				</label>
				<label>
					<input type="radio" src="/avas/4.jpg" name="ava" value="4.jpg">
					<img src="/avas/4.jpg">
				</label>
				<label>
					<input type="radio" src="/avas/5.jpg" name="ava" value="5.jpg">
					<img src="/avas/5.jpg">
				</label>
				<label>
					<input type="radio" src="/avas/6.jpg" name="ava" value="6.jpg">
					<img src="/avas/6.jpg">
				</label></br>
				<br>
				<center><input type="submit" name="" style='font-size: 20px;' value="Изменить" class='a-q h2'></center>
				<?php require('change_ava.php'); ?>
			</form>
		</div>
		<div class=el-anime>
			<form method="POST" action="lk.php">
				<center><p style="color: white; font-size: 20px; font-family: 'Bradley Hand', cursive;">Изменить имя пользователя:</p></center>
				<center><input type="text" name="username"></center>
				<br>
				<input type="submit" name="change" style='font-size: 20px; margin-left: 59px;' value="Изменить" class='a-q h2'></br>

				<?php require('change_nick.php'); ?>
			</form>
		</div>
	</div>

	</main>
		<footer>
			<span>&copy;2019 Snezhkova O.D. По всем вопросам пишите по адресу olya.snezhok@mail.ru</span>
		</footer>
	</body>
</html>
