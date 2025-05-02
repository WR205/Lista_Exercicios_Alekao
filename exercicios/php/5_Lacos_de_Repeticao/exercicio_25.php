<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 25 - Consistência</title>
</head>
<body>
<form action="" method="post">
    <span>Informe sua idade (valores aceitos de 5 a 150):</span>
    <input type="text" name="idade" placeholder="Valor" >
    <button type="submit">Enviar</button>
</form>

    <?php
    if (isset($_POST['idade'])) {
        $idade = $_POST['idade'];
        if ($idade >= 5 && $idade <= 150) {
            echo "<h2>Idade válida: " . $idade . "</h2>";
        } else {
            echo "<h2>Idade inválida. Por favor, insira um valor entre 5 e 150.</h2>";
        }
    }
    ?>
</body>
</html>