<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';

$a = 3;
$b = 16;

$soma = $a + $b;

echo $soma;

echo '<br>';

$a = 3;
$b = 16;

$somaDosNumeros = $a + $b;

echo $somaDosNumeros;
$somaDosNumeros = 0;

echo '<br>';

echo isset($somaDosNumeros);

$variavel = 10;

echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";

echo '<br>' . $variavel;

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!
//$6var = 'invalido';
//$%var7 = 'invalido';
//$var8% = 'invalido';

echo '<br>';

var_dump($_SERVER["HTTP_HOST"]);
