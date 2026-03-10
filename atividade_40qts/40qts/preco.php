<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Controle de Produtos</title>
</head>
<body>

<h2>Cadastro de Produtos (até 40)</h2>

<form method="post">
    <label>Preço de Custo:</label><br>
    <input type="number" name="custo" step="any" required><br><br>

    <label>Preço de Venda:</label><br>
    <input type="number" name="venda" step="any" required><br><br>

    <button type="submit" name="registrar">Registrar</button>
    <button type="submit" name="finalizar">Finalizar</button>
</form>

<hr>

<?php
session_start();


if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
    $_SESSION['somaCusto'] = 0;
    $_SESSION['somaVenda'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    if (isset($_POST["registrar"])) {

        if ($_SESSION['contador'] < 40) {

            $custo = floatval($_POST["custo"]);
            $venda = floatval($_POST["venda"]);

            $_SESSION['contador']++;
            $_SESSION['somaCusto'] += $custo;
            $_SESSION['somaVenda'] += $venda;

            echo "<h3>Produto " . $_SESSION['contador'] . "</h3>";

            if ($venda > $custo) {
                echo "Resultado: <strong>Lucro</strong><br>";
            } elseif ($venda < $custo) {
                echo "Resultado: <strong>Prejuízo</strong><br>";
            } else {
                echo "Resultado: <strong>Empate</strong><br>";
            }

            echo "Total registrado até agora: " . $_SESSION['contador'];

        } else {
            echo "<h3>Limite de 40 produtos atingido.</h3>";
        }
    }

    
    if (isset($_POST["finalizar"])) {

        if ($_SESSION['contador'] > 0) {

            $mediaCusto = $_SESSION['somaCusto'] / $_SESSION['contador'];
            $mediaVenda = $_SESSION['somaVenda'] / $_SESSION['contador'];

            echo "<h3>Relatório Final</h3>";
            echo "Total de produtos: " . $_SESSION['contador'] . "<br>";
            echo "Média do preço de custo: R$ " . number_format($mediaCusto, 2, ',', '.') . "<br>";
            echo "Média do preço de venda: R$ " . number_format($mediaVenda, 2, ',', '.') . "<br>";
        } else {
            echo "Nenhum produto foi cadastrado.";
        }

        session_destroy();
    }
}
?>

</body>
</html>