<?php

/**
 * Função que carrea uma view
 * 
 * Função que carrega uma view de um determinado diretório, devemos passar 
 * o caminho desse arquivo, que será retornado ao PHP
 * 
 * @param String $file Recebe o caminho do arquivo views
 * @return String Retorna a string contendo o html da view
 */

function view($file){
    return 'html';
}

/**
 * Função que retorna um template formatado
 * 
 * Função que retorna um template foramatado através de parametros injetados
 * no segundo parametro, não obrigatório
 * 
 * @param string $file Caminho do arquivo template
 * @param array $parametros Parametros enviados ao templates
 * @return string Retorna o template formatado
 */
function template($file, $parametros){
    return 'html';
}
