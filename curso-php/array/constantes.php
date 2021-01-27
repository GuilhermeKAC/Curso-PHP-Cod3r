<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define('Cidades', array('Belo Horizonte', 'Recife'));
echo '<br>' . Cidades[1];
