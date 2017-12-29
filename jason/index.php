<?php

$jason =<<<JASON
 {
        "nome" : "Leonardo",
        "endereco" : "Rua 123, 123",
        "telefone" : "11 555-5555"
        
 }
JASON;


$obj_jason = json_decode($jason);
$arr_jason = json_decode($jason, true);

var_dump($obj_jason, $arr_jason);


