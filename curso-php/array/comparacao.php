<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Guilherme', 'idade' => 29];
$arr2 = ['nome' => 'Ana', 'idade' => 25];
$arr3 = ['nome' => 'Guilherme', 'idade' => 29];

var_dump($arr1 == $arr2);
echo '<br>';
var_dump($arr1 === $arr3);

$arr4 = ['idade' => 29, 'nome' => 'Guilherme'];

echo '<br>';
var_dump($arr3 === $arr4);
echo '<br>';
var_dump($arr3 == $arr4);
echo '<br>';
var_dump($arr3 != $arr4);
echo '<br>';
var_dump($arr3 !== $arr4);

echo '<br>';
$arr5 = ['idade' => '29', 'nome' => 'Guilherme'];
var_dump($arr3 == $arr4);
echo '<br>';
var_dump($arr3 === $arr4);
