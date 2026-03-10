<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendimento</title>
</head>
<body>
    <h2>Rendimento</h2>
    <form method = post>
    <label>Valor depositado:</label>
    <input type="number" name="valor" step="any" required><br>

    <button type="submit">Rendimento</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];
        $taxa = 0.007;
        $valor_final = $valor + ($valor * $taxa);
        
        echo"<h3>Seu rendimento foi: $valor_final</h3>";
    }
    ?>


</body>
</html>