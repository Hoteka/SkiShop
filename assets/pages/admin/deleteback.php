<?php
session_start();
require_once "../../config/db.php";


if(isset($_POST['delete__button'])){
    $delete = $_POST['deleteItem'];
    $sql = "DELETE FROM `products` where `id` = '$delete'"; 
    $result = $db->query($sql);
    if($result = $db->query($sql)){
        echo "<meta http-equiv='refresh' content='0; ../../../assets/pages/admin/index.php'>";
    }
}
?>
