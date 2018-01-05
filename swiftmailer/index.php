<?php

require __DIR__.'/vendor/autoload.php';

//$smtp_host_ip = gethostbyname('smtp.gmail.com');
$smtp_host_ip = 'smtp.gmail.com';

$transport = Swift_SmtpTransport::newInstance($smtp_host_ip,465,'ssl')
            ->setUsername('uilan.souza@gmail.com')
            ->setPassword('3941Gmail1');

$smailer = Swift_Mailer::newInstance($transport);

$body = <<<HTML
<h1> Olá, teste via SwiftMailer autentivando no gmail </h1>
<p> Um testo aqui menos gigante, com uma formatação melhor ! </p>
HTML;

$messagem = Swift_Message::newinstance('Um titulo de email aqui')
        ->setFrom(['uilan.souza@gmail.com' =>'Uilan Souza'])
        ->setTo(['uilan.souza@homail.com'=>'Uilan S.Souza',
                 'uilan.souza@gmail.com'=>'Uilan email'
            
            ])
        ->setBody($body, 'text/html');

if($smailer->send($messagem)){
    echo'Email enviado com sucesso!';
    
}else{
    echo 'Erro ao enviar Email';
}

