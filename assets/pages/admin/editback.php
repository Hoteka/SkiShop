<?php
session_start();
require_once "../../config/db.php";

if(isset($_POST['edit__button'])){
    $id = $_GET["id"];
    $nameEdit = $_POST['name'];
    $priceEdit =  $_POST['price'];
    $uploaddir = 'img/product/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    $downloadimage = move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
    $sql = "UPDATE `products` SET `name` = '$nameEdit', `price` = $priceEdit, `image` = '$uploadfile' WHERE `products`.`id` = $id"; 
    $result = $db->query($sql);
    if($result = $db->query($sql)){
        echo "<meta http-equiv='refresh' content='0; ../../../assets/pages/admin/index.php'>";
    }  
}     
?>    