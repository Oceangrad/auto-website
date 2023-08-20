<?php $title="О нас"; require_once "php/templates/head.php"; ?>
<body id="page2">
<div id="main">
<!-- HEADER -->
<?php require_once "php/templates/header.php" ?>
<!-- CONTENT -->
	<div id="content"><div class="ic">Подробная информация ниже</div>
		<div class="box">
			<div class="border-bot">
				<div class="right-bot-corner">
					<div class="left-bot-corner">
						<div class="inner">
							<div class="box1 alt">
								<div class="inner">
									<h4><b>О нас</b> информация</h4>
									<p class="p0">Автомобиль является визитной карточкой в обществе. На нашем сайте представлены самые популярные марки, новинки и любимки большинства от различных производителей 
										Свой автомобиль — это единственное спасение от дискомфорта и хамства в общественном транспорте. Машина — это современность, мобильность и определённая независимость, а также — орудие для заработка. А то, что ремонтировать её надо, так это любую вещь когда-то надо чинить. А как на ней удобно в магазин ездить за покупками, положил в багажник и поехал
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
					<h3><b>Цены</b> подробная информация</h3>
					<ul class="list">
						<li><img src="images/2page-img1.jpg" alt="" /><a href="#">Тимур, менеджер</a><br />Приобрести автомобиль именно здесь было самым лучшим решением!Теперь моя семья счастлива</li>
						<li><img src="images/2page-img2.jpg" alt="" /><a href="#">Александр, адвокат</a><br />У меня было мноо сомнений, но мой друг посоветовал вас,я не пожалел</li>
						<li><img src="images/2page-img3.jpg" alt="" /><a href="#">Павел, бизнесмен</a><br />АВто - это мой имидж, поэтому здесь мне выбрали самый лучший.</li>
						<li><img src="images/2page-img4.jpg" alt="" /><a href="#">Марк, актер</a><br />Меня проконсультировали и предложили выгодное предложение, рекомендую! </li>
					</ul>
				</div>
				<div class="col-2">
					<?php 
						include_once "php/templates/aside.php"; 

						$currentLink = "about-us.php";
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