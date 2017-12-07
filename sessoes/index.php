<?php

require 'Session.php';

$session = new Session('TREINAWEB');
$session->set('nome','Leonardo');
$session->set('email','leo@teste.com');

$session->register('20 sec');

