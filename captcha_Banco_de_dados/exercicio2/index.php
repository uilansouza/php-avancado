<?php

//Inclui a classe do captcha
require_once('utils/captcha.php');

//Gera uma nova instancia
$captcha = new captcha();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Captcha - Treinaweb</title>

	<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
	<style type="text/css">
		.captcha {
			text-align: center;
			font-size: 17px;
		}
	</style>
</head>
<body>

    <div class="container">

    	<div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">

          <form class="form-signin" action="validar.php" method="POST">
            <h2 class="form-signin-heading">Por favor, faça login</h2>

            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">

            <label for="inputPassword" class="sr-only">senha</label>
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required="">

     		<label for="inputPassword" class="captcha">Insira a soma de <?= $captcha->gerarCaptcha(); ?>: </label>
            <input type="text" id="inputCaptcha" name="inputCaptcha" class="form-control" placeholder="Insira a soma dos números acima" required=""> 
                

            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
          </form>
        </div>
    </div>

</body>
</html>
