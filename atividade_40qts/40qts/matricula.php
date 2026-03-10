<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificação do Estudante</title>
</head>
<body>

<h2>Resultado Final do Estudante</h2>

<form method="post">
    Nome:
    <input type="text" name="nome" required><br><br>

    Matrícula:
    <input type="text" name="matricula" required><br><br>

    Nota do Laboratório:
    <input type="number" name="lab" step="any" min="0" max="10" required><br><br>

    Nota da Avaliação Semestral:
    <input type="number" name="semestre" step="any" min="0" max="10" required><br><br>

    Nota do Exame Final:
    <input type="number" name="exame" step="any" min="0" max="10" required><br><br>

    <input type="submit" name="calcular" value="Calcular">
</form>

<?php
if (isset($_POST['calcular'])) {

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $lab = $_POST['lab'];
    $semestre = $_POST['semestre'];
    $exame = $_POST['exame'];

    // Pesos
    $mediaFinal = (
        ($lab * 2) +
        ($semestre * 3) +
        ($exame * 5)
    ) / 10;

    // Classificação
    if ($mediaFinal >= 8 && $mediaFinal <= 10) {
        $classificacao = "A";
    }
    elseif ($mediaFinal >= 7) {
        $classificacao = "B";
    }
    elseif ($mediaFinal >= 6) {
        $classificacao = "C";
    }
    elseif ($mediaFinal >= 5) {
        $classificacao = "D";
    }
    else {
        $classificacao = "R";
    }

    echo "<h3>Resultado:</h3>";
    echo "Nome: $nome <br>";
    echo "Matrícula: $matricula <br>";
    echo "Nota Final: " . number_format($mediaFinal, 2, ',', '.') . "<br>";
    echo "Classificação: $classificacao";
}
?>

</body>
</html>
