<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . '<br>';
echo palindromo('kruszynski') . '<br>';
echo palindromo('ana') . '<br>';
echo palindromo('SAIPPUAKIVIKAUPPIAS') . '<br>';
echo palindromo('OMISSISSIMO') . '<br>';
echo palindromo('subi no on ibus') . '<br>';

function palindromoSmiples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromoSmiples('arara') . '<br>';
echo palindromoSmiples('kruszynski') . '<br>';
echo palindromoSmiples('ana') . '<br>';
echo palindromoSmiples('SAIPPUAKIVIKAUPPIAS') . '<br>';
echo palindromoSmiples('OMISSISSIMO') . '<br>';
echo palindromoSmiples('subi no on ibus') . '<br>';
