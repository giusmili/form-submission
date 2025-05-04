<?php
# 1. Connexion à la base de données
/* 
$host = 'localhost';
$db   = 'ton_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
$pdo = new PDO($dsn, $user, $pass, $options);

*/

class Connexion{
    public function bdd(){

        $host = 'localhost';
        $db   = 'abonnement';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        
        return $pdo = new PDO($dsn, $user, $pass, $options);
    
    }
}

$newBDD = new Connexion();

$pdo = $newBDD->bdd();
   