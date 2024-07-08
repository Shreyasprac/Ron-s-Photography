<?php
$host = 'database-1.creua2wq48q7.ap-south-1.rds.amazonaws.com';
$port = '3306';
$dbname = 'shreyas';
$username = 'admin';
$password = 'password';

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
