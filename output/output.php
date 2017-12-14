<?php
echo "<h1> Treinaweb Cursos</h1>";

// Inicia o buffer ( isso bloqueia qualquer saida para o navegador)
ob_start('ob_gzhandler');

echo <<<TXT
O Treinaweb é a principal esmpresa especializada em cursos online de tecnologia
da informação no brasil.
TXT;

//Encerra e limpa tudo o que foi coletado no buffer desde o inicio dele.
ob_end_flush();
