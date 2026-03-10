<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De USD para R$</title>
</head>
<body>
    <h2>Dolar para real</h2>
<form method="post">
    <label>Valor da cotação:    </label>
    <input type="number" name="cotacao" step="any" required><br>

    <label>Quantidade em dolar: </label>
    <input type="number" name="dolar" step="any" required><br>

    <button type="submit">Converter para real</button>
</form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        $cotacao = $_POST["cotacao"];
        $dolar = $_POST["dolar"];

        $real = $cotacao * $dolar;

        echo"<h3>Sua quantidade em real é: R$ $real</h3>"
    ?>

</body>
</html>