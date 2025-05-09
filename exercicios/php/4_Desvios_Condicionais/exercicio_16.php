<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 16 - Múltiplo de Cinco</title>
</head>
<body>
    <h1>Múltiplo de Cinco</h1>
    <p>Esse código ira verificar se o Número digitado é múltiplo de cinco</p>
    <form action="#" method="GET">
        <label for="numero">Digite um Número:</label>
        <input type="number" name="numero" required> <br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        //  Desvios Condicionais
        //Exercicio: Múltiplo de Cinco
        //Autor: Weverton
        if($_GET){
            if($_GET['numero'] % 5 == 0){
                echo "<p>O número ", $_GET['numero'], " é multiplo de 5</p>";
            } else {
                echo "<p>O número ", $_GET['numero'], " não é multiplo de 5</p>";
            }
        }
    ?>
</body>
</html>