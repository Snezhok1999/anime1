<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stili.css">
	<meta charset="utf-8">
</head>

<body>
	<div id="ds1">
		<h1 class="hello"><a class='h2'>Регистрация</a></h1>
		<form method="POST" action='reg.php' style="font-family: 'Comfortaa', cursive;">
			Ваша почта:<br>
			<input type="text" name="email" id="in1">
			<br>
			Имя пользователя: 
			<br>
			<input type="text" name="username" id="in1">
			<br>
			Пароль: 
			<br>
			<input type="password" name="password" id="in1">
			<br>
			Повторите пароль:
			<br>
			<input type="password" name="password_r" id="in1">
			<br>
			<br>
			<input type="submit" value="Зарегистрироваться"  class='a-q h2'>
		</form>
		</div>
		<p id="prf1">Если не хочешь, то
		<a href="str.php" id="arf1">вернись на главную</a>
	</p>
		<div id="ds2">@Star_anime</div>
		<footer>
			<span>&copy;2019 Snezhkova O.D. По всем вопросам пишите по адресу olya.snezhok@mail.ru</span>
		</footer>
</body>
</html>
