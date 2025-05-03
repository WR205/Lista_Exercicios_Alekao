<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 4 - Operações Simples</title>
</head>
<body>
<h1>Operações Aritméticas</h1>
    <form method="POST" action="">
        <label for="n1">Digite o primeiro número:</label>
        <input type="number" id="n1" name="n1" required>
        <br>
        <label for="n2">Digite o segundo número:</label>
        <input type="number" id="n2" name="n2" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
    <?php
        //  Operações Aritméticas
        //Exercicio: Operações Simples
        //Autor: Pedro
        if ($_POST) {
            $n1 = filter_input(INPUT_POST, 'n1', FILTER_VALIDATE_FLOAT);
            $n2 = filter_input(INPUT_POST, 'n2', FILTER_VALIDATE_FLOAT);

            if ($n1 !== false && $n2 !== false) {
                $soma = $n1 + $n2;
                $subtracao = $n1 - $n2;
                $multiplicacao = $n1 * $n2;
                $divisao = $n2 != 0 ? $n1 / $n2 : 'Divisão por zero não é permitida';

                echo "<p>A soma é: $soma</p>";
                echo "<p>A subtração é: $subtracao</p>";
                echo "<p>A multiplicação é: $multiplicacao</p>";
                echo "<p>A divisão é: $divisao</p>";
            } else {
                echo "<p>Por favor, insira números válidos.</p>";
            }
        }
    ?>
</body>
</html>