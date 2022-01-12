<?php
session_start();
require_once('php/db.php'); 
require_once('php/loginback.php'); 
require_once('php/registrationback.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Регистрация - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <main class="page _container">
            <section class="page__login login__page"> 
                <div class="login-page__container">
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="form" class="form">
                        <input name="firstName" type="text" placeholder="Имя" class="form__item"/>
                        <input name="lastName" type="text" placeholder="Фамилия" class="form__item"/>
                        <input name="email" type="text" placeholder="Email" class="form__item"/>
                        <input name="password" type="password" placeholder="Пароль" class="form__item"/>
                        <input name="repeatPassword" type="password" placeholder="Повторите пароль" class="form__item"/>
                        <input name="reg__button" type="submit" value="Регистрация" class="form__item-button"/>
                    </form>
                </div>                      
            </section>
        </main>      
    </div>
</body>
</html>