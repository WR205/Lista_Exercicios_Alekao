<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 7 - Potencia e Raiz</title>
</head>
<body>
<h1>Potência e Raiz Quadrada</h1>
    <form method="POST" action="">
        <label for="valor">Digite um valor:</label>
        <input type="number" id="valor" name="valor" step="0.01" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
    <?php
        //  Operações Aritméticas
        //Exercicio: Potencia e Raiz
        //Autor: Pedro

        if ($_POST) {
            $valor = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_FLOAT);

            if ($valor !== false) {
                $potencia = pow($valor, 3); // Eleva o número ao cubo
                $raiz_quadrada = sqrt($valor); // Calcula a raiz quadrada

                echo "<p>O número ao cubo é: $potencia</p>";
                echo "<p>A raiz quadrada do número é: $raiz_quadrada</p>";
            } else {
                echo "<p>Por favor, insira um valor numérico válido.</p>";
            }
        }
    ?>

</body>
</html>