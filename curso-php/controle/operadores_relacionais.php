<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(4 < 23);
var_dump(1 <= 7);
var_dump(1 != 1);
var_dump(1 <> 1);

var_dump(1 == '1');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";

$idade = 66;

if($idade < 18) {
    echo "Menor de idade<br>";
} else if($idade <= 65) {
    echo "Adulto<br>";
} else {
    echo "Terceira Idade";
}

echo "<p class='divisao'>Spaceship</p><br>";
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

var_dump(!!5);
var_dump(!!0);
var_dump(!!" ");
