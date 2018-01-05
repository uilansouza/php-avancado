<?php
define('SECRET','6Lfa1j4UAAAAABcXW5yAhVAt-L93JEVd0tgUuS8z');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['g-recaptcha-response'])) {
        header('Location: index.php');
    }
    require __DIR__ . '/vendor/autoload.php';
    // Validações
    
    $recaptcha = new ReCaptcha\ReCaptcha(SECRET);
    
    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
    
    if ($resp->isSuccess()) {
        echo 'Formulario vindo de um humano';
        exit;
    } else {
        exit('Não concluiu o recaptcha');
    }
}

header('Location: index.php');
