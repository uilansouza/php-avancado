<?php

require __DIR__.'/vendor/autoload.php';
use Knp\Snappy\Pdf;

$snappy = new Pdf('C://"Program Files (x86)"/wkhtmltopdf/bin/wkhtmltopdf.exe');
$snappy->setTemporaryFolder('c:\htmltopdf');

header('Content-type: application/pdf');
header('Content-disposition: attachment; filename="relation.php'); //aqui o download é feito automaticamente
echo $snappy->getOutput([
    'http://localhost/php-avancado/pdf/relatorio1.html',
    'http://localhost/php-avancado/pdf/relatorio2.html',
    'http://localhost/php-avancado/pdf/relatorio3.html'
]);




