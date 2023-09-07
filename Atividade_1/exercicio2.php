<?php
class contaBancaria {
    private $titular;
    private $numero;
    private $saldo;

    public function __construct($titular, $numero, $saldo){
        $this->titular = $titular;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    public function info(){
        echo "Titular: $this->titular<br>";
        echo "Conta: $this->numero<br>";
        echo "Saldo atualizado: $this->saldo<br>";
        echo "------------------------------<br><br>";
    }

    public function deposito($valor){
        echo "Valor do deposito: $valor<br>";
        echo "Saldo atual: $this->saldo<br>";
        $this->saldo = $this->saldo + $valor;
        $this->info();
        return $this->saldo;
    }
    public function saque($valor){

        echo "Valor do saque: $valor<br>";
        echo "Saldo atual: $this->saldo<br>";
        if($this->saldo >= $valor){
            $this->saldo = $this->saldo - $valor;
            
        }else{
            echo "Operação invalida saldo insuficiente<br>";
        }
        $this->info();
        return $this->saldo;
    }
}

$conta1 = new contaBancaria("Sergio",1234,5800);
$conta1->deposito(300);
$conta1->saque(5000);


$conta2 = new contaBancaria("Mario",4321,-300);
$conta2->deposito(150);
$conta2->saque(400);

?>