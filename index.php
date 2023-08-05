<?php
require ("Carro.php");
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
$banana = new fruta("Banana","Amarela");
$mamao =  new fruta("Mamão","Laranja");

$carro1 = new Carro("Hyndai","HB20",2015);
$carro2 = new Carro("Volkswaggen","Fusca",1974);

echo "<br> Carro 1 <br> - modelo " .$carro1->get_modelo(). "<br> - ano " .$carro1->get_ano(). "<br> - marca " .$carro1->get_marca() ."<br>";

echo "<br> Carro 2 <br> - modelo " .$carro2->get_modelo(). "<br> - ano " .$carro2->get_ano(). "<br> - marca " .$carro2->get_marca() ."<br>";

//$maca->set_nome("maçã");
//$maca->set_cor("vermelho");
echo "<br>" .$maca->get_nome();
echo "<br>" .$maca->get_cor();



?>