<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 17 - Número Iguais</title>
</head>
<body>
    <h1>Número Iguais</h1>
    <p>Será sorteado um número 0 a 6. Informe um número, e o código irá verificar se os dois números são iguais.</p>
    <form action="#" method="GET">
        <label for="numero">Digite um Número de 0 a 6:</label>
        <input type="number" name="numero" required> <br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        //  Desvios Condicionais
        //Exercicio: Números Iguais
        //Autor: Weverton
        if($_GET){
            $numSorteado = rand(0, 6);
            if($_GET['numero'] >=  0 && $_GET['numero'] <= 6){
                if($_GET['numero'] == $numSorteado){
                    echo "<p>Os números são iguais!</p>";
                } else {
                    echo "<p>Os números são diferentes!</p>";
                }
            } else {
                echo "<p>O número digitado deve estar entre 0 e 6</p>";
            }
        }
    ?>
</body>
</html>