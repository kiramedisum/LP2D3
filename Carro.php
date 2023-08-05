<?php

class Carro{
    //Criamos os atributos com
    //os modificador de acesso 
    //do tipo private
    private $marca;
    private $modelo;
    private $ano;

    //metodo construtor
    function __construct($marca,$modelo,$ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        if($ano < 2000){
            echo "Não permitido";
            $this->ano = $ano = "Não permitido";
        }else{
            $this->ano = $ano;
        }
    }
    function set_marca($marca){
        $this->marca = $marca;
    }
    function set_modelo($modelo){
        $this->modelo = $modelo;
    }
    //Encapsulamento
    function set_ano($ano){
        $this->ano = $ano;
    }
    function get_marca(){
        return $this->marca;
    }
    function get_modelo(){
        return $this->modelo;
    }
    function get_ano(){
        return $this->ano;
    }

}



?>