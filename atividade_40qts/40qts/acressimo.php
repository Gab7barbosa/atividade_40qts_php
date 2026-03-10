<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acressímo</title>
</head>
<body>
    <h2>Valores: </h2>
    <form method="post">
    <label>Valor de custo: </label>
    <input type="number" name="custo" step="any" required><br>

    <label>Acressímo: </label>
    <input type="number" name="acressimo">

    <button type="submit">Valores</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $custo = $_POST["custo"];
        $acressimo = $_POST["acressimo"];

        $venda = $custo;
        $valor_final = $custo * (1 + $acressimo / 100);
        echo "<h3>Valor de venda:  $venda</h3>";
        echo "<h3>Valor de custo(sem acressimo):  $custo</h3>";
        echo "<h3>Valor do acréssimo:  $acressimo%</h3>";
        echo "<h3>Valor de custo(com acressimo):  $valor_final</h3>";
    }
        ?>
</body>
</html>