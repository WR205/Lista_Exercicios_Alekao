<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 28 - Fatorial</title>
</head>
<body>

    <h1>Cálculo de Fatorial</h1>

    <form method="post">
        <label for="numero">Digite um número inteiro:</label><br>
        <input type="number" name="numero" id="numero" required min="0"><br><br>
        <button type="submit">Calcular Fatorial</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = (int) $_POST["numero"];
        $atual = 1;
        $fatorial = 1;

        while ($atual <= $numero) {
            $fatorial *= $atual;
            $atual++;
        }

        echo "<h2>O fatorial de $numero é: $fatorial</h2>";
    }
    ?>

</body>
</html>
