<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliar os métodos da documentação da string, qual o método que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?
// !AbcaBcabc

$str = '!AbcaBcabc';

echo strpos($str, 'abc');
echo '<br>';
echo stripos($str, 'abc');
echo '<br>';

echo strpos(strtolower($str), 'abc' . '<br>');
echo strpos(strtoupper($str), 'ABC');
