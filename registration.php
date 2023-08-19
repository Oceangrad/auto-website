<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Регистрация</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
</head>
<body id="page5">
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
									<h4><b></b> Обратная связь</h4>
									<div class="address"><b>Код:</b>50122<br />
										<b>Страна:</b>Россия<br />
										<b>Телефон:</b>+ 792210327<br />
										<b>Индекс:</b>+932992</div>
									<p class="p0 extra-wrap"><b>Краткая информация:</b><br />
										Для связи с компанией можете заполнить данную форму или обратиться по контактам.</p>
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
					<hr> 
                    <?php
                    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['password'])){
                        require_once "php/register.php";
                        if($query){
                            include "php/check-for-auth.php";
                        }
                    }
                    ?>
					<h3><b>Ваши</b> Данные</h3>
					<form id="reg-form" method="POST" action="registration.php">
						<fieldset>
						<div class="field">
							<label>Ваше имя:</label>
							<input type="text" required name="firstName" placeholder="имя...">
						</div>
						<div class="field">
							<label>Ваша фамилия:</label>
							<input type="text"required name="lastName" placeholder="фамилия...">
						</div>
						<div class="field">
							<label>Ваш пароль:</label>
							<input type="text" required name="password" placeholder="пароль...">
						</div><br>
						<input type="submit" value="Далее" class="link1">
						<!-- <div class="wrapper"><a href="#" onclick="document.getElementById('contacts-form').submit()" class="link1"><em><b>Далее</b></em></a></div> -->
						</fieldset>
					</form>
					<div id="feedbackResponse"></div>
				</div>
				<div class="col-2">
					<?php 
						include_once "php/aside.php"; 

						$currentLink = "registration.php";
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