<?php
$cacheFile = 'cache.html';
$cacheTimeSec= 20;

if(file_exists($cacheFile)){//Verifica se o arquivo existe
    $fileCreated = filemtime($cacheFile); //pega o tempo que o arquivo foi criado
    if((time()-$cacheTimeSec)< $fileCreated){// verifica se o tempo passou é menor que 20 segundos da criação
        require_once  $cacheFile;
        echo '<!-- Ultima vez em cache: '. date('H:i:s',$fileCreated).' -->';
        exit();
    }
}
ob_start();
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Treinaweb Cursos</title>
    </head>
    <body>
        <h1>Treinaweb Cursos</h1>
        <h3>Cursos</h3>
        <ul>
            <li>PHP Basico</li>
            <li>PHP Intermediario</li>
            <li>PHP Avançado</li>
        </ul>
        
    </body>
</html>

<?php

$cachedFile = fopen($cacheFile, 'w');

fwrite($cachedFile, ob_get_contents());
fclose($cachedFile);
ob_end_flush();
