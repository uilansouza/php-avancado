<?php
$token = sha1(uniqid(rand(), true));
session_start();
$_SESSION['token']=$token;
?>
<html>
    <head>
        <title>CSRF</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            Login: <input type="text" name="login">
            Senha: <input type="password" name="senha">
            <button>Logar</button>
            <input type="hidden" name="token" value="<?=$token?>">
        
        </form>
        
        
        
    </body>
    
    
    
    
    
    
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

