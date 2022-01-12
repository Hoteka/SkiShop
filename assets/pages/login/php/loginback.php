<?php
session_start();

if (isset($_POST['login__button'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sqlsearch="SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'";
    $result=$db->query($sqlsearch); //выполнение запроса 
    //поиск хэшированного пароля в БД по введенному логину
    $sqlsearch="SELECT password FROM users WHERE email='$email'";
    $result=$db->query($sqlsearch);//выполнение запроса
    $row = $result->fetch_array(MYSQLI_ASSOC);//преобразование результатов запроса в массив
    $hashed_password=$row['password']; //запись в переменную хэшированного пароля
    //сопоставление введенного пароля и пароля из БД
    if (password_verify($password, $hashed_password)) {
        $sqlsearch="SELECT * FROM users WHERE email='$email' and password='$hashed_password'";
        $result=$db->query($sqlsearch); 
        $arrResult=$result->fetch_all(MYSQLI_ASSOC);

        if(count($arrResult)==1){
            $_SESSION['user']=$email;
            $_SESSION['role']=$arrResult[0]['id_role'];
        // echo "Вход выполнен успешно";
        // header('location:../../../assets/pages/account/account.php');
        echo "<meta http-equiv='refresh' content='0; ../../../assets/pages/account/account.php'>";
        }
        else{
        //echo "Неверный логин или пароль";
        }
    }
    else {
    //echo 'Password ошибочен';
    }    

    $arrResult=$result->fetch_all(MYSQLI_ASSOC);//массив из данных запроса
}
?>