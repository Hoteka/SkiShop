<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../pages/include/header/style/header.css">
    <title></title>
</head>
<body>
    <header class="header header__fixed">
        <div class="header__container">
            <a href="../../../index.php" class="header__logo">MSA</a>
            <nav class="header__menu menu">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="../../pages/products/product.php" class="menu__link">Товары</a>
                    </li>
                    <!-- <li class="menu__item">
                        <a href="../../pages/products/product.php#womens" class="menu__link">Женщины</a>
                    </li>
                    <li class="menu__item">
                        <a href="../../pages/products/product.php#youth" class="menu__link">Молодежь</a>
                    </li> -->
                    <li class="menu__item">
                        <a href="../../pages/factory/factory.php" class="menu__link">Фабрика</a>
                    </li>
                    <li class="menu__item">
                        <a href="../../pages/company/company.php" class="menu__link">Компания</a>
                    </li>
                    <li class="menu__item">
                        <a href="../../pages/contact/contact.php" class="menu__link">Контакты</a>
                    </li>
                    <?php
                        if($_SESSION['role']==1){
                        ?>
                            <li class="menu__item">
                            <a href="../../pages/admin/index.php" class="menu__link">Админ</a>
                        </li>
                        <?php
                        }
                    ?>  
                </ul>
            </nav>
            <div class="header__items">
                <div class="header__items">
                    <!-- <a href="#" class="header__link"><img src="img/header/search24.png" alt=""></a> -->
                    <?php
                        if(!isset($_SESSION['user'])){
                        ?>
                            <a href="../../pages/login/login.php" class="header__link"><img src="img/header/user24.png" alt=""></a>
                        <?php
                        }
                        else{
                        ?>
                            <a href="../../pages/account/account.php" class="header__link"><img src="img/header/user24.png" alt=""></a>
                        <?php
                        }
                    ?>        
                    <a href="../../pages/shopping cart/shopping cart.php" class="header__link"><img src="img/header/shopping-cart.png" alt=""></a>
                </div>                
            </div>
        </div>
    </header>
</body>
</html>