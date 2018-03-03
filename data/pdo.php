<?php
$dsn = "mysql:host=localhost;dbname=basic;charset=utf8";
$pdo = new PDO($dsn, 'root', '123');
$stmt = $pdo->query('SELECT * FROM users');
$result = $stmt->fetchAll(PDO::FETCH_OBJ);
print_r($result);
die();