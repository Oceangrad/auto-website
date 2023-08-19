<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Контакты</title>
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
									<div class="address">
										<b>Телефон:</b> +7 (922) 103 27-83<br>
										<b>Адрес:</b>ул. Миклухо-Маклая, 36А
									</div>
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
					<h3><b>Ваши</b> Контакты</h3>
					<form id="contacts-form" onsubmit="sendFeedback(senderName, email, msgName, msg)">
						<fieldset>
						<div class="field">
							<label>Ваше имя:</label>
							<input type="text" required name="senderName" placeholder="имя...">
						</div>
						<div class="field">
							<label>Электронная почта:</label>
							<input type="text"required name="email" placeholder="email...">
						</div>
						<div class="field">
							<label>Ва запрос:</label>
							<input type="text" required name="msgName" placeholder="запрос...">
						</div>
						<div class="field">
							<label>Ваше сообщение:</label>
							<textarea cols="1" rows="1" name="msg" required placeholder="сообщение..."></textarea>
						</div>
						<input type="submit" value="Далее" class="link1">
						<!-- <div class="wrapper"><a href="#" onclick="document.getElementById('contacts-form').submit()" class="link1"><em><b>Далее</b></em></a></div> -->
						</fieldset>
					</form>
					<div id="feedbackResponse"></div>
				</div>
				<div class="col-2">
				<?php 
						include_once "php/aside.php";

						$currentLink = "contact-us.php?";  
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