<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo "<br>$variavel";

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br>$variavelValor";

$variavelValor = 'novo valor';

echo "<br>$variavel";
echo "<br>$variavelValor";

// Atribuição por Referência
$variavelReferencia = &$variavel;
echo "<br> $variavel";
echo "<br> $variavelReferencia";

$variavelReferencia = 'mesma referencia';

echo "<br>$variavel";
echo "<br>$variavelReferencia";
