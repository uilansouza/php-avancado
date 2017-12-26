<?php

//Inclui a classe do captcha
require_once('utils/captcha.php');
require_once('utils/Db.php');

//Gera uma nova instancia
$captcha = new captcha();

//Gera uma instancia da classe do banco de dados
$db = new Db('mysql', 'localhost', 'login', 'root', '');

//Pega o valor do formulário
$email = $_POST['inputEmail'];
$senha = md5($_POST['inputPassword']);
$soma = $_POST['inputCaptcha'];

//Monta os parametros passados para a consulta
$where = ['email' => $email, 'senha' => $senha];

//envia os dados para a consulta
$usuario = $db->logar($where, false);

//Verifica se o captcha e os dados de login são válidos
if ($captcha->validarCaptcha($soma) && !empty($usuario)) {
    echo "Logado com sucesso";
} else {
    echo "Erro ao logar";
}
