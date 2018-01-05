<?php

$pdo = new PDO('mysql:dbname=phpavancado', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $pdo->beginTransaction();
    $pdo->exec("INSERT produtos VALUES (NULL, 'Tenis', 200.00, 4, 2)");
    $pdo->exec("INSERT produtos VALUES (NULL, 'Sapato', 100.00, 3, 1)");
    $pdo->exec("INSERT produtos VALUES (NULL, 'Bone', 45.00, 6, 5)");
    $pdo->exec("INSE produtos VALUES (NULL, 'Camiseta', 80.00, 8, 6)");
    $pdo->exec("INSERT produtos VALUES (NULL, 'Camisa', 240.00, 7, 8)");
    $pdo->exec("INSERT produtos VALUES (NULL, 'Meia', 15.00, 9, 3)");
    $pdo->commit();
} catch (PDOException $exc) {
    $pdo->rollBack();
    echo $exc->getMessage();
}
