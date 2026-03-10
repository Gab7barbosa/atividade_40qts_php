<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior</title>
</head>
<body>
    <h2>Maior número: </h2>
    <form method="post">
    <label>Número1: </label>
    <input type="number" name="numero1" step="any" required><br>

    <label>Número2: </label>
    <input type="number" name="numero2" step="any" required><br>

    <button type="submit">Calcular</button>

    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

    if  ($numero1 > $numero2) {
        echo"<h3>O número 1 é maior que o 2</h3>";
    } else {
        echo"<h3>O número 2 é maior que o 1:</h3>";
      }
    }
    ?>


</body>
</html>