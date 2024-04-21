<? session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<title>Нарушениям.Нет регистрация</title>
</head>
<? 	if ($_SESSION['regFail']):
		echo '<p>'.$_SESSION['hint'].'</p>';
		unset($_SESSION['regFail']);
		unset($_SESSION['hint']);
	endif;
	if ($_SESSION['passFail']):
		echo '<p>Веденные пароли не совпадают!</p>';
		unset($_SESSION['passFail']);
	endif;
?>
<body class="flex-col-cntr">
	<h1>Нарушениям.NET</h1>
	<img src="logo/logo.png" alt="" class="logo">
	<h2>РЕГИСТРАЦИЯ</h2>
	<form action="php/registration.php" method="POST" class="flex-col-cntr">
		<label for="fio">Укажите Ваше ФИО (полностью)</label>
		<input type="text" placeholder="Фамилия Имя Отчество" name="fio" required>

		<label for="telephon">Укажите Ваш номер телефона</label>
		
		<div class="telWrap">	
			<input type="tel" placeholder="xxx-xxx-xx-xx" name="telephon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
		</div>	


		<label for="email">Укажите Ваш электронный адрес</label>
		<input type="email" placeholder="mail@mail" name="email" required>

		<label for="login">Укажите Ваш логин</label>
		<input type="text" placeholder="Введите логин" name="login" required>

		<label for="password">Задайте пароль</label>
		<input type="password" placeholder="Введите пароль" name="password" required>

		<label for="repPassword">Повторите пароль</label>
		<input type="password" placeholder="Повторите пароль" name="repPassword" required>

		<input type="submit" value="Зарегистрироваться" name="buttonReg">
	</form>
		<a href="index.php">Войти</a>
</body>
</html>