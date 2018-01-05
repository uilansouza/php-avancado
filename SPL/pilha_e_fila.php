<?php
/*
// FILA = Fist In First Out -> FIFO
echo '<br>FILA<br>';
$fila = new SplQueue();

$fila->push('Treinaweb');
$fila->push('Curso');
$fila->push('PHP');
$fila->push('Avançado');

for ($fila->rewind(); $fila->valid(); $fila->next()){
    echo $fila->current().'<br>';
}

echo '<br>PILHA<br>';

//Pilha de Last In Firts Out - LIFO

$pilha = new SplStack();

$pilha->push('Treinaweb');
$pilha->push('Curso');
$pilha->push('PHP');
$pilha->push('Avançado');

for ($pilha->rewind(); $pilha->valid(); $pilha->next()){
    echo $pilha->current().'<br>';
} */

$s = new SplObjectStorage();

$aluno1 =new stdClass();
$aluno1->nome='Pedro;';

$aluno2 =new stdClass();
$aluno2->nome='Carla;';

$aluno3 =new stdClass();
$aluno3->nome='Augusto;';

$s->attach($aluno1);
$s->attach($aluno2);
$s[$aluno3]= "um aluno 3";

for ($s->rewind(); $s->valid(); $s->next()){
    echo $s->getInfo();
    var_dump($s->current());
    
}

// ver o artigo do link
//https://phpsp.org.br/spl-menos-programacao-orientado-a-arrays/
