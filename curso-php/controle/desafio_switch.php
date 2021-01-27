<div class="titulo">Desafio Switch</div>
 
<?php
/*
$valor = $_POST['param'];
$escolhaConv = $_POST['conversao'];

switch ($escolhaConv) {
    case 'km-milha': 
        $resultado = $valor * 0.621371;
        break;
    case 'milha-km':
        $resultado = $valor * 1.60934;
        break;
    case 'metro-km':
        $resultado = $valor / 1000;
        break;
    case 'km-metro':
        $resultado = $valor * 1000;
}

$valorFormatado = number_format($resultado, 2, ',', '.');
echo "<p>O valor $valor em $escolhaConv resulta: $resultado</p>";
*/
?>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conv">
        <option value="km-milha">Km -> Milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km -> Metros</option>
        <option value="cel-fah">Celsius -> Fahrenheit</option>
        <option value="fah-cel">Fahrenheit -> Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Milhas";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metros = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}º Celsius = {$conversao}º Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param} Fahrenheit = {$conversao}º Fahrenheit";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";
