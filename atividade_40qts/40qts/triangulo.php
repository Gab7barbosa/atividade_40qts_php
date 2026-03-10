<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Triângulo</title>
</head>
<body>

<h2>Verificar Tipo de Triângulo</h2>

<form method="post">
    Lado A: <input type="number" name="a" required><br><br>
    Lado B: <input type="number" name="b" required><br><br>
    Lado C: <input type="number" name="c" required><br><br>
    <input type="submit" name="verificar" value="Verificar">
</form>

<?php
if (isset($_POST['verificar'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // Verifica se forma triângulo
    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {

        echo "<h3>Os valores formam um triângulo.</h3>";

        if ($a == $b && $b == $c) {
            echo "Tipo: Triângulo Equilátero";
        } elseif ($a == $b || $a == $c || $b == $c) {
            echo "Tipo: Triângulo Isósceles";
        } else {
            echo "Tipo: Triângulo Escaleno";
        }

    } else {
        echo "<h3>Os valores NÃO formam um triângulo.</h3>";
    }
}
?>

</body>
</html>