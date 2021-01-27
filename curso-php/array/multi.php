<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>';
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Ana",
    "idade" => 27,
    "naturalidade" => "São Paulo"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["Vizinhos"] = "Turma do Bairrinho";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
echo 'Removeu indice 1 <br>';
print_r($dados);
echo '<br>';
var_dump($dados[1]);
