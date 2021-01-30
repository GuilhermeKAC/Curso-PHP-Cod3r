<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagem() {
    echo "Olá ";
    echo "Até a próxima!<br>";
}

imprimirMensagem();

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durantea função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());
