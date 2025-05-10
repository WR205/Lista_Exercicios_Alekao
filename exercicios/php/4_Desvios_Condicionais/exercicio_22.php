<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 22 - Escolha-Caso</title>
</head>
<body>
    <h1>Escolha-Caso</h1>
    <p>1) Elogio</p>
    <p>2) Ofensa</p>
    <p>3) Sair</p>
    <form action="#" method="GET">
        <label for="opcao">Escolha uma Opção:</label>
        <input type="number" name="opcao" min="1" max="3" required> <br />
        <button type="submit">Enviar Resposta</button>
    </form>
    <?php
        //  Desvios Condicionais
        //Exercicio: Escolha-Caso
        //Autor: Weverton
        if($_GET){
            switch ($_GET['opcao']){
                case 1:
                    echo "<p>Você é bonito!</p>";
                break;
                case 2:
                    echo "<p>Você é feio!</p>";
                break;
                case 3:
                    echo "<p>Tchau!</p>";
                break;
                default: 
                    echo "<p>Opção inválida!</p>";  
            }
        }
    ?>
</body>
</html>