<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Saldo</title>
</head>
<body>
    <h1>Verificação de Saldo</h1>
    <form action="verificar_saldo.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" required><br><br>

        <label for="profissao">Profissão:</label>
        <input type="text" name="profissao" required><br><br>

        <button type="submit">Enviar</button>
    </form>


</body>
</html>
