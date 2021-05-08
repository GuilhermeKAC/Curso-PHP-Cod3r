<div class="titulo">Construtor e Destrutor</div>

<?php
// Classe pessoa
class Pessoa {
    // Atributos nome e idade
    public $nome;
    public $idade;

    //Metodo construtor é chamado quando cria uma nova classe
    //método construtor de todas as classes e veio para substituir os antigos métodos construtores que eram implemetados levando o mesmo nome da classe à qual pertenci
    function __construct($nome, $idade) {
        echo 'Construtor invocado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }
    //Metodo destrutor
    //O método __destruct() funciona como um finalizador e, é executado ao finalizarmos um objeto, ou seja, quando o objeto é desalocado da memória, quando atribuímos NULL ao objeto, quando usamos a função unset() no objeto, ou também quando o programa é fechado
    function __destruct() {
        echo 'E morreu!<br>';
    }
    //Metodo responsavel por apresentar 
    public function apresentar() {
        echo "Nome: {$this->nome} e Idade: {$this->idade}<br>";
    }
}

// Criando um objeto aluno e passando parametros
$pessoaA = new Pessoa("Guilherme Kruszynski", 29);
$pessoaA->apresentar();
//O comando unset apaga uma variável especifica, limpando assim a informação da memória do servidor. Este comando é muito utilizado quando a variável não será mais usada no sistema, então apagamos a mesma para liberar espaço de memória,
unset($pessoaA);

$aluno = new Pessoa("Ana Paula", 25);
$aluno->apresentar();
//Outra maneira de chamar o destructor
$aluno = null;

//$aluno = new Pessoa(); se não der os parametros gera erro no código



