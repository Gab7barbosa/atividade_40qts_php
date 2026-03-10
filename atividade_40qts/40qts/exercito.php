<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Serviço Militar</title>
</head>
<body>

<h2>Alistamento Militar</h2>

<form method="post">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Sexo (M/F):</label><br>
    <input type="text" name="sexo" required><br><br>

    <label>Idade:</label><br>
    <input type="number" name="idade" required><br><br>

    <label>Saúde (boa/ruim):</label><br>
    <input type="text" name="saude" required><br><br>

    <button type="submit" name="verificar">Verificar</button>
    <button type="submit" name="encerrar">Encerrar</button>
</form>

<hr>

<?php
session_start();

if (!isset($_SESSION['totalPessoas'])) {
    $_SESSION['totalPessoas'] = 0;
}

if (!isset($_SESSION['aptos'])) {
    $_SESSION['aptos'] = 0;
}

if (!isset($_SESSION['naoAptos'])) {
    $_SESSION['naoAptos'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["encerrar"])) {

        echo "<h3>Relatório Final</h3>";
        echo "Total de pessoas: " . $_SESSION['totalPessoas'] . "<br>";
        echo "Total de aptos: " . $_SESSION['aptos'] . "<br>";
        echo "Total de não aptos: " . $_SESSION['naoAptos'];

        session_destroy();
    }

    elseif (isset($_POST["verificar"])) {

        $nome = $_POST["nome"];
        $sexo = strtolower($_POST["sexo"]);
        $idade = intval($_POST["idade"]);
        $saude = strtolower($_POST["saude"]);

        $_SESSION['totalPessoas']++;

        if ($sexo == "m" && $idade >= 18 && $saude == "boa") {
            echo "<h3>$nome está APTO para o serviço militar.</h3>";
            $_SESSION['aptos']++;
        } else {
            echo "<h3>$nome NÃO está apto para o serviço militar.</h3>";
            $_SESSION['naoAptos']++;
        }

        echo "<br>Total até agora: " . $_SESSION['totalPessoas'];
    }
}
?>

</body>
</html>