<?php
	
	session_start();
	require_once 'mysite.ru/connect.php';

	$full_name = $_POST['full_name'];
	$login = $_POST['login'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	if ($password === $password_confirm); 

		else {
			$_SESSION['message'] = 'Пароли не совпадают';
			header("location: /register.php");
	}
		

?>