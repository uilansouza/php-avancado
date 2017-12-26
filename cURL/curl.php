<?php

$curl = curl_init();

// Array com as configurações e os dados da transferência
$configuracoes = [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/php-avancado/cURL/Post/criarArquivo.php',
    CURLOPT_USERAGENT => 'App TreinaWeb Curl Test 1.0',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => [
        'titulo' => 'testeCriarArquivo',
        'conteudo' => 'Teste para criação de arquivo'
    ]
];

// Define as configurações na forma de array
curl_setopt_array($curl, $configuracoes);

// Imprime a resposta
echo curl_exec($curl);

// Fecha o recurso
curl_close($curl);

http://localhost/php-avancado/cURL/Post/criarArquivo.php