<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config.php';

use Illuminate\Database\Capsule\Manager as DB;

$produtos = DB::table('produtos')->get();
var_dump($produtos);

//$prod4 = DB::table('produtos')->where('id', 4)->get(); 
//var_dump($prod4);

//$prods = DB::table('produtos')->where('valor', '>', 100)->get();
//var_dump($prods);

//$prods = DB::table('produtos')
//            ->orderBy('nome', 'asc')
//            ->get();
//
//foreach($prods as $prod) {
//    echo $prod->nome . ' ' . $prod->valor . '<br>';
//}

// echo DB::table('produtos')->count();

// inserir registro
//DB::table('produtos')->insert([
//    'nome' => 'Chinelo',
//    'valor' => 65.00,
//    'qtd_estoque' => 50,
//    'categoria_id' => 4
//]);

// Altera registro
//DB::table('produtos')
//        ->where('id', 4)
//        ->update([
//            'nome' => 'Camiseta Amarela',
//            'qtd_estoque' => 40
//        ]);

// Exclui um registro
//DB::table('produtos')
//        ->where('id', 7)
//        ->delete();
