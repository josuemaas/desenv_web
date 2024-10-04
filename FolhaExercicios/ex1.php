<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = [
        'num1' => $_POST['num1'],
        'num2' => $_POST['num2'],
        'num3' => $_POST['num3'],
    ];

    $sum = array_sum($numbers);
// percorre e valida os números
    switch (true) {
        case $numbers['num1'] > 10:
            $color = 'blue';
            break;
        case $numbers['num2'] < $numbers['num3']:
            $color = 'green';
            break;
        case $numbers['num3'] < $numbers['num1'] && $numbers['num3'] < $numbers['num2']:
            $color = 'red';
            break;
        default:
            $color = '';
    }

    echo "<p style='color:$color;'>A soma é: $sum</p>";
}
?>