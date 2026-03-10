<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
</head>
<body>
    <h2>Vendas</h2>
    <form method="post">

    <label>Nome do vendedor:</label>
    <input type="text" name="vendedor" required><br>

    <label>Sálario fixo:</label>
    <input type="number" step="any" name="salario" required><br>
    
    <label>Total de vendas(em R$):</label>
    <input type="number" step="any" name="vendas">

        <button type="submit">Calcular</button>    
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")  {
        $vendedor = $_POST["vendedor"];
        $salario = $_POST["salario"];
        $vendas = $_POST["vendas"];

        $comissao = $vendas * 0.15;
        $valor_final = $salario + $comissao;

    echo "<h3>O salário final é:</h3>";
    echo "Vendedor: $vendedor<br>";
    echo "Salário fixo: R$ " . number_format($salario, 2, ',', '.') . "<br>";
    echo "Comissão (15%): R$ " . number_format($comissao, 2, ',', '.') . "<br>";
    echo "Salário final: R$ " . number_format($valor_final, 2, ',', '.') . "<br>";
    }
    ?>

</body>
</html>