<?php
session_start();
require_once "../../pages/login/php/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/contact.css">
    <title>Контакты - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require_once "../../pages/include/header/header.php";?>
        </header>
        <main class="page __container">
            <section class="page__contact contact">
                <div class="contact__container">
                    <div class="contact__body">
                        <div class="contact__header">
                            <p class="contact__text">
                                Телефон компании: +7 444 44 44 
                            </p>
                            <p class="contact__text">
                                Часы работы: с 9:00 до 20:00
                            </p>
                            <p class="contact__text">
                                Адрес: ул.Гоголя, 30
                            </p>
                        </div>
                        <div class="contact__form">
                            <form action="" method="post" name="form" class="form">
                                <input name="name" type="text" placeholder="Ваше имя" class="form__item"/>
                                <input name="email" type="text" placeholder="Ваша почта" class="form__item"/>
                                <textarea name="message" placeholder="Текст сообщения" class="form__item"></textarea>
                                <input type="submit" value="Отправить" class="form__item-button"/>
                            </form>
                        </div>
                        <div class="contact__main">
                            <p class="contact__text">
                                Если у вас есть вопросы, вам нужна помощь с заказом или вы просто хотите<br> 
                                пообщаться, пожалуйста, свяжитесь с нами по адресу: info@msa.com
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>      
        <footer>
            <?php require_once "../../pages/include/footer/footer.php";?>
        </footer> 
    </div>
</body>
</html>