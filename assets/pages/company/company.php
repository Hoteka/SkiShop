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
    <link rel="stylesheet" href="style/company.css">
    <title>Компания - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <div class="header__bg _ibg">
            <img src="img/header/officeA.jpg" alt="">
        </div>
        <header>
            <?php require_once "../../pages/include/header/header.php";?>
        </header>
        <main class="page _container">
            <section class="page__main-block main-block _container"> 
                <div class="main-block__container">
                    <div class="main-block__body">
                        <h1 class="main-block__title">О компании</h1>
                    </div>
                </div>  
            </section>
            <section class="page__discription discription _container">
                <div class="discription__container">
                    <p class="discription__text">
                        Мы любим хорошие испытания. Прошедший сезон нас не разочаровал.
                    </p>
                    <p class="discription__text">
                        Это определенно был год обучения пить из брандспойта в условиях адаптации 
                        нашей деятельности к "новой норме" глобальной пандемии. Несмотря на все это, нам удалось провести 
                        больше исследований и разработок, чем когда-либо прежде. Больше прототипов, больше странных идей 
                        и гораздо больше времени на тестирование, доработку и потакание нестандартным проектам.
                    </p>
                    <p class="discription__text">
                        Мы уже несколько месяцев усердно работаем, создавая то, что будет следующим. Прямо из научной
                        лаборатории в печь, где все это получает наше фирменное вливание радиоактивной черной магии. 
                        Именно то, чего вы ожидаете от самой большой маленькой лыжной компании в мире.<br>В этом году мы
                        выходим на новый уровень: новых моделей больше, чем когда-либо, больше вариантов размеров и даже
                        несколько новых креплений.
                    </p>
                    <p class="discription__text">
                        Мы также рады сообщить, что приняли несколько новых лиц в заводскую команду и заново откалибровали 
                        все оборудование. Магазин продолжает гудеть. Он немного громче и немного более переполнен, но он 
                        более эффективен, чем когда-либо прежде.
                    </p>
                    <p class="discription__text">
                        Хорошие вещи никогда не меняются. По-прежнему полностью ручная работа, прямо здесь, в Рино, штат Невада. 
                        Город, который Бог забыл, раздавая благодать и добродетель. Мы никуда не уходим и не меняемся. И вы тоже 
                        не должны.
                    </p>
                    <p class="discription__text">
                        Оставайтесь с нами
                    </p>
                    <p class="discription__text">
                        MSA
                    </p>
                </div>
            </section>
        </main>      
        <footer>
            <?php require_once "../../pages/include/footer/footer.php";?>
        </footer> 
    </div>
</body>
</html>