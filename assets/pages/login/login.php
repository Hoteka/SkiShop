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
    <title>Авторизация - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <main class="page _container">
            <section class="page__login login__page"> 
                <div class="login-page__container">
                    <form action="../login/login.php" method="post" name="form" class="form">
                        <input name="email" type="text" placeholder="Ваша почта" class="form__item"/>
                        <input name="password" type="password" placeholder="Пароль" class="form__item"/>
                        <input name="login__button" type="submit" value="Войти" class="form__item-button"/>
                        <a href="../login/registration.php" class="registration__button">Зарегистрироваться</a>
                    </form>
                </div>                      
            </section>
        </main>      
    </div>
</body>
</html>