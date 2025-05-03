<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 2 - Número Digitado</title>
</head>
<body>
<h1>Digite um número inteiro</h1>
    <form method="POST" action="">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
        //  Entrada e Saída
        //Exercicio: Número Digitado
        //Autor: Pedro
        if ($_POST) {
            $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_INT);

            if ($numero !== false) {
                echo "<p>O número digitado foi: $numero</p>";
            } else {
                echo "<p>Por favor, insira um número inteiro válido.</p>";
            }
        }
    ?> 
</body>
</html>
