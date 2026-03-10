<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Números</title>
</head>
<body>

<h2>Verificar se o número é Positivo, Negativo ou Zero</h2>

<form method="post">
    <label>Quantos números deseja informar?</label>
    <input type="number" name="quantidade" min="1" required>
    <button type="submit" name="gerar">Gerar Campos</button>
</form>

<hr>

<?php
if (isset($_POST['gerar'])) {
    $quantidade = $_POST['quantidade'];

    echo "<form method='post'>";
    
    for ($i = 1; $i <= $quantidade; $i++) {
        echo "Número $i: <input type='number' name='numeros[]' step='any' required><br><br>";
    }

    echo "<button type='submit' name='verificar'>Verificar</button>";
    echo "</form>";
}

if (isset($_POST['verificar'])) {
    $numeros = $_POST['numeros'];

    echo "<h3>Resultado:</h3>";

    foreach ($numeros as $numero) {

        if ($numero > 0) {
            echo "O número $numero é <strong>POSITIVO</strong>.<br>";
        } elseif ($numero < 0) {
            echo "O número $numero é <strong>NEGATIVO</strong>.<br>";
        } else {
            echo "O número $numero é <strong>ZERO</strong>.<br>";
        }
    }
}
?>

</body>
</html>