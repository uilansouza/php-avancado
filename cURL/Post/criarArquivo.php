<?php

// Caso os dados não tenham sido postados retorna o código 404 de erro.
if( ! isset($_POST['titulo']) || ! isset($_POST['conteudo'])) {
    http_response_code(404);
    exit('falha');
}

$titulo = $_POST['titulo'] . '.txt';
$conteudo = addslashes($_POST['conteudo']);

$gravacao = file_put_contents($titulo, $conteudo);

echo ($gravacao) ? 'sucesso' : 'falha';