<div class="titulo">Datas 02</div>

<?php
$formatoData1 = 'D, d \d\e M \o\f Y';
$fomratoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

//print_r($agora);
//echo '<br>';

setlocale(LC_TIME, 'portuguese');

echo $agora->format($formatoData1) . '<br>';
echo strftime($fomratoData2, $agora->getTimestamp()) . '<br>';

$dataFixa = new DateTime('1975-01-25 15:30:50');
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

$amanha = new DateTime('-2 day');
echo strftime($fomratoData2, $amanha->getTimestamp()) . '<br>';

$amanha->modify('+1 day');
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000, 5, 20);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');
echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo ($outraData == $dataFutura ? 'Igual' : 'Difrente') . '<br>';
echo ($outraData === $dataFutura ? 'Igual' : 'Difrente') . '<br>';

echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora->format('d/m/Y H:i:s');
