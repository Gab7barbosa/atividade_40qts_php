<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>80x</title>
</head>
<body>
    <h5>Números: </h5>
    <form method="post">
        <?php
        for ($i = 1; $i <= 80; $i++) {
        echo "Número $i: <input type='number' name='numeros[]' required><br>";
    }
    ?>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $contador = 0;
    $numeros = $_POST["numeros"];

    foreach ($numeros as $numero) {
        if ($numero >= 10 && $numero <= 150) {
            $contador++;
        }
    }

    echo "<h3>Quantidade de números entre 10 e 150: $contador</h3>";
}
    ?>
</body>
</html>