<?php

class MagicList
{
    protected $parameters = [];
    
    public function __set($name, $value) 
    {
        $this->parameters[$name] = $value;
    }
    
    public function __get($name) 
    {
        return $this->parameters[$name];
    }
    
    public function getParameters()
    {
        return $this->parameters;
    }
    
    public function __toString() 
    {
        return implode(', ', $this->parameters);
    }
}

$list = new MagicList;

$list->nome = 'Leonardo';
$list->email = 'leo@teste.com';
$list->maisum = 'teste';

echo $list;

var_dump($list);