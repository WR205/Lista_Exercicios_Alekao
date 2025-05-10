<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 21 - Mini Calculadora</title>
</head>
<body>
    <h1>Mini Calculadora</h1>
    <form action="#" method="GET">
        <label for="numero1">Informe o Numero 1</label>
        <input type="number" name="numero1" required> <br />
        <label for="numero2">Informe o Numero 2</label>
        <input type="number" name="numero2" required> <br />
        <label for="operacao">Operacao Matemática</label>
        <select name="operacao" required>
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">×</option>
            <option value="divisao">÷</option>
        </select> <br />
        <button type="submit">Calcular</button>
    </form>
    <?php
        //  Desvios Condicionais
        //Exercicio: Mini Calculadora
        //Autor: Weverton
        if($_GET){
            $numero1 = $_GET['numero1'];
            $numero2 = $_GET['numero2'];
            $operacao = $_GET['operacao'];
            $resp = 0;
            if($operacao == "soma"){
                $resp = $numero1 + $numero2;
                $operacao = "+";
            } else if($operacao == "subtracao") {
                $resp = $numero1 - $numero2;
                $operacao = "-";
            } else if($operacao == "multiplicacao") {
                $resp = $numero1 * $numero2;
                $operacao = "×";
            } else if($operacao == "divisao") {
                $resp = $numero1 / $numero2;
                $operacao = "÷";
            }
            echo "<p>Resultado: {$numero1} {$operacao} {$numero2} = {$resp}</p>";
        }
    ?>
</body>
</html>