<?php

function getPdo()
{
    $host = 'localhost';
    $db   = 'apptareas';
    $user = 'root';
    $pass = 'Rmenlat0327*';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {

        $pdo = new PDO($dsn, $user, $pass);
        return $pdo;
    } catch (\PDOException $e) {
        echo $e->getMessage();
    }
}

$pdo = getPdo();



?>

