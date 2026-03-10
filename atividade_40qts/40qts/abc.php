<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operação Aritmética</title>
</head>
<body>

<h2>Calculadora Simples</h2>

<form method="post">
    Valor A: <input type="number" name="A" step="any" required><br><br>
    Valor B: <input type="number" name="B" step="any" required><br><br>
    Operador (+, -, *, /): 
    <input type="text" name="C" maxlength="1" required><br><br>
    <input type="submit" name="calcular" value="Calcular">
</form>

<?php
if (isset($_POST['calcular'])) {

    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];

    switch ($C) {

        case "+":
            $resultado = $A + $B;
            echo "<h3>Resultado: $resultado</h3>";
            break;

        case "-":
            $resultado = $A - $B;
            echo "<h3>Resultado: $resultado</h3>";
            break;

        case "*":
            $resultado = $A * $B;
            echo "<h3>Resultado: $resultado</h3>";
            break;

        case "/":
            if ($B == 0) {
                echo "<h3>Erro: divisão por zero não permitida!</h3>";
            } else {
                $resultado = $A / $B;
                echo "<h3>Resultado: $resultado</h3>";
            }
            break;

        default:
            echo "<h3>Operador não definido!</h3>";
    }
}
?>

</body>
</html>