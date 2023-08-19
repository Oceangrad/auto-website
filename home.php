<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Главная</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</head>
<body id="page1">
<div id="main">
<!-- HEADER -->
<?php require_once "php/header.php" ?>
<!-- CONTENT -->
	<div id="content">
		<ul class="box-list">
			<li>
				<div class="box">
					<div class="border-bot">
						<div class="right-bot-corner">
							<div class="left-bot-corner">
								<div class="inner">
									<div class="box1">
										<div class="inner">
											<h4><b>Скорость</b> ловкость</h4>
											<p> На данный момент фаворитом большинства стала машшна бренда KIA. <a href="#"><img src="images/arrow.gif" alt="" /></a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="alt">
				<div class="box">
					<div class="border-bot">
						<div class="right-bot-corner">
							<div class="left-bot-corner">
								<div class="inner">
									<div class="box1">
										<div class="inner">
											<h2></b> Цена</h2>
											<p>Цены на нашем ресурсе выгоднее на 10%. <a href="#"><img src="images/arrow.gif" alt="" /></a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="last">
				<div class="box">
					<div class="border-bot">
						<div class="right-bot-corner">
							<div class="left-bot-corner">
								<div class="inner">
									<div class="box1">
										<div class="inner">
											<h4><b>Прокат авто </b> информация</h4>
											<p>Вы можете взять в аренду авто, чтобы протестировать его. <a href="#"><img src="images/arrow.gif" alt="" /></a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="indent">
			<div class="wrapper">
				<div class="col-1">
					<h3><span class="speed">Speed</span><span class="racing">Racing</span> - это</h3>
					<p>№1 среди подбора автомобилей в России. Победители конкурса "Лучший интернет-ресурс"
						Личный автомобиль - это очень практично и удобно, вне зависимости от того, живете ли вы в огромном городе или небольшом поселке, 
						в котором все необходимые объекты находятся в максимум десяти минутах ходьбы. Вы можете спокойно поехать на дачу и прихватить с собой большой багаж, 
						и с тем же успехом вы можете съездить в соседний город за покупками..
						самому первому и самому явному плюсу собственного автомобиля можно отнести наличие личного пространства.
						 В автобусе, метро и любом другом общественном транспорте его нарушает каждый, кому вздумается. Что касается собственного автомобиля, то все пространство в нем - исключительно ваше, и никто на него не посягнет. Вас не будут толкать, просить подвинуться, в десятый раз требовать показать проездной билет и нервировать громкой болтовней прямо над ухом. Все же этот психологический фактор имеет большое значение.
						 Какие вопросы задать себе до покупки
						Поиск автомобиля «под себя» — задача, требующая подготовки, особенно если это ваше первое авто. Чтобы выбирать машину было проще, определите потребности, чтобы их разработать, ответьте на несколько несложных вопросов:

						Для чего приобретается автомобиль? Для поездок между домом, работой и супермаркетом? Или для поездок на дачу? А может, вы ищете машину под собственный имидж? Выберите цель, ради которой вы собрались покупать авто, — это поможет в дальнейшем выборе!
						Сколько вы готовы потратить? У каждого есть рамки бюджета, из которых невозможно вырваться. Определите, какую сумму вы готовы потратить на покупку автомобиля, – это существенно ограничит круг поиска. 
						Какой тип кузова вам нужен? Седан, хэтчбек, универсал, кроссовер – среди этого многообразия выбирайте то, что вам подходит. Найдите компромисс между визуальной красотой и функциональностью. Не стоит зацикливаться только на внешнем виде!
						Сколько пассажиров? Комфорт в машине необходим не только водителю. Если вы регулярно ездите с пассажирами, учитывайте их пожелания.
						«Механика» или «автомат»? О, этот извечный спор, который не утихает! Выбирайте, опираясь на условия эксплуатации. Нужно много ездить по городу? АКПП в пробках более удобен. Предстоит много колесить по загородным трассам? «Механика» поможет сэкономить топливо и лучше контролировать машину.
					</p>
					
				</div>
						
				<div class="col-2">
					<?php 
						include_once "php/aside.php"; 

						$currentLink = "home.php?";  
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