<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Salário Professor - Escola APRENDER</title>
</head>
<body>

<h2>Cálculo de Salário - Escola APRENDER</h2>

<form method="post">
    Nome do Professor: 
    <input type="text" name="nome" required><br><br>

    Nível:
    <select name="nivel" required>
        <option value="1">Nível 1</option>
        <option value="2">Nível 2</option>
        <option value="3">Nível 3</option>
    </select><br><br>

    Quantidade de horas/aula:
    <input type="number" name="horas" step="any" required><br><br>

    <input type="submit" name="calcular" value="Calcular Salário">
</form>

<?php
if (isset($_POST['calcular'])) {

    $nome = $_POST['nome'];
    $nivel = $_POST['nivel'];
    $horas = $_POST['horas'];

    switch ($nivel) {
        case 1:
            $valorHora = 12;
            break;

        case 2:
            $valorHora = 17;
            break;

        case 3:
            $valorHora = 25;
            break;

        default:
            echo "<h3>Nível inválido!</h3>";
            exit;
    }

    $salario = $horas * $valorHora;

    echo "<h3>Professor: $nome</h3>";
    echo "Valor da hora/aula: R$ " . number_format($valorHora, 2, ',', '.') . "<br>";
    echo "Salário: R$ " . number_format($salario, 2, ',', '.');
}
?>

</body>
</html>