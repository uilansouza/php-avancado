<!DOCTYPE html>
<html>
    <head>
        <title>REcaptcha</title>
    </head>
    <body>
        <form method="POST" action="validaform.php">
            Login: <input type="text" name="login" required><br>
            Senha: <input type="password" name ="senha" required><br>
            <button>Logar</button><br>
            <div class="g-recaptcha" data-sitekey="6Lfa1j4UAAAAAAe2A4_Pt3FaIymSqi0Vxd38Rl4F"></div>
        </form>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

