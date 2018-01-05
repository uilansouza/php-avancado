<?php

class SaladeAula implements Countable
{
    public $alunos = ['Pedro','Carlos','Jose','Ana','Carla'];
    
    public function count()
    {
        return count ($this->alunos);
    }
}

$sala = new SaladeAula;
echo count ($sala);