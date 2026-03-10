<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mês por Número</title>
</head>
<body>

<h2>Digite o número do mês (1 a 12)</h2>

<form method="post">
    <input type="number" name="mes" min="1" max="12" required>
    <br><br>
    <input type="submit" name="verificar" value="Verificar">
</form>

<?php
if (isset($_POST['verificar'])) {

    $mes = $_POST['mes'];

    switch ($mes) {

        case 1:
            echo "<h3>Janeiro</h3>";
            break;

        case 2:
            echo "<h3>Fevereiro</h3>";
            break;

        case 3:
            echo "<h3>Março</h3>";
            break;

        case 4:
            echo "<h3>Abril</h3>";
            break;

        case 5:
            echo "<h3>Maio</h3>";
            break;

        case 6:
            echo "<h3>Junho</h3>";
            break;

        case 7:
            echo "<h3>Julho</h3>";
            break;

        case 8:
            echo "<h3>Agosto</h3>";
            break;

        case 9:
            echo "<h3>Setembro</h3>";
            break;

        case 10:
            echo "<h3>Outubro</h3>";
            break;

        case 11:
            echo "<h3>Novembro</h3>";
            break;

        case 12:
            echo "<h3>Dezembro</h3>";
            break;

        default:
            echo "<h3>Mês inválido!</h3>";
    }
}
?>

</body>
</html>