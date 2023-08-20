<?php $title="Карта сайта"; require_once "php/templates/head.php"; ?>
<body id="page6">
<div id="main">
<!-- HEADER -->
<?php require_once "php/templates/header.php" ?>
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
						include_once "php/templates/aside.php"; 

						$currentLink = "sitemap.php";  
						include_once "php/templates/auth.php"; 
					?>
				</div>
			</div>
		</div>
	</div>
<!-- FOOTER -->

<?php include_once "php/templates/footer.php"; ?>

</div>
</body>
</html>