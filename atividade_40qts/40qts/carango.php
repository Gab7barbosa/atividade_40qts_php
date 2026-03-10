<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CARANGO VELHO</title>
</head>
<body>

<h2>Concessionária CARANGO VELHO</h2>

<form method="post">
    <label>Valor do veículo:</label><br>
    <input type="number" name="valor" step="any" required><br><br>

    <label>Ano do veículo:</label><br>
    <input type="number" name="ano" required><br><br>

    <button type="submit" name="calcular">Calcular</button>
    <button type="submit" name="encerrar">(N) Não - Encerrar</button>
</form>

<hr>

<?php
session_start();

// Inicializa contadores
if (!isset($_SESSION['totalCarros'])) {
    $_SESSION['totalCarros'] = 0;
}

if (!isset($_SESSION['ate2000'])) {
    $_SESSION['ate2000'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Se clicar em encerrar
    if (isset($_POST["encerrar"])) {

        echo "<h3>Relatório Final</h3>";
        echo "Total de carros até 2000: " . $_SESSION['ate2000'] . "<br>";
        echo "Total geral de carros: " . $_SESSION['totalCarros'];

        session_destroy();

    } 
    // Se clicar em calcular
    elseif (isset($_POST["calcular"])) {

        $valor = floatval($_POST["valor"]);
        $ano = intval($_POST["ano"]);

        if ($ano <= 2000) {
            $percentual = 0.12;
            $_SESSION['ate2000']++;
        } else {
            $percentual = 0.07;
        }

        $desconto = $valor * $percentual;
        $valorFinal = $valor - $desconto;

        $_SESSION['totalCarros']++;

        echo "<h3>Resultado:</h3>";
        echo "Valor do desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
        echo "Valor a pagar: R$ " . number_format($valorFinal, 2, ',', '.') . "<br><br>";

        echo "<strong>Total até 2000: " . $_SESSION['ate2000'] . "</strong><br>";
        echo "<strong>Total geral: " . $_SESSION['totalCarros'] . "</strong>";
    }
}
?>

</body>
</html>