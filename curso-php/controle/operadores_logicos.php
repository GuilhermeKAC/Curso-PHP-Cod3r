<div class="titulo">Operadores Lógicos</div>

<?php

echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
echo "Verdadeiro (E) Verdadeiro = ";
var_dump(true && true);
echo "<br>Verdadeiro (E) Falso = ";
var_dump(true && false);
echo "<br>Falso (E) Verdadeiro = ";
var_dump(false && true);
echo "<br>falso (E) Falso = ";
var_dump(false && false);
echo "<br>3 > 2 && 7 <= 7 =";
var_dump(3 > 2 && 7 <= 7);
echo "<br>3 > 2 && 7 <= 7 && 3 === '3' =";
var_dump(3 > 2 && 7 <= 7 && 3 === '3');

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
echo "Verdadeiro (OU) Verdadeiro = ";
var_dump(true || true);
echo "<br>Verdadeiro (OU) Falso = ";
var_dump(true || false);
echo "<br>Falso (OU) Verdadeiro = ";
var_dump(false || true);
echo "<br>Falso (OU) Falso = ";
var_dump(false || false);
echo "<br>Verdadeiro (OU) Falso = ";
var_dump(true || false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
echo "Verdadeiro (OU Exclusivo) Verdadeiro = ";
var_dump(true xor true);
echo "<br>Verdadeiro (OU Exclusivo) Falso = ";
var_dump(true xor false);
echo "<br>Falso (OU Exclusivo) Verdadeiro = ";
var_dump(false xor true);
echo "<br>Falso (OU Exclusivo) Falso = ";
var_dump(false xor false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo === 'F') {
    echo "A pessoa do sexo $sexo pode se aposentar por idade";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "A pessoa do sexo $sexo pode se aposentar por idade";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}
