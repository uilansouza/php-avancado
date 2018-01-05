<?php
$arrIt = new ArrayIterator([13,23,12,42]);
function calc(ArrayIterator $it){
    echo $it->current()*1.1;
    echo '<br>';
    return true;//o true tem que ser colocado para a array ser varrido por inteira
}


iterator_apply($arrIt,'calc',[$arrIt]);
