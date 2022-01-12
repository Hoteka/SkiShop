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
    <link rel="stylesheet" href="style/factory.css">
    <title>Фабрика - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <div class="header__bg _ibg">
            <img src="img/header/factory-bg.jpg" alt="">
        </div>
        <header>
            <?php require_once "../../pages/include/header/header.php";?>
        </header>
        <main class="page">
            <section class="page__main-block main-block _container"> 
                <div class="main-block__container">
                    <div class="main-block__body">
                        <h1 class="main-block__title">Наше производство</h1>
                    </div>
                </div>  
            </section>
            <section class="page__discription discription _container">
                <div class="discription__container">
                    <p class="discription__text">
                        Добро пожаловать на наш производственный комплекс в Неваде, США. Именно здесь мы 
                        изготавливаем и режем все наши сердечники, укладываем, прессуем и обрезаем лыжи 
                        небольшими партиями, а затем дорабатываем каждую пару с помощью нашей европейской 
                        настройки. Единственное, чего вы не видите на этих фотографиях, - это пекарня, где 
                        специальная команда волшебных эльфов целый день печет крошечные буханки хлеба с 
                        корицей, просто чтобы на фабрике хорошо пахло.
                    </p>
                </div>
            </section>
            <section class="page__video video">
                <div class="video__container">
                    <video src="video/factory.mp4" width="1920" height="1080" muted="true" autoplay loop controls poster="img/main/factory.jpg"></video>
                </div>
            </section>
        </main>      
        <footer>
            <?php require_once "../../pages/include/footer/footer.php";?>
        </footer> 
    </div>
</body>
</html>