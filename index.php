<?php
session_start();
require_once "assets/pages/login/php/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/main.css">
    <title>MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <div class="header__bg _ibg">
            <img src="assets/img/main-block/commander108.jpg" alt="">
        </div>
        <header class="header header__fixed">
            <div class="header__container">
                <a href="#" class="header__logo">MSA</a>
                <nav class="header__menu menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="assets/pages/products/product.php" class="menu__link">Товары</a>
                        </li>
                        <!-- <li class="menu__item">
                            <a href="assets/pages/products/product.php#womens" class="menu__link">Женщины</a>
                        </li>
                        <li class="menu__item">
                            <a href="assets/pages/products/product.php#youth" class="menu__link">Молодежь</a>
                        </li> -->
                        <li class="menu__item">
                            <a href="assets/pages/factory/factory.php" class="menu__link">Фабрика</a>
                        </li>
                        <li class="menu__item">
                            <a href="assets/pages/company/company.php" class="menu__link">Компания</a>
                        </li>
                        <li class="menu__item">
                            <a href="assets/pages/contact/contact.php" class="menu__link">Контакты</a>
                        </li>
                        <?php
                            if($_SESSION['role']==1){
                            ?>
                                <li class="menu__item">
                                <a href="assets/pages/admin/index.php" class="menu__link">Админ</a>
                            </li>
                            <?php
                            }
                        ?>       
                        
                    </ul>
                </nav>
                <div class="header__items">
                    <!-- <a href="#" class="header__link"><img src="assets/img/header/search24.png" alt=""></a> -->
                    <?php
                        if(!isset($_SESSION['user'])){
                        ?>
                            <a href="assets/pages/login/login.php" class="header__link"><img src="assets/img/header/user24.png" alt=""></a>
                        <?php
                        }
                        else{
                        ?>
                            <a href="assets/pages/account/account.php" class="header__link"><img src="assets/img/header/user24.png" alt=""></a>
                        <?php
                        }
                    ?>        
                    <a href="assets/pages/shopping cart/shopping cart.php" class="header__link"><img src="assets/img/header/shopping-cart.png" alt=""></a>
                </div>                
            </div>
    </header>
        <main class="page">
            <section class="page__main-block main-block">
                <div class="main-block__container">
                    <div class="main-block__body">
                        <p class="main-block__text">Гибкие. Стабильные. Быстрые. Посаженые. Резные.</p>
                        <h1 class="main-block__title">COMMANDER SERIES</h1>
                        <div class="main-block__button">
                            <a href="assets/pages/products/product.php#commander" class="main-block__link">Купить сейчас</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__product product">
                <div class="product__item">
                    <div class="product__container">
                        <div class="product__image">
                            <a href="assets/pages/product/product.php?id=5" class="product-image__link">
                                <img src="assets/img/product/wildcat.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__body">
                            <h1 class="product-body__title">
                                <a href="assets/pages/product/product.php?id=5" class="product-title__link">WILDCAT</a>
                            </h1>
                            <p class="product-body__text">Ваши новые порошковые лыжи</p>
                            <div class="product-body__button">
                                <a href="assets/pages/product/product.php?id=5" class="product-body__link">Смотреть</a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="product__item">
                    <div class="product-container__no-revers">
                        <div class="product__image"> 
                            <a href="assets/pages/product/product.php?id=13" class="product-image__link">
                                <img src="assets/img/product/sierra.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__body">
                            <h1 class="product-body__title">
                                <a href="assets/pages/product/product.php?id=13" class="product-title__link">SIERRA</a>
                            </h1>
                            <p class="product-body__text">Большой выбор женских лыж</p>
                            <div class="product-body__button">
                                <a href="assets/pages/product/product.php?id=13" class="product-body__link">Смотреть</a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="product__item">
                    <div class="product__container-made">
                        <div class="product-image__made"> 
                            <a href="assets/pages/factory/factory.php" class="product-image__link">
                                <img src="assets/img/product/made-America.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__body">
                            <h1 class="product-body__title">
                                <a href="assets/pages/factory/factory.php" class="product-title__link">Для настоящих фрирайдеров</a>
                            </h1>
                            <p class="product-body__text">Сделано в Америке</p>
                            <div class="product-body__button">
                                <a href="assets/pages/factory/factory.php" class="product-body__link">Смотреть</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
        </main>      
        <footer class="footer">
            <div class="footer__container _container">
                <div class="footer__body">
                    <div class="footer__column">
                        <div class="footer__menu menu-footer">
                            <ul class="menu-footer__list">
                                <li class="menu-footer__item"><a href="assets/pages/warranty/warranty.php" class="menu-footer__link">Гарантия</a></li>
                                <li class="menu-footer__item"><a href="assets/pages/privacy police/privacy police.php" class="menu-footer__link">Политика<br>конфиденциальности</a></li>
                                <li class="menu-footer__item"><a href="assets/pages/shipping returns/shipping returns.php" class="menu-footer__link">Доставка & Возврат</a></li>
                                <li class="menu-footer__item"><a href="#" class="menu-footer__link">FAQ</a></li>
                                <li class="menu-footer__item"><a href="assets/pages/contact/contact.php" class="menu-footer__link">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__column footer__column__center">
                        <div class="footer__logo">
                            <a href="#" class="footer__logo header__logo">MSA</a>
                        </div>
                    </div>
                    <div class="footer__column">
                        <div class="footer__bottom">
                            <div class="footer-social__links">
                                <a href="https://twitter.com/?lang=ru" class="footer-social__link"><img src="assets/img/footer/twitter.png" alt=""></a>
                                <a href="https://ru-ru.facebook.com/" class="footer-social__link"><img src="assets/img/footer/facebook.png" alt=""></a>
                                <a href="https://www.instagram.com/?hl=ru" class="footer-social__link"><img src="assets/img/footer/instagram.png" alt=""></a>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </footer>
    </div>
</body>
</html>