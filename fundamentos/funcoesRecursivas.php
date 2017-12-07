<?php

function funcaoRecursiva($num) {
    if ($num < 5) {
        printf("%d\n", $num);
        funcaoRecursiva($num + 1);
    }
}

funcaoRecursiva(1);

echo"<br>";



function sum($value) {
    $sum = 0;
    for ($i = 1; $i <= $value; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo sum(5);

#------ Simplificando 


echo '<br>Recursivamente now <br>';


function sumRecursive($value) {
    return ($value) ? ($value + sumRecursive($value - 1)) : 0;
}

echo sumRecursive(10);

echo '<br> Fatorial<br>';

function fatorial($num){
    
 return($num)? $num * fatorial( $num -1): 1;
     
}
echo fatorial(5);

