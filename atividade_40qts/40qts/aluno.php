<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <form method ="POST">
    <h2>Notas</h2>

    <label>Nome do aluno:</label>
    <input type="text"name=aluno required><br>

    <label>Primeira nota: </label>
    <input type="number" name="nota1" step="any" required><br>

    <label>Segunda nota: </label>
    <input type="number" name="nota2" step="any" required><br>

    <label>Terceira nota: </label>
    <input type="number" name="nota3" step="any" required><br>

    <button type="submit">Calcular</button>
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aluno = $_POST["aluno"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];

        $media = ($nota1 + $nota2 + $nota3) /3;
        echo "<h3>A média do aluno é: </h3>" . $media;
    }
    ?>
    
</body>
</html>