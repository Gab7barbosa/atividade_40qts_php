<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
    <h2>Temperatura</h2>
<form method="post">
    <label>Graus em Celsius(°C)</label>
    <input type="number" name="celsius" step="any" required><br>

    <button type="submit">Converter para F</button>

</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];

        $fahrenheit = $celsius * 1.8 + 32;
        echo"<h3>A conversão de Celsius para Fahrenheit é: </h3>  $fahrenheit °F";
    }
    ?>

</body>
</html>