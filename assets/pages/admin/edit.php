<?php
session_start();
require_once "../../config/db.php";
require_once "../../pages/admin/editback.php";

$id = $_GET["id"];
$sqlsearch="SELECT * FROM `products` WHERE id=$id";
$result=$db->query($sqlsearch);
$product = $result->fetch_all(MYSQLI_ASSOC);
if($result = $db->query($sqlsearch)){
    foreach($product as $row){
        $name = $row["name"];
        $price = $row["price"];
        $image = $row["image"];
    }
}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/edit.css">
    <title>Редактирование</title>
</head>
<body>
    <main class="page __container">
        <section class="page__edit edit">
            <div class="edit__container">
                <div class="edit__body">
                    <div class="edit__form">
                        <form action="" method="post" class="form" enctype="multipart/form-data">
                            <div class="edit__column">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <label for="title" class="title__ski">Название лыж</label>
                                <input type="text" name="name" value="<?=$name?>" class="form__item">
                            </div>
                            <div class="edit__column">
                                <label for="title" class="title__ski">Цена</label>
                                <input type="text" name="price" value="<?=$price?>" class="form__item">
                            </div>      
                            <div class="edit__column column__photo">
                                <img width="50px" height="170" src="<?=$image?>" alt="">
                                <!-- <input class="upload__photo" value="Выбрать" type="button">  -->
                                <input type="file" name="image">
                            </div>
                            <div class="edit__column">
                                <input class="form__button" type="submit" name="edit__button" value="Изменить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>      
</body>
</html>