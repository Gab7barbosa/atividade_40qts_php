<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conta de Luz</title>
</head>
<body>

<h2>Cálculo da Conta de Luz</h2>

<form method="post">
    
    Tipo de Cliente:
    <select name="tipo" required>
        <option value="1">1 - Residência</option>
        <option value="2">2 - Comércio</option>
        <option value="3">3 - Indústria</option>
    </select>
    <br><br>

    Quantidade de KW/h consumida:
    <input type="number" name="consumo" step="any" required>
    <br><br>

    <input type="submit" name="calcular" value="Calcular Conta">

</form>

<?php
if (isset($_POST['calcular'])) {

    $tipo = $_POST['tipo'];
    $consumo = $_POST['consumo'];

    switch ($tipo) {
        case 1:
            $valorKW = 0.60;
            $descricao = "Residência";
            break;

        case 2:
            $valorKW = 0.48;
            $descricao = "Comércio";
            break;

        case 3:
            $valorKW = 1.29;
            $descricao = "Indústria";
            break;

        default:
            echo "<h3>Tipo de cliente inválido!</h3>";
            exit;
    }

    $total = $consumo * $valorKW;

    echo "<h3>Resultado:</h3>";
    echo "Tipo de cliente: $descricao <br>";
    echo "Valor do KW/h: R$ " . number_format($valorKW, 2, ',', '.') . "<br>";
    echo "Total a pagar: R$ " . number_format($total, 2, ',', '.');
}
?>

</body>
</html>