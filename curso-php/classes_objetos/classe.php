<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome} <br> Idade: {$this->idade} <hr>";
    }
}

$cliente1 = new Cliente();
echo $cliente1->apresentar();

$cliente2 = new Cliente();
$cliente2->nome = "Guilherme";
$cliente2->idade = 29;
echo $cliente2->apresentar();
