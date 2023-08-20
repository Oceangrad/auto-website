<?php $title="Регистрация"; require_once "php/templates/head.php"; ?>
<body id="page5">
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
                        require_once "php/modules/register.php";
                        if($query){
                            include "php/modules/check-for-auth.php";
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
						include_once "php/templates/aside.php"; 

						$currentLink = "registration.php";
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