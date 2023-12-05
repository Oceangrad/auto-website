<?php $title="Статьи"; require_once "../templates/head.php"; ?><body id="page3">
<div id="main">
<!-- HEADER -->
<?php require_once "../templates/header.php" ?>
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
						<li>
							<img src="../images/3page-img1.jpg"/>
							<a href="#">Автогонки</a><br/>
							Автомобиль с московского сервиса Speed Racing стал лучшим среди гонщиков
						</li>
						<li>
							<img src="../images/3page-img2.jpg"/>
							<a href="#">Номинация</a><br/>
							В эту среду мы были нараждены званием "Лучший автосервис
							"</li>
						<li>
							<img src="../images/3page-img3.jpg"/>
							<a href="#">Распродажа</a><br/>
							Продолжаются огромные скидки на автомобили иномарок</li>
						<li>
							<img src="../images/3page-img4.jpg"/>
							<a href="#">Прокат</a><br/>
							На данный момент у нас доступна опция проката авто для тест-драйва.
						</li>
					</ul>
				</div>
				<div class="col-2">
					<?php 
						include_once "../templates/aside.php"; 

						$currentLink = "articles.php";  
						include_once "../templates/auth.php"; 
					?>
				</div>
			</div>
		</div>
	</div>
<!-- FOOTER -->

<?php include_once "../templates/footer.php"; ?>

</div>
</body>
</html>