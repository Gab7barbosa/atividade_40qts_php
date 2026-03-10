<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h2>Cadastro</h2>

<form method="post">
    <?php
    for ($i = 1; $i <= 56; $i++) {
        echo "<h4>Pessoa $i</h4>";
        echo "Nome: <input type='text' name='nomes[]' required><br>";
        echo "Sexo (M/F): <input type='text' name='sexos[]' maxlength='1' required><br><br>";
    }
    ?>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomes = $_POST["nomes"];
    $sexos = $_POST["sexos"];

    $totalHomens = 0;
    $totalMulheres = 0;

    foreach ($nomes as $indice => $nome) {

        $sexo = strtolower($sexos[$indice]);

        if ($sexo == "m") {
            echo "$nome - Homem<br>";
            $totalHomens++;
        } elseif ($sexo == "f") {
            echo "$nome - Mulher<br>";
            $totalMulheres++;
        } else {
            echo "$nome - Sexo inválido<br>";
        }
    }

    echo "<h3>Total de Homens: $totalHomens</h3>";
    echo "<h3>Total de Mulheres: $totalMulheres</h3>";
}
?>

</body>
</html>