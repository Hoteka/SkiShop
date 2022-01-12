<?php
session_start();
require_once "../../config/db.php";
require_once "../../pages/admin/deleteback.php";

$sql_categories="SELECT * FROM `series`";
$result_sql=$db->query($sql_categories);
$product_category = $result_sql->fetch_all(MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($products);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Панель админа</title>
</head>
<body>
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
                            </div>
                            <?php
                            foreach ($product as $value_product){
                            ?> 
                            <div class="product__image">
                                <div class="product-image__container">
                                    <div class="image">
                                        <a class="product-image__link">
                                            <img src="<?=$value_product["image"]?>" alt="">
                                        </a>
                                        <div class="details width"> 
                                            <form action="deleteback.php" method="post" class="details__form">
                                                <h4 class="details__title"><?=$value_product["name"]?></h4> 
                                                <span class="details__price"><?=$value_product["price"]?> &#8381</span>
                                                <input type="hidden" name="deleteItem" value="<?=$value_product["id"]?>">
                                                <a class="form__button" href="edit.php?id=<?=$value_product["id"]?>">Редактировать</a>
                                                <input class="form__button" type="submit" name="delete__button" value="Удалить">
                                                
                                            </form>
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
        </div>
    </div>   
</body>
</html>