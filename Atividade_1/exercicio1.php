<?php
class pessoa {
    private $nome;
    private $idade;
    private $profissao;

    public function __construct($nome, $idade, $profissao){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    public function apresentar(){
        return "Olá meu nome é {$this->nome}, tenho {$this->idade} anos e sou {$this->profissao}.<br><br>";
    }
}

$pessoa1 = new pessoa("Roberto",27,"Professor");
echo $pessoa1->apresentar();

$pessoa2 = new pessoa("Carla",32,"Engenheira");
echo $pessoa2->apresentar();

?>