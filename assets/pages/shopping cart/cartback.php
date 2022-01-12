<?php
session_start();
require_once "../../config/db.php";

// $index= 0;
if(isset($_POST['cart__button'])){
    $id = $_GET["id"];
    $size = $_POST['option-0'];
    $binding2 =  $_POST['binding__hidden'];

    // $sql_binding="SELECT * FROM `skibinding`";
    // $result_binding=$db->query($sql_binding);
    // $binding = $result_binding->fetch_all(MYSQLI_ASSOC);
    // $binding_update = array();
    // foreach($binding as $result){
    //     $string = str_replace(' ', '', $result['binding']);
    //     $binding_update[] = $result['id'];
    //     $binding_update[] = $string;
    // }
    // for ($i = 0; $i <= count($binding_update); $i++) {
    //     if ($binding2 == $binding_update[$i]) {
    //         $index = $binding_update[$i-1];
    //     }
    // }
    // $sql_binding_new="SELECT `binding` FROM `skibinding` WHERE `id`=$index";
    // $result_binding_new=$db->query($sql_binding_new);
    // $binding_new = $result_binding_new->fetch_all(MYSQLI_ASSOC);
    // print_r($binding_new);
    // echo $index;

    $user = $_SESSION['user'];
    $id_product = $_SESSION['product'];
    $sql="INSERT INTO cart(id_product, email) VALUES ('$id_product', '$user')";
    $result=$db->query($sql);

    // echo $id;
    // echo $_SESSION['user'];
    // echo $index;
    echo "<meta http-equiv='refresh' content='0; ../../../assets/pages/shopping cart/shopping cart.php'>";
}  

?>