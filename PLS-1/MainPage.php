<?php
require "RedBean.php";
$count = 0;
$data = $_POST;

if(isset($data['btn']))
{
	$_SESSION['logged_user'];
	$count = $_COOKIE['count'];
	$count++;
	setcookie('count', $count);
	echo "<div class='click' style='position: absolute; top: 405.5px; left: 490px; font-family: 'Open-Sans', Monospace;'>Вы накликали уже ".$count." так держать!</div>";
}

if (empty($_SESSION['logged_user']))
{
	header("Location: /index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PORTFOLIO</title>
	<link rel="stylesheet" href="CSS/bootstrap-grid.min.css">
	<link rel="stylesheet" href="CSS/WebMe.css">
</head>
<body>
	<div class="container main_header">
		<div class="row">
			<div class="logo col-sm-auto col-md-auto col-lg-auto">
				<h1><a href="MainPage.php">PORTFOLIO</a></h1>
			</div>
			<div class="links col-sm-auto col-md-9 col-lg">
				<a href="index.php">[На Главную]</a>
				<a href="About.php">О Себе</a>
				<a href="log_out.php">[Выход]</a>
			</div>
		</div>
	</div>

	<div class="container">
		<hr class="line">
		<div class="row">
			<div class="col-md-3 logo_2">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel similique voluptates minima exercitationem tempora est sit odio, nulla quam.</p>

				<img src="IMG/Penguins.jpg" class="img-fluid" alt="">

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel similique voluptates minima exercitationem tempora est sit odio, nulla quam.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id vel similique voluptates minima exercitationem tempora est sit odio, nulla quam.</p>
			</div>
			<div class="col-md-9 right">
				<div class="attention"><p>Добро пожаловать <?php echo $_SESSION['logged_user']->login; ?>, это тестовый сайт, проверьте его работоспособность или нажмите кнопку выхода для завершения сессии. Ваше имя в строке это работа "СЕССИЙ".</p></div>
				<hr class="line">

				<p>
					<h3 style="font-family: 'Open-Sans', Monospace;">Накликайте наш счётчик и внесите свою лепту, если вы снова вернётесь то всегда сможете продолжить. Эта работа COOKIES.</h3>
					<form action="<?php $_SERVER['script_name'] ?> " method="post">
						<button name="btn">CLICK</button>
					</form>
				</p>



				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam animi fuga adipisci eaque ipsum veniam sit voluptatem officia! Inventore beatae rerum exercitationem, omnis autem, expedita illo earum est, aliquid quasi repellat totam necessitatibus! Tempore quasi iste in, dolor modi hic, voluptatibus illum harum suscipit, porro laudantium mollitia, soluta quod molestiae? Enim cum, dicta voluptatem, ipsa aliquam sequi debitis placeat id eligendi quia quibusdam at vitae ut quod temporibus saepe! Ullam esse, illum autem ea consequatur cum. Eius, voluptates? Fuga recusandae modi, ratione molestias eveniet doloremque dignissimos, quae perferendis, velit dicta nihil libero itaque facilis voluptatum, vitae dolor accusamus. Voluptas, maxime?</p>
				<p>Nobis maiores, esse est repellendus facilis obcaecati aperiam possimus sint, praesentium qui nisi cupiditate atque suscipit, sequi aliquid expedita explicabo necessitatibus nesciunt cumque velit dolorem incidunt veniam facere! Illo nihil quas laudantium obcaecati magnam placeat atque ratione esse ipsum optio rem molestias eligendi nisi dignissimos hic delectus consequuntur, amet fugit omnis repellat totam libero quidem adipisci dolorem. Tempora nobis ad saepe neque accusantium ipsam cum, a consectetur odit aspernatur ab veniam dolorem, mollitia dolor aliquam. Consequuntur assumenda culpa saepe accusantium, magni neque, nostrum molestiae ipsam voluptas voluptates fugiat natus eveniet deserunt, aliquid expedita. Asperiores, dolorum animi similique soluta dolorem deserunt!</p>
				<p>Earum, illo. Iusto, accusamus, ab. Error, unde sint illum labore laudantium aperiam modi laborum commodi voluptate iure vel. Expedita et fuga inventore, aperiam accusantium tempora. Consequuntur, libero, quos. At a ex voluptatum eum alias rerum eveniet enim eligendi esse iure aliquam mollitia, explicabo perspiciatis nulla soluta ipsam hic libero corrupti similique neque sunt. Magni dolor voluptates neque culpa voluptas minus aliquam. Laudantium cupiditate saepe modi debitis ab aliquid, assumenda reiciendis voluptates repellendus vitae dolorum sit veritatis temporibus! Cum incidunt tempore possimus expedita delectus quia sed corporis rerum ipsa dolor rem iste obcaecati autem pariatur ut, repellendus fugit eos. Veritatis, culpa.</p>
			</div>
		</div>
	</div>
</body>
</html>



