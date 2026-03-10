<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Peso Ideal</title>
</head>
<body>

<h2>Cálculo do Peso Ideal</h2>

<form method="post">
    Nome: <input type="text" name="nome" required><br><br>
    
    Sexo:
    <select name="sexo" required>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select><br><br>

    Altura (em metros): 
    <input type="number" name="altura" step="any" required><br><br>

    Idade:
    <input type="number" name="idade" required><br><br>

    <input type="submit" name="calcular" value="Calcular">
</form>

<?php
if (isset($_POST['calcular'])) {

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $altura = $_POST['altura'];
    $idade = $_POST['idade'];

    if ($sexo == "M") {
        $pesoIdeal = (72.7 * $altura) - 58;
    } else {
        $pesoIdeal = (62.1 * $altura) - 44.7;
    }

    echo "<h3>Nome: $nome</h3>";
    echo "Peso ideal: " . number_format($pesoIdeal, 2, ',', '.') . " kg";
}
?>

</body>
</html>