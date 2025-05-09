<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 18 - Média Final</title>
</head>
<body>
    <h1>Média Final</h1>
    <p>Informe suas notas, e será calculada a média delas</p>
    <form action="#" method="GET">
        <label for="nome">Nome</label>
        <input type="text" name="nome" required><br>
        <label for="nota1">Nota 1</label>
        <input type="number" name="nota1" min="0" max="10" step="0.1" required> <br>
        <label for="nota2">Nota 2</label>
        <input type="number" name="nota2" min="0" max="10" step="0.1"  required> <br>
        <label for="nota3">Nota 3</label>
        <input type="number" name="nota3" min="0" max="10" step="0.1"  required> <br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        //  Desvios Condicionais
        //Exercicio: Média Final
        //Autor: Weverton

        if($_GET){
            $media = round(($_GET['nota1'] + $_GET['nota2'] + $_GET['nota3'])/3, 2);

            if($media >= 6){
                echo "<p>Parabens {$_GET['nome']}, você foi aprovado com a média {$media}</p>";
            } else {
                echo "<p>Que pena {$_GET['nome']}, você foi reprovado com a média {$media}</p>";
            }
        } 
    ?>
</body>
</html>