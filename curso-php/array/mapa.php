<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];

$lista = array (
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

echo '<br>';
$lista[] = 'i';
print_r($lista);

echo '<br>';
$lista[false] = 'tentei indexar com falso';
print_r($lista);

echo '<br>';
$lista[true] = 'tentei indexar com true';
print_r($lista);
