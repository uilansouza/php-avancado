<?php

require __DIR__.'/vendor/autoload.php';

use Pimple\Container;

class User
{
    public $created_at;
    protected  $pdo;
    
    public function setPDO(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}

$container = new Container();

$container['pdo'] = new PDO('mysql:dbname=phpavancado','root','');

$container['datetime']= function(){
    return new DateTime('now', new \DateTimeZone('Europe/Paris'));
};

$container['user']= function($c){
    $user = new User;
    $user->created_at = $c['datetime'];
    $user->setPDO($c['pdo']);
    return $user;
    
};

var_dump($container['user']);
