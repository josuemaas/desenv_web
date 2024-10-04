<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>
<body>

    <form method="POST">
        <label for="numero">Escreva número:</label>
        <input type="number" name="numero" id="numero" required><br><br>

        <button type="submit">Analisar</button>
    </form>

    <?php
    // guarda a informação do número 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputValue = $_POST['numero'];

        // trata o número pra ver se é divisível por 2 ou não 
        if ($inputValue % 2 == 0) {
            $result = "Valor divisível por 2";
        } else {
            $result = "O valor não é divisível por 2";
        }

        echo "<p>$result</p>";
    }
    ?>

</body>
</html>