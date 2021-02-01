<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

obterMensagem();
$msg = obterMensagem();
echo $msg;
echo '<br>' . obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obetrMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>' . obetrMensagemComNome('Guilherme');
echo '<br>' . obetrMensagemComNome('Ana');

function soma($primeiroValor, $segundoValor) {
    $soma = $primeiroValor + $segundoValor;
    return $soma;
}

$x = 4;
$y = 5;

echo '<br>' . soma(5, 8);
echo '<br>' . soma($x, $y);

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>' . $variavel;

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5);
echo '<br>' . $variavel;
