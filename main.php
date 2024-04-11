<?php
class Filme {
    private $titulo;
    private $genero;
    private $duracao;

    public function __construct($titulo, $genero, $duracao) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
    }

    // Métodos para acessar e modificar os atributos, se necessário
}

class Sala {
    private $numero;
    private $capacidade;

    public function __construct($numero, $capacidade) {
        $this->numero = $numero;
        $this->capacidade = $capacidade;
    }

    // Métodos para acessar e modificar os atributos, se necessário
}

class Ingresso {
    private $filme;
    private $sala;
    private $preco;

    public function __construct($filme, $sala, $preco) {
        $this->filme = $filme;
        $this->sala = $sala;
        $this->preco = $preco;
    }

    // Métodos para acessar e modificar os atributos, se necessário
}

class Cliente {
    private $nome;
    private $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    // Métodos para acessar e modificar os atributos, se necessário
}


$filme1 = new Filme("O Poderoso Chefão", "Drama", 175);
$sala1 = new Sala(1, 100);
$ingresso1 = new Ingresso($filme1, $sala1, 20.00);
$cliente1 = new Cliente("João", "joao@email.com");
?>
