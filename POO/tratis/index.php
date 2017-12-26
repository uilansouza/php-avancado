<?php

trait Logger
{
    public function log($msg)
    {
        echo "Gravar '$msg' log no banco";
    }
    
    public function logMemory($msg)
    {
       echo 'Gravar na memoria  o log';
     
    }
    
        
}

trait Filelogger
{
    public function log($file, $msg)
    {
        echo "Gravar no arquivo $file a mensagem: $msg";
    }
}

class User
{
    use Logger, Filelogger{
        FileLogger::log insteadof Logger;
        Logger::log as logDB;
}
   
    public function  __construct()
    {
        
        
    }
    
    public function logMemory($msg) {
        echo'Class User:';
        Logger::logMemory($msg);
    }


    public function grava()
    {
        $this->logDb('Gravando usuário no banco<br>');
        $this->log('log.txt','Gravando usuario no banco de dados');
    }
    
}

$user = new User;
$user->grava();
