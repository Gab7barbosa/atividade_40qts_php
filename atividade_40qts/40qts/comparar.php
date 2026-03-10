<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comparar Números</title>
</head>
<body>

<h2>Comparação de Dois Números</h2>

<form method="post">
    <label>Primeiro número:</label>
    <input type="number" name="numero1" step="any" required><br><br>

    <label>Segundo número:</label>
    <input type="number" name="numero2" step="any" required><br><br>

    <button type="submit" name="comparar">Comparar</button>
</form>

<?php
if (isset($_POST['comparar'])) {

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if ($numero1 == $numero2) {

        echo "<h3>Os números são IGUAIS.</h3>";

    } else {

        echo "<h3>Os números são DIFERENTES.</h3>";

        if ($numero1 > $numero2) {
            echo "O maior número é: $numero1";
        } else {
            echo "O maior número é: $numero2";
        }
    }
}
?>

</body>
</html>