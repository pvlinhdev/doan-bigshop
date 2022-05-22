<?php
define('SERVERNAME', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'mydb');

/**
 * Ket noi theo PDO
 */
try{
    $dsn = sprintf("mysql:host=%s;dbname=%s", SERVERNAME, DATABASE);
    global $pdo;
    $pdo = new PDO($dsn, USER, PASSWORD);
    $pdo->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo  "Success";
}catch(PDOException $e){
    echo 'Connect failed ' . $e->getMessage();
}