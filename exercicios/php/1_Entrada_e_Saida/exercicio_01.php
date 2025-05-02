<?php
    //  Entrada e Saída
    //Exercicio: Mostrar Texto na Tela
    //Autor: Weverton
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 1 - Mostrar texto na Tela</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #mensagem {
            display: flex;
            justify-content: center;
            align-items: center;
            border: black solid 2px;
            height: 50px;
            width: 200px;
            font-size: 30px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <h1>Exercicio 1 - Mostrar texto na Tela</h1>
    <div id="mensagem"><p>Olá Mundo</p></div>
    <label for="texto">Texto</label>
    <input id="texto" type="text"></input>
    <button id="mostrarTexto">Mostrar</button>
</body>
</html>

