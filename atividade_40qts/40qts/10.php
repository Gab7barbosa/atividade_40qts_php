<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dez</title>
</head>
<body>
    <h2>Maior que dez: </h2>
    <form method="post">
    <label>Número: </label>
    <input type="number" name="numero" step="any" required><br>

    <button type="submit">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        $numero > 10;
        echo"<h3>Seu número é maior que 10</h3>";
    }
    ?>
</body>
</html>