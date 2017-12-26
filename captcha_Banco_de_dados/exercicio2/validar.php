<?php

//Inclui a classe do captcha
require_once('utils/captcha.php');

//Gera uma nova instancia
$captcha = new captcha();

//Pega o valor do formulário
$soma = $_POST['inputCaptcha'];

//Verifica se o valor foi digitado corretamente
if ($captcha->validarCaptcha($soma)) {
    echo "Captcha válido";
} else {
    echo "Captcha invalido";
}
