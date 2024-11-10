<?php

$user = 'root';
$pass = 'root';

$dsn = 'mysql:host=mysql2;dbname=information_schema;charset=utf8';
$pdo = new PDO($dsn, $user, $pass);

$stmt = $pdo->query('select * from tables');
$row = $stmt->fetch();

print_r($row);
