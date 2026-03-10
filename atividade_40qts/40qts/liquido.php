<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Salário Líquido</title>
</head>
<body>

<h2>Cálculo de Salário Líquido</h2>

<form method="post">
    Nome: <input type="text" name="nome" required><br><br>
    
    Idade: <input type="number" name="idade" required><br><br>
    
    Sexo:
    <select name="sexo" required>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select><br><br>
    
    Salário Fixo: <input type="number" name="salario" step="any" required><br><br>
    
    <input type="submit" name="calcular" value="Calcular">
</form>

<?php
if (isset($_POST['calcular'])) {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $salario = $_POST['salario'];

    if ($sexo == "M") {
        if ($idade <= 30) {
            $percentual = 0.05;
        } else {
            $percentual = 0.10;
        }
    } else {
        if ($idade <= 30) {
            $percentual = 0.08;
        } else {
            $percentual = 0.12;
        }
    }

    $salarioLiquido = $salario + ($salario * $percentual);

    echo "<h3>Funcionário: $nome</h3>";
    echo "Salário Líquido: R$ " . number_format($salarioLiquido, 2, ',', '.');
}
?>

</body>
</html>