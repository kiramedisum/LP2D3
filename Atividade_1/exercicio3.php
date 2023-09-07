<?php
class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    } 

}

function exibirCatalogo($catalogo) {
    foreach ($catalogo as $produto) {
        echo "Produto: " . $produto->getNome() . " | Preço: $" . $produto->getPreco() . "<br>";
    }
}

$catalogo = [
    new Produto("Camiseta", 56.99),
    new Produto("Calça Jeans",79.99),
    new Produto("Tênis", 99.99),
    new Produto("Mochila", 299.99)
];
exibirCatalogo($catalogo);

?>