<div class="box3">
    <div class="right-bot-corner">
        <div class="left-bot-corner">
            <div class="inner">

                <?php

                if(isset($_GET['unAuth']) && $_GET['unAuth'] == true){
                    $_SESSION['isAuth'] = false;
                    session_destroy();
                }
                
                if(isset($_POST['lastName']) && isset($_POST['password'])){
                    include "php/modules/check-for-auth.php";
                }

                ?>

                <?php
                // $_SESSION['isAuth'] = true;

                if(!isset($_SESSION['isAuth']))
                    $_SESSION['isAuth'] = false;
                ?>

                <h4><b>Логин</b> Форма</h4>

                <?php

                $login_form = $_SESSION['isAuth'] ? "<p class='last light-text'>Вы уже авторизованы</p><a class='last light-text' href='$currentLink?&unAuth=true'>Выйти из аккаунта</a>" : 
                "<form method='POST' action='$currentLink?' id='login-form'>
                    <fieldset>
                        <div class='field'><label>фамилия:</label><input required type='text' name='lastName'/></div>
                        <div class='field'><label>пароль:</label><input required type='password' name='password'/></div>
                        <div class='field1'><button class='btn' onclick='document.getElementById('login-form').submit()'><em><b>Log In<span>Log In</span></b></em></button></div>
                        <a class='last light-text' href='registration.php'>реистрация</a>
                    </fieldset>
                </form>";

                echo $login_form;
                ?>
            </div>
        </div>
    </div>
</div>