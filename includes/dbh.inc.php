<?php 

$host = 'localhost';
$dbname = 'test1';
$dbusername = 'root';
$dbpassword = '';


try {
    $pdo = new PDO("mysql:host=$host;port=3307;dbname=$dbname", $dbusername, $dbpassword); //connecting to the database
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("connection failed: " .$e->getMessage());
}