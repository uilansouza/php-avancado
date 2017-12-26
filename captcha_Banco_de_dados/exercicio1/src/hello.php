<?php 

/**
* Classe chamada quando passado /hello
*/
class hello
{
    
    public function main()
    {
        echo "<h1>Executado quando passado a classe, mas nao o metodo</h1>";
    }

    public function olaMundo()
    {
        echo "<h1>Executado quando passado /hello/olaMundo</h1>";
    }
}
