<?
error_reporting(0);
session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<title>Нарушениям.Нет авторизация</title>
</head>

<body class="flex-col-cntr">
	<? if ($_SESSION['regPass']):
		unset($_SESSION['regPass']);
	endif;
	if ($_SESSION['authFail']): 
		echo '<p>Неверные логин или пароль!';
		unset($_SESSION['authFail']);
	endif;
	?>
	<? if ($_SESSION['userRole'] != 2 && $_SESSION['userLogin']): include 'userPage.php'; ?>
	<? elseif ($_SESSION['userRole'] == 2 && $_SESSION['userLogin']):
		include 'userPage.php'; ?>
	<? else: ?>
		<h1>Нарушениям.NET</h1>
		<img src="logo/logo.png" alt="" class="logo">
		<h2>ВХОД</h2>
		<form action="php/registration.php" class="flex-col-cntr" method="POST">
			<label for="login">Ваш логин</label>
			<input type="text" placeholder="Введите логин" name="login">
			<label for="password">Пароль</label>
			<input type="password" placeholder="Введите пароль" name="password">
			<input type="submit" value="Войти" name="authButton">
		</form>
		<a href="registration.php">Зарегистрироваться</a>
	<? endif; ?>
</body>

</html>