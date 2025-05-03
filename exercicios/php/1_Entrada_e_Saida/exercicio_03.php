<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 3 - Seu Nome</title>
</head>
<body>
<h1>Digite seu nome e sobrenome</h1>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" required>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        //  Entrada e Saída
        //Exercicio: Seu Nome
        //Autor: Pedro
        if ($_POST) {
            $nome = filter_input(INPUT_POST, 'nome');
            $sobrenome = filter_input(INPUT_POST, 'sobrenome');

            if ($nome && $sobrenome) {
                echo "<p>Seu nome completo é: $nome $sobrenome</p>";
            } else {
                echo "<p>Por favor, insira um nome e sobrenome válidos.</p>";
            }
        }
    ?>
</body>
</html>
