<?php


$pdo = new PDO('mysql:dbname=phpavancado','root','');
$login ='email@teste.com';
$senha='123456';

$senhaHash = password_hash($senha, PASSWORD_BCRYPT);
$insert = 'INSERT INTO login VALUES (NULL, ?,?)';
$stmt = $pdo->prepare($insert);

$stmt->execute([$login, $senhaHash]);

