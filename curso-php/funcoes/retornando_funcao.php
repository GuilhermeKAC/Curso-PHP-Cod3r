<div class="titulo">Retornando Função</div>

<?php

function soma($a) {
    // algoritmo
    return function($b) use ($a) {
        return $a + $b;
    };
}

echo 'Resultado = ' . soma(13)(3);

$doisMais = soma(2);

echo '<br>Resultado = ', $doisMais(10);
echo '<br>Resultado = ', $doisMais(18);
