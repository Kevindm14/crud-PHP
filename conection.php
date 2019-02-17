<?php 

    $host = 'localhost';
    $user = 'root';
    $password = 'localhost';
    $db = 'products';
    
    $conection = mysqli_connect($host, $user, $password, $db);
    mysqli_set_charset($conection, 'utf8');

?>