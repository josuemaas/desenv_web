<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex06</title>
</head>
<body>

    <form method="POST">
        <h3>Digite o preço e a quantidade (em Kg) dos itens comprados:</h3>

        <label for="precoMaca">Preço da Maçã (por Kg):</label>
        <input type="number" name="precoMaca" id="precoMaca" required><br><br>
        <label for="quantidadeMaca">Quantidade de Maçã (Kg):</label>
        <input type="number" name="quantidadeMaca" id="quantidadeMaca" required><br><br>

        <label for="precoMelancia">Preço da Melancia (por Kg):</label>
        <input type="number" name="precoMelancia" id="precoMelancia" required><br><br>
        <label for="quantidadeMelancia">Quantidade de Melancia (Kg):</label>
        <input type="number" name="quantidadeMelancia" id="quantidadeMelancia" required><br><br>

        <label for="precoLaranja">Preço da Laranja (por Kg):</label>
        <input type="number" name="precoLaranja" id="precoLaranja" required><br><br>
        <label for="quantidadeLaranja">Quantidade de Laranja (Kg):</label>
        <input type="number" name="quantidadeLaranja" id="quantidadeLaranja" required><br><br>

        <label for="precoRepolho">Preço do Repolho (por Kg):</label>
        <input type="number" name="precoRepolho" id="precoRepolho" required><br><br>
        <label for="quantidadeRepolho">Quantidade de Repolho (Kg):</label>
        <input type="number" name="quantidadeRepolho" id="quantidadeRepolho" required><br><br>

        <label for="precoCenoura">Preço da Cenoura (por Kg):</label>
        <input type="number" name="precoCenoura" id="precoCenoura" required><br><br>
        <label for="quantidadeCenoura">Quantidade de Cenoura (Kg):</label>
        <input type="number" name="quantidadeCenoura" id="quantidadeCenoura" required><br><br>

        <label for="precoBatatinha">Preço da Batatinha (por Kg):</label>
        <input type="number" name="precoBatatinha" id="precoBatatinha" required><br><br>
        <label for="quantidadeBatatinha">Quantidade de Batatinha (Kg):</label>
        <input type="number" name="quantidadeBatatinha" id="quantidadeBatatinha" required><br><br>

        <button type="submit">Calcular Total</button>
    </form>

    <?php
    // Função para calcular o valor total de um produto
    function calcularValor($preco, $quantidade) {
        // Calcula o valor total do produto
        return $preco * $quantidade;
    }

    // Função para verificar se o dinheiro disponível é suficiente
    function verificarDinheiro($totalCompra, $dinheiroDisponivel) {
        // Verifica se o dinheiro será suficiente
        if ($totalCompra > $dinheiroDisponivel) {
            $valorExcedente = $totalCompra - $dinheiroDisponivel;
            return "<p style='color:red;'>Você excedeu o valor em R$ $valorExcedente. Joãozinho precisa de mais dinheiro!</p>";
        } elseif ($totalCompra < $dinheiroDisponivel) {
            $valorSobrando = $dinheiroDisponivel - $totalCompra;
            return "<p style='color:blue;'>Joãozinho ainda pode gastar R$ $valorSobrando.</p>";
        } else {
            return "<p style='color:green;'>Joãozinho gastou exatamente R$ 50,00. Saldo esgotado!</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD "] == "POST") {
        // Preços e quantidades dos produtos
        $precoMaca = $_POST['precoMaca'];
        $quantidadeMaca = $_POST['quantidadeMaca'];
        $precoMelancia = $_POST['precoMelancia'];
        $quantidadeMelancia = $_POST['quantidadeMelancia'];
        $precoLaranja = $_POST['precoLaranja'];
        $quantidadeLaranja = $_POST['quantidadeLaranja'];
        $precoRepolho = $_POST['precoRepolho'];
        $quantidadeRepolho = $_POST['quantidadeRepolho'];
        $precoCenoura = $_POST['precoCenoura'];
        $quantidadeCenoura = $_POST['quantidadeCenoura'];
        $precoBatatinha = $_POST['precoBatatinha'];
        $quantidadeBatatinha = $_POST['quantidadeBatatinha'];

        // Cálculo dos valores totais de cada produto
        $totalMaca = calcularValor($precoMaca, $quantidadeMaca);
        $totalMelancia = calcularValor($precoMelancia, $quantidadeMelancia);
        $totalLaranja = calcularValor($precoLaranja, $quantidadeLaranja);
        $totalRepolho = calcularValor($precoRepolho, $quantidadeRepolho);
        $totalCenoura = calcularValor($precoCenoura, $quantidadeCenoura);
        $totalBatatinha = calcularValor($precoBatatinha, $quantidadeBatatinha);

        
        $totalCompra = $totalMaca + $totalMelancia + $totalLaranja + $totalRepolho + $totalCenoura + $totalBatatinha;

        // Verifica se o dinheiro será suficiente
        $dinheiroDisponivel = 50.00;
        echo verificarDinheiro($totalCompra, $dinheiroDisponivel);
    }
    ?>

</body>
</html>