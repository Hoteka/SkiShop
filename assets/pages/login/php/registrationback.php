<?php
require_once('db.php'); 
    if (isset($_POST['reg__button'])) {
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repeatPassword=$_POST['repeatPassword'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sqlsearch="SELECT * FROM `users` WHERE `email`='$email'";//текст запроса
        $result=$db->query($sqlsearch,MYSQLI_USE_RESULT);//выполнение запроса
        $arrResult=$result->fetch_array(MYSQLI_ASSOC); 
        // echo json_encode($arrResult);
        if($arrResult==null){
            if($password === $repeatPassword)  //проверка совпадения пароля и "повтора пароля"
            {   
                $sql="insert into users(firstName, lastName, email, password) values ('$firstName', '$lastName', '$email', '$hashed_password')";//текст запроса
                //echo $sql;
                $result=$db->query($sql);//выполнение запроса
                echo "<meta http-equiv='refresh' content='0; ../../../assets/pages/login/login.php'>";
                if ($result){ 
                printf("Данные добавлены");
                }
                else{
                printf("Ошибка",$db->error);
                }
            }    
            else{
                echo "пароль не совпадает";
            }       
        }
        else{
        echo "пользователь существует";
        }
    }

 ?>