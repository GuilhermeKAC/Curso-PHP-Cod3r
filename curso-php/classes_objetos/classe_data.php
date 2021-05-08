<div class="titulo">Classe Data</div>

<?php

// Classe para exibir a data com dia, mes e ano
Class Data {
    // Atributos da classe
    public $dia = 01;
    public $mes = 01; 
    public $ano = 1970;

    // Metodo da classe para apresentar a data
    public function apresentar() {
        // Para acessar dia, mes e ano precisamos utilizar o this
        echo "Data: {$this->dia} / {$this->mes} / {$this->ano} <br>";
    }
}

$aniversario = new Data();
echo $aniversario->apresentar();

$aniversario2 = new Data();
$aniversario2->dia = 14;
$aniversario2->mes = 12;
$aniversario2->ano = 1991;
echo $aniversario2->apresentar();

$casamento = new Data();
$casamento->dia = 12;
$casamento->mes = 10;
$casamento->ano = 2090;
echo $casamento->apresentar();

