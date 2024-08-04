<?php 

$dsn = "mysql:host=localhost;dbname=cwts_lts";
$username = "root";
$pass = "";

try {
  $pdo = new PDO($dsn, $username, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}