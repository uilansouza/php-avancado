<?php

//header('Content-Type: application/javascript'); // caso fosse java script
// MIMI types = retornos (text/css  application/javascript entre outros)
header('Content-Type: text/css');

$cor =rand(111111,999999);
echo <<<CSS
h1 {
    color: #$cor;

}
CSS;

?>


