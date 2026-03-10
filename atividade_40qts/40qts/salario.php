<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reajuste Salarial</title>
</head>
<body>

<h2>Reajuste Salarial dos Funcionários</h2>

<form method="post">
    <label>Nome do funcionário:</label>
    <input type="text" name="nome" required><br><br>

    <label>Salário atual:</label>
    <input type="number" name="salario" step="any" required><br><br>

    <label>Valor do salário mínimo:</label>
    <input type="number" name="minimo" step="any" required><br><br>

    <input type="submit" name="calcular" value="Calcular Reajuste">
</form>

<?php
session_start();

if (!isset($_SESSION['totalAumento'])) {
    $_SESSION['totalAumento'] = 0;
    $_SESSION['contador'] = 0;
}

if (isset($_POST['calcular'])) {

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $minimo = $_POST['minimo'];

    $salariosMinimos = $salario / $minimo;

    if ($salariosMinimos < 3) {
        $percentual = 0.50;
    } elseif ($salariosMinimos >= 3 && $salariosMinimos <= 10) {
        $percentual = 0.20;
    } elseif ($salariosMinimos > 10 && $salariosMinimos <= 20) {
        $percentual = 0.15;
    } else {
        $percentual = 0.10;
    }

    $reajuste = $salario * $percentual;
    $novoSalario = $salario + $reajuste;

    $_SESSION['totalAumento'] += $reajuste;
    $_SESSION['contador']++;

    echo "<h3>Resultado:</h3>";
    echo "Funcionário: $nome <br>";
    echo "Reajuste: R$ " . number_format($reajuste, 2, ',', '.') . "<br>";
    echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . "<br><br>";

    if ($_SESSION['contador'] == 584) {
        echo "<h3>Total de aumento na folha: R$ " . 
        number_format($_SESSION['totalAumento'], 2, ',', '.') . "</h3>";
        session_destroy();
    } else {
        echo "Funcionários processados: " . $_SESSION['contador'] . " de 584<br>";
        echo "Continue informando os dados...";
    }
}
?>

</body>
</html>