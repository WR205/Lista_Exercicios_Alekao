<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 6 - Divisões Inteiras</title>
</head>
<body>
<h1>Divisões Inteiras</h1>
    <form method="POST" action="">
        <label for="n1">Digite um número:</label>
        <input type="number" id="n1" name="n1" required>
        <br>
        <button type="submit">Calcular</button>
    </form>
    <?php
        //  Operações Aritméticas
        //Exercicio: Divisões Inteiras
        //Autor: Pedro


        if ($_POST) {
            $n1 = filter_input(INPUT_POST, 'n1', FILTER_VALIDATE_INT);

            if ($n1 !== false) {
                $metade_inteira = intdiv($n1, 2); 
                $resto = $n1 % 3; 
                echo "<p>A metade inteira de $n1 é: $metade_inteira</p>";
                echo "<p>O resto da divisão de $n1 por 3 é: $resto</p>";
            } else {
                echo "<p>Por favor, insira um número inteiro válido.</p>";
            }
        }
    ?>
</body>
</html>