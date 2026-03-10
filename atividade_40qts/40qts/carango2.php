<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CARANGO - Cálculo de Desconto</title>
</head>
<body>

<h2>Concessionária CARANGO</h2>

<form method="post">
    <label>Valor do veículo:</label>
    <input type="number" name="valor" step="any" required><br><br>

    <label>Combustível:</label>
    <select name="combustivel" required>
        <option value="alcool">Álcool</option>
        <option value="gasolina">Gasolina</option>
        <option value="diesel">Diesel</option>
    </select><br><br>

    <input type="submit" name="calcular" value="Calcular">
</form>

<?php
session_start();

if (!isset($_SESSION['totalDesconto'])) {
    $_SESSION['totalDesconto'] = 0;
    $_SESSION['totalPago'] = 0;
}

if (isset($_POST['calcular'])) {

    $valor = $_POST['valor'];
    $combustivel = $_POST['combustivel'];

    if ($valor == 0) {

        echo "<h3>Entrada encerrada.</h3>";
        echo "Total de desconto concedido: R$ " . number_format($_SESSION['totalDesconto'], 2, ',', '.') . "<br>";
        echo "Total pago pelos clientes: R$ " . number_format($_SESSION['totalPago'], 2, ',', '.');

        session_destroy();

    } else {

        switch ($combustivel) {

            case "alcool":
                $percentual = 0.25;
                break;

            case "gasolina":
                $percentual = 0.21;
                break;

            case "diesel":
                $percentual = 0.14;
                break;
        }

        $desconto = $valor * $percentual;
        $valorFinal = $valor - $desconto;

        $_SESSION['totalDesconto'] += $desconto;
        $_SESSION['totalPago'] += $valorFinal;

        echo "<h3>Resultado:</h3>";
        echo "Valor do desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
        echo "Valor a pagar: R$ " . number_format($valorFinal, 2, ',', '.') . "<br><br>";
        echo "Digite outro valor ou 0 para encerrar.";
    }
}
?>

</body>
</html>
