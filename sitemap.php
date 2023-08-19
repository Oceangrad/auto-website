<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Карта сайта</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</head>
<body id="page6">
<div id="main">
<!-- HEADER -->
<?php require_once "php/header.php" ?>
<!-- CONTENT -->
	<div id="content"><div class="ic">More Website Templates at TemplateMonster.com!</div>
		<div class="box">
			<div class="border-bot">
				<div class="right-bot-corner">
					<div class="left-bot-corner">
						<div class="inner">
							<div class="box1 alt">
								<div class="inner">
									<h4><b></b> </h4>
									<p class="p0">Удобное расположение будет удобным для каждого пользователя и сможет 
										помочь найти нужну страницу сайта и вернуться к предыдущим разделам
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="indent">
			<div class="wrapper">
				<div class="col-1">
					<p>Ознакомление с разделами сайта. Здесь ниже будут представлены ссылки, которые приведут вас именно на нужную страницу, так будет проще и удобнее ддля вас</p>
					<ul class="sitemap">
						<li><a href="home.php">Главная</a></li>
						<li><a href="about-us.php">Отзывы</a></li>
						<li><a href="articles.php">Статьи</a>
						<li><a href="contact-us.php">Контакты</a></li>
						<li><a href="sitemap.php">Навигация</a></li>
					</ul>
					<p class="p0">Самое время приобрести автомобиль именно у нас и стать нашим клиентом в ближайшее время с большой выгодой</p>
				</div>
				<div class="col-2">
					<?php 
						include_once "php/aside.php"; 

						$currentLink = "sitemap.php";  
						include_once "php/auth.php"; 
					?>
				</div>
			</div>
		</div>
	</div>
<!-- FOOTER -->

<?php include_once "php/footer.php"; ?>

</div>
</body>
</html>