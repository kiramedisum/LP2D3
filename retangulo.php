<?php

class retangulo {
    private $largura;
    private $altura;

    function __construct($largura,$altura){
        $this->largura = $largura;
        $this->altura = $altura;
    }

    function calc_area(){
        return $this->largura * $this->altura;
    }

    function calc_perimetro(){
        return ($this->largura * 2) + ($this->altura * 2);
    }
}

?>