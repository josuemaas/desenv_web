<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex03</title>
</head>
<body>

    <form method="POST">
        <label for="sideLength">Informe o comprimento do lado do quadrado (em metros²):</label>
        <input type="number" name="sideLength" id="sideLength" required><br><br> 

        <button type="submit">Calcular Área</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sideLength = $_POST['sideLength'];

       
        $area = $sideLength ** 2;

        
        $result = "área do quadrado de lado $sideLength metros é $area metros quadrados.";
        echo "<p>$result</p>";
    }
    ?>

</body>
</html>