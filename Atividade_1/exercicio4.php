<?php
class Curso {
    private $nome;
    private $link;

    public function __construct($nome, $link){
        $this->nome = $nome;
        $this->link = $link;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLink() {
        return $this->link;
    } 

}

function exibirCatalogo($catalogo) {
    foreach ($catalogo as $produto) {
        echo "Curso de: " . $produto->getNome() . " | Link: " . $produto->getLink() . "<br>";
    }
}

$catalogo = [
    new Curso("PHP", "https://www.youtube.com/curso_php"),
    new Curso("C#","https://www.youtube.com/curso_C#"),
    new Curso("Windows", "https://www.youtube.com/curso_windows"),
    new Curso("Python", "https://www.youtube.com/curso_python")
];
exibirCatalogo($catalogo);

?>