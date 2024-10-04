<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex08</title>
</head>
<body>

    <form method="POST" action="">
        <label for="valorMoto">Valor da moto:</label><br>
        <input type="number" id="valorMoto" name="valorMoto" value="8654" required><br><br>
        <input type="submit" value="Calcular Parcelas">
    </form>

    <?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Pega o valor do capital
        $valorMoto = $_POST['valorMoto'];

        function calcularParcelas($valorMoto, $taxaInicial) {
        
            for ($parcelas = 24; $parcelas <= 60; $parcelas += 12) {
                $taxa = $taxaInicial + (0.005 * (($parcelas - 24) / 12)); 
                $montante = $valorMoto * (1 + ($taxa * $parcelas / 100));
                $valorParcela = $montante / $parcelas;

               
                echo "<p>Parcelamento em $parcelas vezes (taxa de " . ($taxa * 100) . "%): R$ " 
                    . number_format($valorParcela, 2, ',', '.') . " por mês.</p>";
            }
        }

        // Chama a função para exibir os resultados
        calcularParcelas($valorMoto, 0.015); 
    }
    ?>

</body>
</html>