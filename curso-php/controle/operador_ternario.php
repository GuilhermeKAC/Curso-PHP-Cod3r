<div class="titulo">Operador Ternário</div>

<?php
$idade = 70;
$status;

if($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

$idade = 10;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";
