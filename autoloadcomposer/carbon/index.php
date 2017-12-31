<?php
//Documentação
//http://carbon.nesbot.com/
require __DIR__.'/vendor/autoload.php';

use Carbon\Carbon;

//$date = new Datetime('now',new DateTimeZone('America/Los_Angeles'));
//echo $date ->format('d/m/Y H:i:s');

echo Carbon:: now('America/Sao_Paulo')->format('d/m/Y H:i:s');

echo'<br>';

$data = Carbon::now('America/Sao_Paulo');
echo $data->addMinute(30)->format('d/m/Y H:i:s').'<br>';
echo $data->subMonth(2)->format('d/m/Y H:i:s').'<br>';


$form = '20/02/2014 12:00'; //Date ISO: 2014-02-20 12:00:00
$data_form = Carbon:: createFromFormat('d/m/Y H:i', $form);

echo $data_form.'<br>';
echo 'Ano: '.$data_form->year.'<br>';
echo 'Dia: '.$data_form->day.'<br>';
echo 'MÊs: '.$data_form->month.'<br>';
echo 'Segundos: '.$data_form->timestamp;
echo'<br>';

$date_num = Carbon::create(2015, 5, 12,  12, 24 ,30);// Ano, Mês, dia, Hora, Minuto, Segundo
echo $date_num;
echo'<br>'.$date_num->format('d/m/Y H:i:s');


