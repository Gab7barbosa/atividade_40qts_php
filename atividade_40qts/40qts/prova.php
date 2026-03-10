<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média Ponderada</title>
</head>
<body>

<h2>Cálculo da Nota Final</h2>

<form method="post">
    Nota do Trabalho de Laboratório:
    <input type="number" name="lab" step="any" min="0" max="10" required><br><br>

    Nota da Avaliação Semestral:
    <input type="number" name="semestre" step="any" min="0" max="10" required><br><br>

    Nota do Exame Final:
    <input type="number" name="exame" step="any" min="0" max="10" required><br><br>

    <input type="submit" name="calcular" value="Calcular Média">
</form>

<?php
if (isset($_POST['calcular'])) {

    $lab = $_POST['lab'];
    $semestre = $_POST['semestre'];
    $exame = $_POST['exame'];

    // Pesos
    $pesoLab = 2;
    $pesoSemestre = 3;
    $pesoExame = 5;

    // Cálculo da média ponderada
    $mediaFinal = (
        ($lab * $pesoLab) +
        ($semestre * $pesoSemestre) +
        ($exame * $pesoExame)
    ) / ($pesoLab + $pesoSemestre + $pesoExame);

    echo "<h3>Nota Final: " . number_format($mediaFinal, 2, ',', '.') . "</h3>";
}
?>

</body>
</html>