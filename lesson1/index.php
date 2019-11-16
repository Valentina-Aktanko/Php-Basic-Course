<?php

$title = "Моя страница на php";
$header = "Учебный проект Geekbrains";
$year = date("Y");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$title ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="page-header">
		<div class="container">
			<h1><?= $header ?></h1>
		</div>
	</header>

	<main>
		<div class="container">
			<ul class="main-nav">
				<li class="main-nav__item"><a href="#">Главная</a></li>
				<li class="main-nav__item"><a href="#">Каталог</a></li>
				<li class="main-nav__item"><a href="#">Контакты</a></li>
			</ul>
		</div>
	</main>
	
    <footer class="page-footer">
    	<div class="container">
			<p>&copy; copyright - <?=$year?>. All rights reserved.</p>	
		</div>
    </footer>
</body>
</html>
