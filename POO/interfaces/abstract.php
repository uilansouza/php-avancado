<?php

abstract  class Logger
{
    public $nome;
    
    abstract public function logar();
}

class FileLogger implements Logger
{
  

    public function logar() 
    {
        
    }

  
}