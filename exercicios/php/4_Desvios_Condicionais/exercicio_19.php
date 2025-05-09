<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 19 - Número Inteiro</title>
</head>
<body>
    <h1>Número Inteiro</h1>
    <p>Informe um Número Inteiro, esse código irá verificar o numero e sua condição</p>
    <form action="#" method="GET">
        <label for="numero">Digite um Número inteiro:</label>
        <input type="number" name="numero" required><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        //  Desvios Condicionais
        //Exercicio: Numero Inteiro
        //Autor: Weverton
        if($_GET){
            $numero = $_GET['numero'];
            if($numero > 0){
                echo "<p>O número é positivo!</p>";
            } else if($numero < 0){
                echo "<p>O número é negativo</p>";
            } else {
                echo "<p>O número é igual a zero!</p>";
            }
        }
    ?>
</body>
</html>