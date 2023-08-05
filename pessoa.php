<?php

class pessoa{
    private $nome;
    private $idade;
    private $profissao;

    function __construct($nome,$idade,$profissao){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    function apres(){
        return $this->nome ." - " .$this->idade ." anos - " .$this->profissao;
    }
}


?>