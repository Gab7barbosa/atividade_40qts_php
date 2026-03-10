<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamão</title>
</head>
<body>
    <h2>Parcelas: </h2>
<form method="post">
    <label>Valor do produto: </label>
    <input type="number" name="valor" step="any" required><br>

    <button type="submit">Preço das parcelas</button>
</form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = $_POST["valor"];

    $prestacoes = $valor/5;

    echo"<h3>O valor das prestações é: $prestacoes</h3>";
    }
    ?>

</body>
</html>