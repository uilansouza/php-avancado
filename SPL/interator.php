<?php
$phpdir = new DirectoryIterator('..\\');
/*
foreach ($phpdir as $dir){
    echo $dir.'<br>';
}
*/
$linguagens = ['PHP','C++', 'C#','JAVA','VB.NET','Pyton'];

$arrayIt = new ArrayIterator($linguagens);

while ( $arrayIt->valid()){
    
    echo $arrayIt->key().':'.$arrayIt->current().'<br>';
    $arrayIt->next();
}

$arrayIt->rewind();// Reiniciar a Array;

while ( $arrayIt->valid()){
    
    echo $arrayIt->key().':'.$arrayIt->current().'<br>';
    $arrayIt->next();
}
class User extends ArrayObject
{
    public $nome;
    public $email;
    
}

$user = new User([
    'nome'=>'Leonardo',
    'email'=>'mail@teste.com'
]);

//$user['nome']='Leonardo';
//$user['emai']='leo@teste.com';

echo $user['nome'];

var_dump($user);