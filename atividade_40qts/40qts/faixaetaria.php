<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificação do Nadador</title>
</head>
<body>

<h2>Classificação de Nadador</h2>

<form method="post">
    Digite a idade:
    <input type="number" name="idade" required>
    <br><br>
    <input type="submit" name="classificar" value="Classificar">
</form>

<?php
if (isset($_POST['classificar'])) {

    $idade = $_POST['idade'];

    if ($idade >= 5 && $idade <= 7) {
        echo "<h3>Categoria: Infantil A</h3>";
    }
    elseif ($idade >= 8 && $idade <= 10) {
        echo "<h3>Categoria: Infantil B</h3>";
    }
    elseif ($idade >= 11 && $idade <= 13) {
        echo "<h3>Categoria: Juvenil A</h3>";
    }
    elseif ($idade >= 14 && $idade <= 17) {
        echo "<h3>Categoria: Juvenil B</h3>";
    }
    elseif ($idade >= 18 && $idade <= 25) {
        echo "<h3>Categoria: Sênior</h3>";
    }
    else {
        echo "<h3>Idade fora da faixa etária.</h3>";
    }
}
?>

</body>
</html>