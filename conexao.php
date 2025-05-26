<?php
$host = '172.23.180.95'; 
$db   = 'usuarios'; 
$user = 'root';
$pass = 'admin'; // sua senha
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['erro' => $e->getMessage()]);
    exit;
}
