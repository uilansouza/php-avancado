<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

use Illuminate\Database\Capsule\Manager as DB;
/*
$produtos = DB::table('produtos')
               ->join('categorias', 'produtos.categoria_id','=','categorias.id')
               ->get();

       foreach ($produtos as $produto){
            foreach ($produto as $valor) {
                echo $valor.'';
            
            }
             echo'<br>';
  }     
*/

$cats= DB::table('categorias')
        ->join('produtos', function($join){
            $join->on('categorias.id','=','produtos.categoria_id')
                    ->where('produtos.id','>',3);
        })
        ->get();
       

var_dump($cats);