<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de 1 até N</title>
</head>
<body>

    <h1>Somador de 1 até o número informado</h1>

    <form method="post">
        <label for="numero">Digite o número até o qual deseja somar:</label><br>
        <input type="number" name="numero" id="numero" required><br><br>
        <button type="submit">Calcular Soma</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int) $_POST["numero"];
        $soma = 0;

        for ($contador = 1; $contador <= $numero; $contador++) {
            $soma += $contador;
        }

        echo "<h2>A soma de 1 até $numero é: $soma</h2>";
    }
    ?>

</body>
</html>
