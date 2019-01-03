<?php
require "RedBean.php";

$data = $_POST;

if(isset($data['sign_in']))
{
	$errors = array();

	if($data['password_2'] != $data['password'])
	{
		$errors[] = "<div class='success'><p>Повторный пароль введён не верно!</p></div>";
	} 

	if ( R::count('users', "login = ?", array($data['login'])) > 0)
	{
		$errors[] = "<div class='success'><p>Пользователь уже существует!</p></div>";
	}

	if ( R::count('users', 'email = ?', array($data['email'])) > 0)
	{
		$errors[] = "<div class='success'><p>Email уже существует!</p></div>";
	}

	if (empty($errors))
	{
		$_SESSION['logged_user'] = $user;
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		R::store($user);
		echo "<div class='success'><p>Mожете выполнить вход!</p></div>";
	} else

	{
		if (!empty($errors))
		{
			echo array_shift($errors);
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP | REG</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<div class="container">
	  	<div class="row">
	  				<h1><a href="index.php">PHP | PORTFOLIO</a></h1>
	  		<div class="block">
	  			<form action="index.php" method="POST">
					<p>
						<input type="text" name="login"  placeholder="Ваш Логин: " required><br>
					</p>
				
					<p>
						<input type="email" name="email" placeholder="Ваш Email:" required><br>
					</p>
				
					<p>
						<input type="password" name="password" placeholder="Ваш Пароль:" required><br>
					</p>
				
					<p>
						<input type="password" name="password_2" placeholder="Повторите Пароль:" required><br>
					</p>
				
					<button type="submit" class="btn btn-primary" name="sign_in">ОТПРАВИТЬ</button>  |
					<a href="Login.php">ВОЙТИ</a>
	  			</form>
	  		</div>
	  	</div>
	</div>