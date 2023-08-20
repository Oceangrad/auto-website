<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Машины не существует</title>
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
	<div class="padding"></div>
	<div id="content">
		<div class="indent">
			
			<div class="wrapper">

				<div id="box">
					<?php 
					require "php/getCurrentCar.php"; 

					if(!isset($_SESSION['userID']) || (isset($_GET['unAuth']) && $_GET['unAuth'] == true)){
						$_SESSION['userID'] = -1;
					}

					echo 
					"<div class='main-info'>
						<h3>".$data['marka']." ".$data['model']."</h3><br>

						<div class='card-car'>
							<div class='car-img'>
								<img id='currentCarImg' src='".$data['img']."'>
							</div><br><br>

							<div class='text-box'>
								<p>Марка: ".$data['marka']."</p>
								<p>Модель: ".$data['model']."</p>
								<p>Год выпуска: ".$data['year']."</p>
								<p>Кузов: ".$data['kuzov']."</p>
								<p>Объём двигателя: ".$data['V']." л.</p>
								<p>Тип топлива: ".$data['tipOil']."</p>
								<p>Привод: ".$data['privod']."</p>
								<p>Коробка передач: ".$data['boxPered']."</p>	
							</div>
						</div>
						<div class='lover-info'>
							<p class='cen-car'>Цена: <b>".$data['cen']." руб.</b></p>
							<button class='car-btn' onclick='sendCarRequest(".$_SESSION['userID'].", ".$_GET['carID'].")'><b>Подать заявку на покупку</b></button><br><br>
						</div>

						
					</div>";
					?>
					<div id='response'></div><br>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER -->

	<?php include_once "php/footer.php"; ?>

</div>
<script> setTitle(' <?php echo $data['marka']." ".$data['model']; ?> ') </script>
</body>
</html>