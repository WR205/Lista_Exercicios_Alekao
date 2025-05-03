<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 8 - Troca Variáveis</title>
</head>
<body>
<h1>Troca de Variáveis</h1>
    <form method="POST" action="">
        <label for="a">Digite o valor de A:</label>
        <input type="number" id="a" name="a" required>
        <br>
        <label for="b">Digite o valor de B:</label>
        <input type="number" id="b" name="b" required>
        <br>
        <button type="submit">Trocar</button>
    </form>
    <?php
        //  Algoritmos Sequencias
        //Exercicio: Troca Variáveis
        //Autor: Pedro

        
        if ($_POST) {
            $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_INT);
            $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_INT);

            if ($a !== false && $b !== false) {
                echo "<p>Antes da troca: A = $a, B = $b</p>";

                // Troca os valores
                $temp = $a;
                $a = $b;
                $b = $temp;

                echo "<p>Depois da troca: A = $a, B = $b</p>";
            } else {
                echo "<p>Por favor, insira valores válidos para A e B.</p>";
            }
        }
    ?>
</body>
</html>