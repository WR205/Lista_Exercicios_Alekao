<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 24 - Tabuada</title>
</head>
<body>
    
    <form method="POST" action="">
        <span>informe um numero para ver sua tabuada</span>
        <input type="text" name="numero"></input>
        <button type="submit">Calcular Tabuada</button>
    </form>

    <?php
        if (isset($_POST['numero'])) {
            $numero = $_POST['numero'];
            echo "<h2>Tabuada do " . $numero . "</h2>";
            for ($i = 1; $i <= 10; $i++) {
                echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
            }
        }
    ?>
</body>
</html>