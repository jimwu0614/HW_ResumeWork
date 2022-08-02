<?php
    session_start();
    $dsn="mysql:host=localhost;charset=utf8;dbname=";
    $pdo=new PDO($dsn,'root','');
    $sql = "SELECT * FROM "
?>