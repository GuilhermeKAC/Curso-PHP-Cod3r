<div class="titulo">Desafio For</div>

<!--
Usar o for...
#
##
###
####
1) Pode usar incremento $i++
2) Não pdoe usar incremento $i++
-->

<?php
# 1) Pde usar incremento $i++

$impressao = '';

for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

$matrix = [
    ['#'],
    ['##'],
    ['###'],
    ['####'],
    ['#####']
];

echo '<hr>';

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]}";
    }
    echo "<br>";
}

echo '<hr>';

for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
    echo "$impressao2 <br>";
}
