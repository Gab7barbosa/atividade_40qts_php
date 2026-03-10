<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Categoria Seguro</title>
</head>
<body>

<h2>Classificação de Seguro</h2>

<form method="post">
    Nome: <input type="text" name="nome" required><br><br>
    Idade: <input type="number" name="idade" required><br><br>
    
    Grupo de Risco:
    <select name="grupo" required>
        <option value="1">1 - Baixo</option>
        <option value="2">2 - Médio</option>
        <option value="3">3 - Alto</option>
    </select><br><br>

    <input type="submit" name="verificar" value="Verificar Categoria">
</form>

<?php
if (isset($_POST['verificar'])) {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $grupo = $_POST['grupo'];

    if ($idade < 17 || $idade > 70) {
        echo "<h3>Idade fora da faixa permitida para seguro.</h3>";
    } else {

        if ($idade >= 17 && $idade <= 20) {
            $categoria = $grupo;
        }
        elseif ($idade >= 21 && $idade <= 24) {
            $categoria = $grupo + 3;
        }
        else {
            $categoria = $grupo + 6;
        }

        echo "<h3>Resultado:</h3>";
        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        echo "Categoria do Seguro: $categoria";
    }
}
?>

</body>
</html>