<? session_start();?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<script defer src="js/script.js"></script>
	<title>Нарушениям.Нет страница заявок</title>
</head>

<body class="flex-col-cntr">
	<h1>Нарушениям.NET</h1>
	<img src="logo/user-logo.png" alt="" class="userLogo">

	<div class="newWrap">
		<p class="newHead">ПОДАТЬ НОВОЕ ЗАЯВЛЕНИЕ</p>
		<a href="requestPage.php" class="newButton">+</a>
	</div>

	<h2>ВАШИ ЗАЯВЛЕНИЯ</h2>

	<div class="request flex-col-cntr">
		<div class="head">
			<div>
				<p>М 007 СМ | 77</p>
				<p class="showDesc"></p>
			</div>
			<p class="new">НОВОЕ</p>
		</div>
		<p class="description hide">Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Ipsa ipsum minus eligendi
			quod debitis nobis sequi ducimus nesciunt, quis vitae velit doloribus! Exercitationem quam soluta officiis
			hic iure, officia aspernatur.</p>
	</div>

	<div class="request flex-col-cntr">
		<div class="head">
			<div>
				<p>М 007 СМ | 77</p>
				<p class="showDesc"></p>
			</div>
			<p class="confirm">ПОДТВЕРЖДЕНО</p>
		</div>
		<p class="description hide">Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Ipsa ipsum minus eligendi
			quod debitis nobis sequi ducimus nesciunt, quis vitae velit doloribus! Exercitationem quam soluta officiis
			hic iure, officia aspernatur.</p>
	</div>

	<div class="request flex-col-cntr">
		<div class="head">
			<div>
				<p>М 007 СМ | 77</p>
				<p class="showDesc"></p>
			</div>
			<p class="reject">ОТКЛОНЕНО</p>
		</div>
		<p class="description hide">Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Ipsa ipsum minus eligendi
			quod debitis nobis sequi ducimus nesciunt, quis vitae velit doloribus! Exercitationem quam soluta officiis
			hic iure, officia aspernatur.</p>
	</div>

	<a href="php/logout.php" class="out">Выйти</a>

</body>

</html>