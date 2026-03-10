<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Idades</title>
</head>
<body>

<h2>Classificar Idades</h2>

<form method="post">
    <?php
    for ($i = 1; $i <= 75; $i++) {
        echo "Idade da pessoa $i: 
        <input type='number' name='idades[]' min='0' required><br>";
    }
    ?>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idades = $_POST["idades"];

    foreach ($idades as $indice => $idade) {
        if ($idade >= 18) {
            echo "Pessoa " . ($indice + 1) . ": Maior de idade<br>";
        } else {
            echo "Pessoa " . ($indice + 1) . ": Menor de idade<br>";
        }
    }
}
?>

</body>
</html>