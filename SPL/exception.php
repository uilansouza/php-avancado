<?php

class ArrayInteger extends ArrayIterator
{
    public function __construct() {
     parent::__construct([]);
 }
 
 public function offsetset($index, $newval)
 {
     if (!is_int($newval)){
         throw new \InvalidArgumentException('Só aceita INT na Array');
     }
     parent:: offsetSet($index, $newval);
 }
}
try{
    $arr_int =  new ArrayInteger();

    $arr_int[0]= 12;
    $arr_int[]='ola';
    
   }catch(\InvalidArgumentException $e){
       echo $e->getMessage();
   }