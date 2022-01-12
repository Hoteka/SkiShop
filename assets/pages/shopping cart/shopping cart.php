<?php
session_start();
require_once "../../config/db.php";

// $sqlsearch="SELECT * FROM `cart` INNER JOIN `products` ON products.id = cart.id_product INNER JOIN `skibinding` ON cart.id_product = skibinding.id_product INNER JOIN `skisize` ON cart.id_product = skisize.id_product";
$sqlsearch="SELECT * FROM `cart` INNER JOIN `products` ON products.id = cart.id_product ";
$result=$db->query($sqlsearch);
$product = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/shopping cart.css">
    <title>Корзина - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require_once "../../pages/include/header/header.php";?>
        </header>
        <main class="page _container">
            <section class="page__cart cart__page"> 
                <h1 class="cart__title">Корзина</h1>
                <div class="cart-page__container">
                    <?php
                        foreach ($product as $value){    
                    ?>
                    <div class="product__container after">
                        <div class="product-image">
                            <img src="<?=$value["image"]?>" alt="">
                        </div>
                        <div class="product__info">
                            <p class="product__title product__text"><?=$value["name"]?></p>
                            <p class="product__size product__text">Размер лыж: 174<?=$value["size"]?>СМ</p> 
                            <p class="product__size product__text">Крепление: Look Pivot 15 GW - Forza 2.0<?=$value["binding"]?></p> 
                            <p class="product__size product__text">Цена лыж: <?=$value["price"]?>&#8381</p> 
                            <p class="product__size product__text">Цена крепления: <?=$value["price"]?>&#8381</p> 
                            <?php
                                $var1 = $value["price"];
                                $var2 = $value["price"];   
                            ?>
                            <p class="product__price product__text">Всего: <?php echo $var1+$var2?>&#8381</p>
                        </div>
                        <a href="#" class="product__remove"></a>
                    </div>
                    <div class="product__payment">
                        <p class="paymen__text">Итого: <?php echo $var1+$var2?>&#8381</p>
                        <button type="submit" class="paymen__button" value="Оплата">Оплата</button>
                    </div>
                    <?php
                        } 
                    ?>
                </div>
            </section>
        </main>      
        <footer>
            <?php require_once "../../pages/include/footer/footer.php";?>
        </footer> 
    </div>
</body>
</html>