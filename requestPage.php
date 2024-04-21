<? session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<script defer src="js/script.js"></script>
	<title>Нарушениям.Нет создание заявки</title>
</head>
<body class="flex-col-cntr">
	<h1>Нарушениям.NET</h1>
	<img src="logo/user-logo.png" alt="" class="userLogo">

	<div class="newWrap">	
		<p class="newHead">ФОРМИРОВАНИЕ НОВОГО ЗАЯВЛЕНИЯ</p>
	</div>

	<form action="userPage.html" class="flex-col-cntr">
		<label for="number">Введите автомобильный номер нарушителя</label>
		<input type="text" placeholder="X 000 XX код региона" name="number" pattern="[А-Я]{1} [0-9]{3} [А-Я]{2} [0-9]{1,3}" required>
		<label for="description">Добавьте описание нарушения</label>
		<textarea name="description" cols="30" rows="10" placeholder="Укажите время, место и другую информацию о нарушении"></textarea>
		<input type="submit" value="Отправить заявление">
	</form>

<a href="userPage.php" class="out">К заявлениям</a>

</body>
</html>