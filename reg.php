<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stili.css">
</head>
<body>
<?php
$conn = mysqli_connect("localhost","olechka","QWa!1234","dz");
if (!$conn) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_query($conn, "SELECT * FROM `9sem`");
$query = "SELECT * FROM `9sem`";

$result = mysqli_query($conn, $query);


$username_exists = false;
$info_is_valid = true;

while ($row = mysqli_fetch_assoc($result)){
	if ($row['username'] == $_POST['username'] |
        $row['email'] == $_POST['email']
) {
		$username_exists = true;
	}
	if ($_POST['email'] != NULL && 
        preg_match("![0-9a-z-]+@[a-z]+[.][a-z]!", $_POST["email"]) &&
        $username_exists == false)
        {
        	echo "Почта принята<br>";
        }
		else {
		echo "Проверьте правильность ввода<br>";
		$info_is_valid = false;
	}

	if ($_POST['username'] != NULL &&

strlen($_POST['username']) >= 4 &&
preg_match("!^[a-zA-Z][a-zA-Z0-9_]*$!", $_POST["username"]) &&
 	($username_exists == false)) {
		echo "Логин принят<br>";
	} else {
		echo "Проверьте правильность ввода<br>";
		$info_is_valid = false;
	}
	if ($_POST["password"] != NULL &&
 	($_POST["password"] == $_POST["password_r"]))
{
    echo "Пароль принят<br>";
}
else
{
	echo "Проверьте правильноть ввода или такой пользователь уже существует.<br>";
	$info_is_valid = false;
}
if($info_is_valid == true) 
{
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];

	$query1 = "INSERT INTO `9sem`(`username`, `password`, `email`) 
			  VALUES ('$username','$pass', '$email')";

	mysqli_query($conn, $query1);

	echo "Регистрация прошла успешно!";
	?>
	<br>
	<a href="str.php" id="arf1">Вернуться к авторизации</a>
<?php
}
else
{
	echo "Что то пошло не так!";
}

mysqli_close($conn);
die(mysqli_connect_error());
}
?>
</body>
