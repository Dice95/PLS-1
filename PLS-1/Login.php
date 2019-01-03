<?php 
require "RedBean.php";
$data = $_POST;

if (isset($data["log_in"]))
{
	$errors = array();
	$user = R::findOne("users", "login = ?", array($data["login"]));
	if ( $user )
	{
		if (password_verify($data["password"], $user->password))
		{
			$_SESSION["logged_user"] = $user;
			header("Location: /MainPage.php");
		} else
			{
				$errors[] = "Не верный пароль!";
			}
	} else
		{
			$errors[] = "Логин не существует!";
		}

		if (!empty($errors))
		{
			echo array_shift($errors);
		}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>USER | ID</title>
	<link rel="stylesheet" href="CSS/Login.css">
	<link rel="stylesheet" href="CSS/bootstrap-grid.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="login col-md-auto">
				<h1><span>PHP</span></h1>
			</div>
		</div>
		<div class="row">
			<form action="Login.php" method="POST">
			<div class="form col-sm-12 col-md-auto">
			<p>
				<input type="text" name="login" placeholder="Логин:" required><br>
			</p>
			<p>
				<input type="password" name="password" placeholder="Пароль:" required><br>
			</p>
			<button type="submit" name="log_in">ВОЙТИ</button>
			</div>
			</form>
		</div>
	</div>
</body>
</html>