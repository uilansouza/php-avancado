<?php

require __DIR__.'/vendor/autoload.php';

use Respect\Validation\Validator as v;

$valida = v:: string();
var_dump($valida)->validate(12);
