<?php

session_name('TREINAWEB');
session_start();

if (!isset($_SESSION['sessIdTime'])) {
        $_SESSION['sessIdTime'] = time(); // Cria a sessão caso nao exista
    } elseif (time() - $_SESSION['sessIdTime']>10) {// Caso a diferença da sessão criada para o horário atual for maior que 10 segundos então a sessão é derrubada
        $_SESSION = [];
        session_destroy(); //destroi a sessão
    }
    else{
    $_SESSION['sessIdTime']=time();
}

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