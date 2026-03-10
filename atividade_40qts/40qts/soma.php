<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
   <h2>Somar Dois Números</h2>

    <form method="POST">
        <label>Primeiro número:</label>
        <input type="number" name="numero1" required><br><br>

        <label>Segundo número:</label>
        <input type="number" name="numero2" required><br><br>

        <button type="submit">Somar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];

            $soma = $numero1 + $numero2;

            echo "<h3>Resultado da soma: $soma</h3>";
        }
    ?>

</body>
</html>