<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 20 - Tipo de Triângulo</title>
</head>
<body>
    <h1>Tipo de Triângulo</h1>
    <p>Informe o tamanho das três arestas do triangulo!</p>
    <form action="#" method="GET">
        <label for="aresta1">Aresta 1</label>
        <input type="number" name="aresta1" required>
        <label for="aresta2">Aresta 2</label>
        <input type="number" name="aresta2" required>
        <label for="aresta3">Aresta 3</label>
        <input type="number" name="aresta3" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
        //  Desvios Condicionais
        //Exercicio: Tipo de Triângulo
        //Autor: Weverton
        if($_GET){
            if($_GET['aresta1'] && $_GET['aresta2'] && $_GET['aresta3']){
            $aresta1 = $_GET['aresta1'];
            $aresta2 = $_GET['aresta2'];
            $aresta3 = $_GET['aresta3'];

            if(($aresta1 + $aresta2) > $aresta3 && ($aresta2 + $aresta3) > $aresta1 && ($aresta3 + $aresta1) > $aresta2){
                if($aresta1 == $aresta2 && $aresta1 == $aresta3){
                    echo "<p>Este triângulo é Equilátero</p>";
                } else {
                    if($aresta1 == $aresta2 || $aresta2 == $aresta3 || $aresta3 == $aresta1){
                        echo "<p>Este triângulo é Isósceles</p>";
                    } else {
                        echo "<p>Este triângulo é Escaleno</p>";
                    }
                }
            } else {
                echo "<p>Este triângulo não existe</p>";
            }
        }
        }
    ?>
</body>
</html>