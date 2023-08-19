<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Статьи</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</head>
<body id="page3">
<div id="main">
<!-- HEADER -->
<?php require_once "php/header.php" ?>
<!-- CONTENT -->
	<div id="content"><div class="ic">!</div>
		<div class="box">
			<div class="border-bot">
				<div class="right-bot-corner">
					<div class="left-bot-corner">
						<div class="inner">
							<div class="box1 alt">
								<div class="inner">
									
									
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
					<h3><b></b> </h3>
					<ul class="list">
						<li><img src="images/3page-img1.jpg" alt="" /><a href="article.html">Автогонки</a><br />
							Автомобиль с московского сервиса Speed Racing стал лучшим среди гонщиков</li>
						<li><img src="images/3page-img2.jpg" alt="" /><a href="article.html">Номинация</a><br />
							В эту среду мы были нараждены званием "Лучший автосервис"</li>
						<li><img src="images/3page-img3.jpg" alt="" /><a href="article.html">Распродажа</a><br />
							Продолжаются огромные скидки на автомобили иномарок</li>
						<li><img src="images/3page-img4.jpg" alt="" /><a href="article.html">Прокат</a><br />
							На данный момент у нас доступна опция проката авто для тест-драйва.</li>
					</ul>
				</div>
				<div class="col-2">
					<?php 
						include_once "php/aside.php";

						$currentLink = "articles.php?";  
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