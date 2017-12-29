<?php
class Treinaweb
{
    protected $salas = [];
    public function setSalas(SalaDeAula $sala)
    {
        $this->salas[]=$sala;
    }
}

class SalaDeAula
{
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

