<?php

session_name('TREINAWEB');
session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: index.php');
    exit;
}

?>
<html>
    <head>
        <title>Logado</title>
    </head>
    <body>
        <h1>Seja Bem vindo</h1>
        <p>Login: <?=$_SESSION['login']?></p>
        <p>Session_id: <?=session_id()?></p>
        <p>Session_name: <?=session_name()?></p>
    </body>
</html>