<?php

$postData = http_build_query([
    'nome'=>'Leonardo',
    'empresa'=>'Treinaweb'
]);

$options = [
    'http'=>[
        'method'=>'POST',
        'header'=>'Content-Type: application/x-www-form-urlencoded',
        'content'=>$postData
    ]
];

$context = stream_context_create($options);
$resultado = file_get_contents('http://localhost/php-avancado/wrapper/recurso.php/', false, $context);

echo $resultado;

