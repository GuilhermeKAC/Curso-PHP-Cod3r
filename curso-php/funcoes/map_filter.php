<div class="titulo">Map & Filter</div>

<?php
// Map

$notas = [5.8, 9.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<hr>';

$notasFinais2 = array_map(round, $notas);

print_r($notasFinais2);

// Filter

$apenasOsAprovados1 = [];

foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasOsAprovados1[] = $nota;
    }
}

echo '<hr>';

print_r($apenasOsAprovados1);

echo '<hr>';

function aprovados($nota) {
    return $nota >= 7;
}

$apenasOsAprovados2 = array_filter($notas, aprovados);

print_r($apenasOsAprovados2);

echo '<hr>';

// Map

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

$notasFinais3 = array_map(calculoLegal, $notas);

print_r($notasFinais3);
