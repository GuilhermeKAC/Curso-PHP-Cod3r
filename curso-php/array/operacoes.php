<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dados2["endereoço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

$dados3 = [
    "nome" => "Maria",
    "idade" => 28
];

$dados4 = [
    "nome" => "Jose",
    "naturalidade" => "Fortaleza"
];

$dadosCompletos2 = $dados4 + $dados3;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); //confirmar array
echo '<br>' . count($dadosCompletos); //quantidade de dados

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;//somente os $pares aparecem 
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares);//faz a junção partindo dos pares
echo '<br>';
print_r($decimais);

sort($decimais);//unificação ordenada
echo '<br>';
print_r($decimais);
