<?php 
session_start();
$username = $_SESSION['username'];
?>
	<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="stili.css">
			</head>
	<body>
		<style>
			.video{
					display: none;
				}
				.serii {
				  text-decoration: none;
				  outline: none;
				  display: inline-block;
				  width: 110px;
				  height: 45px;
				  line-height: 45px;
				  border-radius: 45px;
				  margin: 10px 20px;
				  font-family: 'Montserrat', sans-serif;
				  font-size: 11px;
				  text-transform: uppercase;
				  text-align: center;
				  letter-spacing: 3px;
				  font-weight: 600;
				  color: #524f4e;
				  background: white;
				  box-shadow: 0 8px 15px rgba(0,0,0,.1);
				  transition: .3s;
				}
				.serii:hover {
				  background: #6a5acd;
				  box-shadow: 0 15px 20px rgba(46,229,157,.4);
				  color: white;
				  transform: translateY(-7px);
				}

				

				.textarea{background-color: white;
					color: indigo;
					 padding: 10px;
					border: 7px dotted violet;
					border-radius: 20px;
				}

			.top{
	width: 80%;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	margin-left:10%;
	margin-top: 15px;
	flex-wrap: wrap;
}
		</style>
<header>
	<h1 class="hello">Привет, <?php echo $username; ?><br><a href='lk.php' class='h2'>Личный кабинет</a></h1>
	<ul class='menu'>
		<li class="el-menu"><a href="log.php" class='a-m' >Главная</a></li>
		<li class="el-menu"><a href="katalog.php" class='a-m'>Каталог</a></li>
		<li class="el-menu"><a href="top.php"  class='a-m'>Топ аниме</a></li>
		<li class="el-menu"><a href="help.php"  class='a-m'>Помощь</a></li>
		<li class="el-menu"><a href="str.php" class='a-m' >Выход</a></li>
	</ul>
	<div class='search'>
		<form method='get' class='search-1' action='respoisk.php'>
			<input type='text' placeholder='Поиск анимееееееее' class='field' name="poisk">
			<!--input type='submit' class='lupa' value=''-->
		</form>
	</div>
</header>
