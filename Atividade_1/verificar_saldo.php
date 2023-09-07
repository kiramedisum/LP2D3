<?php
function randomizarSaldo() {
    // Gere um saldo aleatório entre -1000 e 1000 (apenas para fins de exemplo)
    return rand(-1000, 1000);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $profissao = $_POST["profissao"];
    
    // Chame a função para randomizar o saldo
    $saldo = randomizarSaldo();
    
    function curso (){
        echo "<h1>Cursos: <br></h1>";
        echo "Introdução à programação - R$ https://www.youtube.com/curso1<br>";
        echo "Desenvolvimento Web com PHP - R$ https://www.youtube.com/curso2<br>";
        echo "Machine Learning Básico - R$ https://www.youtube.com/curso3<br>";
    }

    function desconto (){
        echo "<h1>Produtos com desconto: <br></h1>";
        echo "Produto A - R$ 50<br>";
        echo "Produto B - R$ 75<br>";
        echo "Produto C - R$ 120<br>";
    }

    // Verifique o saldo e exiba a tela apropriada
    if ($saldo < 0) {
        echo "<h2>Olá, meu nome é $nome, tenho $idade anos e sou $profissao.</h2>";
        echo "<p>Seu saldo em conta é negativo: R$ $saldo</p><br>";
        echo "Veja alguns cursos de programação para ganhar dinheiro e sair das dívidas:<br>";
        curso();
    } else {
        echo "<h2>Olá, meu nome é $nome, tenho $idade anos e sou $profissao.</h2>";
        echo "<p>Seu saldo em conta é positivo: R$ $saldo</p>";

        echo "Veja algumas ofertas de produtos para você e alguns cursos: ";
        curso();
        desconto();


    }


}
?>
