<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';
echo "<br> $epa {$$epa} {$$$epa}";
