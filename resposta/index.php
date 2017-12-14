<?php

//PHP 5.4++
$status = 403;

if($status==503){
    
  http_response_code(503);
  exit('Pagina em manutenção');
}

if ($status==404){
            
    http_response_code(404);
    exit('Pagina Não encontrada');
        
}

if($status == 403){
    http_response_code(403);
    exit('Sem Permissão de acesso');
        
}

