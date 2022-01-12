<?php
session_start();
require_once "../../config/db.php";

$_SESSION['product']=$_GET['id'];
$id=$_GET['id'];
$sqlsearch="SELECT * FROM `products` WHERE id=$id";
$result=$db->query($sqlsearch);
$product = $result->fetch_all(MYSQLI_ASSOC);
if($result = $db->query($sqlsearch)){
    foreach($product as $result){
        $name = $result["name"];
        $price = $result["price"];
        $image = $result["image"];
    }
}    

$sql_size="SELECT * FROM `skisize` WHERE id_product=$id";
$result_size=$db->query($sql_size);
$size = $result_size->fetch_all(MYSQLI_ASSOC);

$sql_binding="SELECT * FROM `skibinding` WHERE id_product=$id";
$result_binding=$db->query($sql_binding);
$binding = $result_binding->fetch_all(MYSQLI_ASSOC);

$sql_description="SELECT * FROM `skidescription`";
$result_description=$db->query($sql_description);
$description = $result_description->fetch_all(MYSQLI_ASSOC);
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
    <title>Товар - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require_once "../../pages/include/header/header.php";?>
        </header>
        <main class="page _container">
            <section class="page__product"> 
                <div class="product__container">
                    <div class="product__image">
                        <img src="<?php echo $image?>" alt="">
                    </div>
                    <div class="wrapper__info">
                        <div class="product__header">
                            <h2 class="product__title"><?=$name?></h2>
                            <p class="product__price">&#8381 <?php echo $price?></p>
                        </div>
                        <form method="post" action="../../pages/shopping cart/cartback.php?id=<?= $value_product["id"] ?>" class="product__form">
                            <p class="product__text">Размер лыж</p>
                            <div class="ski-size__container"> 
                                <?php
                                   foreach($size as $result){
                                        $size = $result["size"];
                                        echo'<label class="ski-size__item">
                                                <input class="ski-size__button" type="radio" name="option-0"><span>'. $size .'СМ</span>
                                            </label>';
                                    }
                                ?>
                            </div>
                            <div class="product__list">
                                <div class="dropdown">
                                    <div class="select">
                                        <span class="dropdown-title">Крепления</span>
                                        <i class="fa-chevron-left"></i>
                                    </div>
                                    <input type="hidden" name="binding">
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item">
                                            <p class="text-item">Без крепления</p>
                                            <p class="text-item">Цена: <span>0</span>&#8381</p>
                                        </li>
                                        <?php
                                        foreach($binding as $result){
                                            echo '<li class="dropdown-item" value=\"$id["id"]\">';
                                            echo '<p class="text-item text__item-name">' . $result['binding'] . '</p>';
                                            echo '<p class="text-item">Цена: <span>' . $result['price'] . '</span>&#8381</p>';
                                            // echo $result['price'];
                                            echo '</li>';
                                            // echo '<li id="dropdown-item" value=\"$id["id"]\">'. $result['binding'] .''. $result['price'] .'&#8381</li>';
                                            } 
                                        ?>
                                    </ul>
                                    <input type="hidden" name="binding__hidden" class="binding__hidden">
                                </div>
                              <span class="msg"></span>
                            </div>
                            <div class="container__form-button">
                                <button type="submit" class="form__button"  name="cart__button" value="В корзину">В корзину</button>
                            </div>
                        </form>
                        <div class="product__description">
                        <?php
                            foreach($description as $result){
                                $title = $result["title"];
                                $description = $result["description"];
                                echo'<p class="description__title">'. $title .'</p>
                                <p class="description__text">'. $description .'</p>';
                            } 
                        ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>      
        <footer>
            <?php require_once "../../pages/include/footer/footer.php";?>
        </footer> 
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/dropList.js"></script>
    <script src="js/cart.js"></script>
</body>
</html>
