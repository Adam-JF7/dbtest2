<?php
	session_start();
?>


<!DOCTYPE html>
			<head>
				<meta charset="UTF=8">
				<meta name="viewport" content=witdht=device=width, initial-scale=1>
				<meta http-equiv="X-UA-Coutiable" content="ie=edge">
			<title>Авторизация и регистрация</title>
				<link rel="stylesheet" href="\mysite.ru\main.css">
			</head>
			<body>
			<body>
				<div class="container mt-4">
					<h1>Форма регистрации</h1>
					<form action='mysite.ru/index.php' method="post" enctype="ford-data">
						<label>ФИО</label>
						<input type="text" name="full_name" placeholder="Введите имя!"><br>
						<label>Логин</label>
						<input type="text" name="login" placeholder="Введите логин!"><br>
						<label>Почта</label>
						<input type="text" name="mail" placeholder="Введите почту!"><br>
						<label>Пароль</label>
						<input type="text" name="password" placeholder="Введите пароль!"><br>
						<label>Подтверждение пароля</label>
						<input type="password" name="password_confirm" placeholder="Подтвердите пароль!"><br>
						<button class="btn btn-succsess" type="submit">Зарегистрировать</button>
					</form>				
				</div>
			</body>
		</html>