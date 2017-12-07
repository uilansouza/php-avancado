<?php
require 'Session.php';
$session = new Session('TREINAWEB');

if( $session->valid()==false){
    exit('Session expirada');
}

echo time().'<br>';
echo $session->get('expire').'<br>';
echo $session->get('nome').'<br>';
echo $session->get('email');


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

