<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verificar Número</title>
</head>
<body>

<h2>Verificação de Número</h2>

<form method="post">
    <label>Digite um número:</label><br>
    <input type="number" name="numero" required><br><br>
    <button type="submit">Verificar</button>
</form>

<hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = intval($_POST["numero"]);

    if ($numero > 80) {
        echo "<h3>O número é maior que 80.</h3>";
    }

    if ($numero < 25) {
        echo "<h3>O número é menor que 25.</h3>";
    }

    if ($numero == 40) {
        echo "<h3>O número é igual a 40.</h3>";
    }

    if ($numero <= 80 && $numero >= 25 && $numero != 40) {
        echo "<h3>O número não se enquadra nas condições especiais.</h3>";
    }
}

?>

</body>
</html>