<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "SEKIROOO!!\n");
$str = "Bloodborne é um RPG eletrônico de ação produzido pela FromSoftware e publicado pela Sony Computer Entertainment a 24 de Março de 2015 em exclusivo para a PlayStation 4, sendo o quarto game da serie Souls. Bloodborne foi realizado por Hidetaka Miyazaki, diretor de Demon's Souls e Dark Souls\n";
fwrite($arquivo, $str);
fclose($arquivo);

//Sobrescrevendo o arquivo se eu abrir o (w)
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Elden Ring ta vindo!!");
fclose($arquivo);

//modo (a) adicona novos conteudos
$arquivo = fopen('teste.txt', 'Muito bom vou pagar caro');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo nome");
fclose($arquivo);

// com o (x) se o arquivo já existe ele não vai. Precisa ser um arquivo novo
ini_set('display_errors', 1);
$arquivo = fopen('teste2.txt', 'x');
fwrite($arquivo, "Elden Ring ta vindo!! Eu vou pagar caro vou jogar no ps4 e to nem ai. Ano que vem PS5? SEI LA");
fclose($arquivo);

