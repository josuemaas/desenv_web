<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex07</title>
</head>
<body>

    <form method="POST">
        <label for="valorVista">Qual o valor à vista do carro (R$):</label>
        <input type="number" name="valorVista" id="valorVista" value="22500" required><br><br>

        <label for="valorParcela">Qual o valor de cada parcela (R$):</label>
        <input type="number" name="valorParcela" id="valorParcela" value="489.65" required><br><br>

        <label for="numParcelas">Qual o número de parcelas:</label>
        <input type="number" name="numParcelas" id="numParcelas" value="60" required><br><br>

        <button type="submit">Calcular Juros</button>
    </form>

    <?php
    // Função para calcular o total das parcelas
    function calcularTotalParcelas($valorParcela, $numParcelas) {
        // Calcula o total das parcelas
        return $valorParcela * $numParcelas;
    }

    function calcularJuros($valorVista, $totalParcelas) {
        return $totalParcelas - $valorVista;
    }

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Guarda as informações do formulário
        $valorVista = $_POST['valorVista'];
        $valorParcela = $_POST['valorParcela'];
        $numParcelas = $_POST['numParcelas'];

        // Cálculo do total das parcelas
        $totalParcelas = calcularTotalParcelas($valorParcela, $numParcelas);

        // Cálculo dos juros pagos
        $jurosPagos = calcularJuros($valorVista, $totalParcelas);

        
        echo "<p>O valor total pago no financiamento é R$ $totalParcelas.</p>";
        echo "<p>Os juros pagos por Mariazinha foram R$ $jurosPagos.</p>";
    }
    ?>

</body>
</html>