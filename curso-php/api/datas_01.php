<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>';
echo date('d' . '/' . 'm' . '/' . 'y');
echo '<br>';
echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 12, 14, 1991);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';
