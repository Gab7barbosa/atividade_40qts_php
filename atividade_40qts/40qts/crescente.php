<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ordem Crescente</title>
</head>
<body>

<h2>Ordenar 3 Valores Inteiros</h2>

<form method="post">
    Primeiro valor: <input type="number" name="v1" required><br><br>
    Segundo valor: <input type="number" name="v2" required><br><br>
    Terceiro valor: <input type="number" name="v3" required><br><br>
    <input type="submit" name="ordenar" value="Ordenar">
</form>

<?php
if (isset($_POST['ordenar'])) {

    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];

    
    if ($v1 == $v2 || $v1 == $v3 || $v2 == $v3) {
        echo "<h3>Os valores devem ser distintos!</h3>";
    } else {

        $valores = array($v1, $v2, $v3);

        sort($valores);

        echo "<h3>Valores em ordem crescente:</h3>";
        echo $valores[0] . " - " . $valores[1] . " - " . $valores[2];
    }
}
?>

</body>
</html>