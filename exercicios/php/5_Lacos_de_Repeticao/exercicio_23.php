
<!--  http://localhost:41062/Lista_Exercicios_Alekao/exercicios/php/5_Lacos_de_Repeticao/ -->
  
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Exercicio 23 - Contagem Regressiva</title>
</head>
<body>
    <?php
       $cont = 10;
       while($cont > 0){
         echo " detonação em $cont segundos";
           $cont -= 1;
           sleep(1);
       }
       echo "<h1>ESTOUROU!! </h1>";

    ?>
</body>
</html>