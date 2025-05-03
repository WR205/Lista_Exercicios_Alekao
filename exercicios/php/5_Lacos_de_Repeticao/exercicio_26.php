<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício - Média de 10 Números</title>
</head>
<body>

    <form method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<input type="number" name="numero' . $i . '" placeholder="Digite o ' . $i . 'º número" step="any" required><br>';
        }
        ?>
        <button type="submit">Calcular Média</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $soma = 0.0;

        for ($i = 1; $i <= 10; $i++) {
            $campo = 'numero' . $i;
            if (isset($_POST[$campo])) {
                $numero = (float) $_POST[$campo];
                $soma += $numero;
            }
        }

        $media = $soma / 10;
        echo "<h2>A média dos números é: " . number_format($media, 2, ',', '.') . "</h2>";
    }
    ?>

</body>
</html>
