<?php
interface Logger
{
    // Não é possivel colocar atributo em interfaces,apenas logger
    public function logar();
    public function escrevcer();
    public function registrar($file);
    
}
class FileLogger implements Logger
{
    public function escrevcer() 
    {
        
    }

    public function logar() 
    {
        
    }

    public function registrar($file) 
    {
        
    }

}

class DatabaseLogger implements Logger
{
    public function escrevcer()
    {
        
    }

    public function logar()
    {
        
    }

    public function registrar($file)
    {
        
    }

}