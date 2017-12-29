<?php

$arr_json = [
    'nome'=> 'Leonardo',
    'endereco'=> 'Rua Teste, 123',
    'Telefone'=> '11 555-555'
];
$json = json_encode($arr_json);

echo $json;