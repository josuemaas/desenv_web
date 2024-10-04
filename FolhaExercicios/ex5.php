<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <form method="POST">
        <label for="base">Comprimento da base do triângulo (em metros):</label>
        <input type="number" name="base" id="base" required><br><br>

        <label for="altura">Altura do triângulo (em metros):</label>
        <input type="number" name="altura" id="altura" required><br><br>

        <button type="submit">Calcular Área</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];

        $area = ($base * $altura) / 2;

        echo "<p>A área do triângulo é $area metros quadrados.</p>";
    }
    ?>

</body>
</html>