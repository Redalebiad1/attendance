<?php
    /* Developement Connection
    $host ='127.0.0.1';
    $db ='attendance_db';
    $user ='root';
    $pass ='';
    $charset ='utf8mb4'; 
    */

   // Remote Database Connection
    $host ='remotemysql.com';
    $db ='aquut4S6pF';
    $user ='aquut4S6pF';
    $pass ='9yoAzdana6';
    $charset ='utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn,$user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOExeption $e){
        throw new PDOExeption($e -> getMessage());
    }
    require_once 'crud.php';
    $crud = new crud($pdo);
?>