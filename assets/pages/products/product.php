<?php
session_start();
require_once "../../pages/login/php/db.php";

$sql_categories="SELECT * FROM `series`";
$result_sql=$db->query($sql_categories);
$product_category = $result_sql->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($product);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/product.css">
    <title>Товары - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require_once "../../pages/include/header/header.php";?>
        </header>
        <main class="page _container">
            <section class="page__product product">
                <div class="product__container">
                    <?php
                        foreach ($product_category as $value){
                            //echo "<br>".$value['id'];
                            $sql_search="SELECT * FROM `series` INNER JOIN `products` ON series.id=products.id_series where series.id=".$value['id'];
                            //var_dump($sql_search);
                            $result=$db->query($sql_search);
                            $product = $result->fetch_all(MYSQLI_ASSOC);
                    ?>
                    <div class="product__column">
                        <div class="product__body">
                        <?php
                        ?>
                            <h1 class="product__body-title"><?=$value['name']?></h1>
                            <p class="product__body-text"><?=$value['description']?></p>
                        </div>
                        <?php
                          foreach ($product as $value_product){
                         ?> 
                        <div class="product__image">
                            <div class="product-image__container">
                                <div class="image">
                                    <a class="product-image__link" href="../../pages/product/product.php?id=<?= $value_product["id"] ?>">
                                        <img src="<?=$value_product["image"]?>" alt="">
                                    </a>
                                    <div class="details width"> 
                                        <a class="details__link" href="../../pages/product/product.php?id=<?= $value_product["id"] ?>">
                                        <h4 class="details__title"><?=$value_product["name"]?></h4> 
                                        <span class="details__price"><?=$value_product["price"]?> &#8381</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>                      
                    </div>
                    <div class="container__after"></div>
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