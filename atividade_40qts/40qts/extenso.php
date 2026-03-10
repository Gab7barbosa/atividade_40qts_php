<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Número por Extenso</title>
</head>
<body>

<h2>Digite um número de 1 a 5</h2>

<form method="post">
    <label>Número:</label>
    <input type="number" name="numero" required>
    <br><br>
    <input type="submit" name="verificar" value="Verificar">
</form>

<?php
if (isset($_POST['verificar'])) {

    $numero = $_POST['numero'];

    switch ($numero) {

        case 1:
            echo "<h3>Um</h3>";
            break;

        case 2:
            echo "<h3>Dois</h3>";
            break;

        case 3:
            echo "<h3>Três</h3>";
            break;

        case 4:
            echo "<h3>Quatro</h3>";
            break;

        case 5:
            echo "<h3>Cinco</h3>";
            break;

        default:
            echo "<h3>Número inválido.</h3>";
    }
}
?>

</body>
</html>