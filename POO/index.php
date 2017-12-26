<?php

class Cliente
{
    public $nome;
    protected $email;
    private $id;
    
    public function setEmail($email)
    {
        $this->email=$email;
        
    }

    public function gravar()
    {
        $this->filtraInput();
        echo 'Gravar no DB';
    }
    
    protected function filtraInput()
    {
        echo 'Filtra Input';
    }     
}

$cliente = new Cliente;
$cliente->nome ='Ana Paula';
$cliente->setEmail('teste@gmail.com');
var_dump($cliente);
$cliente->gravar();

