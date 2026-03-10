<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca</title>
</head>
<body>
    <form method="post">
    <h2>Troca de valores:</h2>    

    <label>Valor de A:</label>
    <input type="number" step="any" name="A" required><br>

    <label>Valor de B:</label>
    <input type="number" step="any" name="B" required><br>

    <button type="submit">Trocar de valores</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = $_POST["A"];
    $B = $_POST["B"];

    $temp = $A;
    $A = $B;
    $B = $temp;
    echo"<h3>O valor de A e B são: </h3>";
    echo "A = $A<br>";
    echo "B = $B";
    }
    ?>

</body>
</html>