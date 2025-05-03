<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 5 - Prioridades</title>
</head>
<body>
    <?php
        //  Operações Aritméticas
        //Exercicio: Prioridades
        //Autor: Pedro
        
         
         $resultado = 5.0 + 4.0 * 2.0;
         echo "<p>Operação: 5 + 4 * 2 = $resultado</p>";
 
         
         $resultado = (5.0 + 4.0) * 2.0;
         echo "<p>Operação: (5 + 4) * 2 = $resultado</p>";
 
        
         $resultado = 1.0 + 2.0 / 3.0 * 4.0;
         echo "<p>Operação: 1 + 2 / 3 * 4 = $resultado</p>";
 
         
         $resultado = (1.0 + 2.0) / (3.0 * 4.0);
         echo "<p>Operação: (1 + 2) / (3 * 4) = $resultado</p>";
     ?>
    
</body>
</html>