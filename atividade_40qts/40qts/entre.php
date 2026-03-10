<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre 100 e 200</title>
</head>
<body>
    <h2>Entre 100 e 200: </h2>
    <form method="post">
    <label>Seu número: </label>
    <input type="number" name="numero" required><br>

    <button type="submit">Calcular: </button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
    if ($numero >= 100 && $numero < 200) {
        echo"<h3>Seu número está entre 100 e 200</h3>";
    } else{
        echo"<h3>Seu número não está entre 100 e 200</h3>";
    }
    }
    ?>
</body>
</html>