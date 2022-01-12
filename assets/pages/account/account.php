<?php
session_start();
require_once('../../pages/login/php/db.php'); 
require_once('../../pages/login/php/loginback.php'); 

if(isset($_SESSION['user'])){
    $email=$_SESSION['user'];
    $sqlsearch="SELECT * FROM users WHERE email='$email'";
    $result=$db->query($sqlsearch);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if($result = $db->query($sqlsearch)){
        foreach($result as $row){
            $firstName = $row["firstName"];
            $lastName = $row["lastName"];
        }
    }
    else{
        echo "<meta http-equiv='refresh' content='0; ../../../assets/pages/login/login.php'>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/account.css">
    <title>Аккаунт - MSA Skis</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require_once "../../pages/include/header/header.php";?>
        </header>
        <main class="page _container">
            <section class="page__account account__page"> 
                <div class="account-page__container">
                    <div class="title__container">
                        <h1 class="account__title">Об аккаунте</h1>
                        <?php
                            if(isset($_SESSION['user'])){
                            ?>
                                <a href="../../pages/login/php/exit.php" class="account-exit__button">Выход</a>
                            <?php
                            }
                        ?> 
                    </div>
                    <div class="after__container"></div>
                    <div class="account-info__container">  
                        <div class="account__info">
                            <p class="name text"><?=$row['firstName']?>&nbsp;<?=$row['lastName'];?></p>
                            <p class="email text"><?=$row['email'];?></p>
                            <p class="address text">Адрес</p>
                            <p class="text">В настоящее время адреса отсутствуют</p>
                        </div>
                        <div class="account__order-history">
                            <p class="title text">История заказов</p>
                            <p class="text">Вы еще не сделали ни одного заказа.</p>
                        </div>
                    </div>     
                </div>
            </section>
        </main>      
        <footer>
            <?php require_once "../../pages/include/footer/footer.php";?>
        </footer> 
    </div>
</body>
</html>