<?php

$pdo = new PDO('mysql:dbname=phpavancado','root','');

$login='emailteste2@teste.com';
$senha='123456';

$select = 'SELECT * FROM login WHERE email=?';
$stmt = $pdo->prepare($select);

$stmt->execute([$login]);

$user = $stmt->fetch(\PDO:: FETCH_OBJ);

if($stmt->rowCount() && password_verify($senha, $user->senha)){
    
    echo 'USUÁRIO LOGADO COM SUCESSO';
}else{
    echo 'SENHA OU USUÁRIO INVALIDOS';
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

