<?php
    define("HOST", "localhost:3306");
    define("USER", "root");
    define("PASSWORD", "root");
    define("DATABASE", "skismagazine");

    $db = new mysqli(HOST,USER,PASSWORD,DATABASE);
    if ($db->connect_errno) {
        die('Ошибка соединения: ' . $db->connect_errno);
    }
?>