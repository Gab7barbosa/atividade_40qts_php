<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custo do carro</title>
</head>
<body>
    <h2>Custo do carro:</h2>
    <form method="post">
    <label>Custo de fábrica: </label>
    <input type="number" name="custo" step="any" required><br>

    <label>Impostos: </label>
    <input type="number" name="imposto" required><br>

    <label>Distribuidor: </label>
    <input type="number" name="distribuidor" required><br>
    <button type="submit">Calcular</button>
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")  {
        $custo = $_POST["custo"];
        $imposto = $_POST["imposto"];
        $distribuidor = $_POST["distribuidor"];

        $imposto = $custo + ($custo * $imposto / 100);
        $valor_final = $imposto + ($imposto * $distribuidor / 100);
        echo"<h3>O valor total é: $valor_final</h3>";
        echo"<h3>O valor do imposto é: $imposto%</h3>";
        echo"<h3>O valor do distribuidor é: $distribuidor%</h3>";
    }
    ?>
</body>
</html>