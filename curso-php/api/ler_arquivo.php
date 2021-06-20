<div class="titulo">Ler Arquivo</div>

<?php
//fread ler arquivo - lendo 10 bits
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
// demonstra o tamanho do arquivo
echo $tamanho . '<br>';
// mostra arquivo inteiro
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo), '<br>');
echo '<br>';
fclose($arquivo);

echo '<hr>';
// fgtes ler toda string - ! negação - feof end of file - enquanto não chegar no final do arqvuio execute o while
$arquivo = fopen('teste.txt', r);
while(!feof($arquivo)) {
    echo fgets($arquivo) . '<br>';
}
fclose($arquivo);


echo '<hr>';
// fgetc - ler caractere por caractere
$arquivo = fopen('teste.txt', r);
while(!feof($arquivo)) {
    echo fgetc($arquivo);
}
echo '<br>';
fclose($arquivo);

echo '<hr>';

// podemos ler e alterar o arquivo
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionei esse doido");
fclose($arquivo);

echo "Fim!";
