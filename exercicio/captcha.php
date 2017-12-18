<?php
require 'funcao/funcao.php';
?>
<!DOCTYPE html>

    <script type="text/javascript" src="js/arquivo.js"></script>
    <link rel="stylesheet" type="text/css" href="css/arquivo.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css"/>
    <head>
        <title>CAPTCHA</title>
    
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    </head>
    <body>
       <div class="container">  
  <form id="contact" action="" method="post">
    <center><h3>EXERCICIO </h3></center>
     <h4>Informe seus dados</h4>
     <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder=" Your Password" name="senha" type="Password" tabindex="3" required size="46">
    </fieldset>
    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Logando">Login</button>
    </fieldset>
     <div class="divisor">
         <div class="caixa"><?php formulario();?> </div>
    </div>
     
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>


