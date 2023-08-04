<?php

class fruta {
    public $nome;
    public $cor;

    function set_nome($nome){
        $this->nome = $nome;
    }
    
    function set_cor($cor){
        $this->cor = $cor;
    }
    
    function get_nome(){
        return $this->nome;
    }
    
    function get_cor(){
        return $this->cor;
    }

    function __construct($nome,$cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }
}



$maca = new fruta('maçã',"vermelho");
//$banana = new fruta();
//$mamao =  new fruta();

//$maca->set_nome("maçã");
//$maca->set_cor("vermelho");
echo "<br>" .$maca->get_nome();
echo "<br>" .$maca->get_cor();



?>