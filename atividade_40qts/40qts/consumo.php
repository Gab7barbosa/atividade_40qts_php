<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo médio</title>
</head>
<body>
    <h2>Consumo médio</h2>

    <form method="post">
        <label>Distância percorrida(km): </label>
    <input type="number" step="any" name="distancia"required><br>

        <label>Combustível(L):</label>
    <input type="number" step="any" name="combustivel"required><br>

    <button type="submit">Consumo médio</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $distancia = $_POST["distancia"];
    $combustivel = $_POST["combustivel"];

    if ($combustivel != 0) {

        $consumo = $distancia / $combustivel;

        echo "<h3>O consumo médio gasto foi:</h3>";
        echo "O consumo médio foi: " . number_format($consumo, 2) . " km/l";

    } else {
        echo "<h3>Erro: Não é possível dividir por zero.</h3>";
    }
}
    
    ?>
</body>
</html>