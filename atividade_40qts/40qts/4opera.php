<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h3>Calculadora</h3>

    <form method="post">
        <input type="number" name="numero1" step="any" required plaeholder="Primeiro número"><br>
        <input type="number" name="numero2" step="any" required placeholder="Segundo número"><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;

        if ($numero2 !=0) {
            $divisao = $numero1 / $numero2;
        } else {
            $divisao = "0";
        }
        echo "<h3>Resultado: </h3>";
        echo "Soma: $soma <br>";
        echo "Subtração: $subtracao <br>";
        echo "Multiplicação: $multiplicacao <br>";
        echo "Divisão: $divisao <br>";
        
        }
    ?>
</body>
</html>