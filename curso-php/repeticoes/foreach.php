<div class="titulo">Foreach</div>

<?php
$array = [1 => "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];

foreach ($array as $valor) {
    echo "$valor <br>";
}

echo '<hr>';

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<hr>';

foreach($matrix as $linha) {
    foreach($linha as $letra) {
        echo "$letra ";
    }
    echo "<br>";
}

echo '<hr>';

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as &$dobrar) { // altera a referencia
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numeros);
