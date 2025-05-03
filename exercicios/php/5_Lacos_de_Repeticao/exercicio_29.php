<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 29 - Simulação de Eleição</title>
</head>
<body>
    <h1>Simulação de Eleição</h1>
    <form method="post">
        <label for="voto">Escolha seu candidato:</label><br>
        <select name="voto" id="voto" required>
            <option value="">-- Selecione --</option>
            <option value="1">1 - Candidato A</option>
            <option value="2">2 - Candidato B</option>
            <option value="3">3 - Branco</option>
            <option value="4">Outro (voto nulo)</option>
            <option value="0">Encerrar votação</option>
        </select>
        <br><br>
        <button type="submit">Votar</button>
    </form>

    <?php
    // Inicia sessão para manter os votos entre as requisições
    session_start();

    // Inicializa contadores se ainda não existirem
    if (!isset($_SESSION['candidato_a'])) $_SESSION['candidato_a'] = 0;
    if (!isset($_SESSION['candidato_b'])) $_SESSION['candidato_b'] = 0;
    if (!isset($_SESSION['brancos'])) $_SESSION['brancos'] = 0;
    if (!isset($_SESSION['nulos'])) $_SESSION['nulos'] = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $voto = (int)$_POST["voto"];

        switch ($voto) {
            case 0:
                // Exibe resultado e encerra a sessão
                $total = $_SESSION['candidato_a'] + $_SESSION['candidato_b'] + $_SESSION['brancos'] + $_SESSION['nulos'];

                if ($total > 0) {
                    $a = $_SESSION['candidato_a'];
                    $b = $_SESSION['candidato_b'];
                    $brancos = $_SESSION['brancos'];
                    $nulos = $_SESSION['nulos'];

                    $pa = ($a * 100) / $total;
                    $pb = ($b * 100) / $total;
                    $pbk = ($brancos * 100) / $total;
                    $pn = ($nulos * 100) / $total;

                    echo "<h2>Votação Encerrada!</h2>";
                    echo "<p>Total de votos: $total</p>";
                    echo "<ul>";
                    echo "<li>Candidato A: $a voto(s) - " . number_format($pa, 2) . "%</li>";
                    echo "<li>Candidato B: $b voto(s) - " . number_format($pb, 2) . "%</li>";
                    echo "<li>Brancos: $brancos voto(s) - " . number_format($pbk, 2) . "%</li>";
                    echo "<li>Nulos: $nulos voto(s) - " . number_format($pn, 2) . "%</li>";
                    echo "</ul>";
                } else {
                    echo "<p>Nenhum voto foi registrado.</p>";
                }

                // Limpa dados da sessão
                session_destroy();
                exit;
                break;

            case 1:
                $_SESSION['candidato_a']++;
                echo "<p>Voto computado para Candidato A.</p>";
                break;

            case 2:
                $_SESSION['candidato_b']++;
                echo "<p>Voto computado para Candidato B.</p>";
                break;

            case 3:
                $_SESSION['brancos']++;
                echo "<p>Voto em branco computado.</p>";
                break;

            default:
                $_SESSION['nulos']++;
                echo "<p>Voto nulo computado.</p>";
        }
    }
    ?>
</body>
</html>
