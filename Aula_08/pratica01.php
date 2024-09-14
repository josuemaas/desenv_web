<?php
  
  define('nome','Josué');
  define('sobrenome',' Fuchter Maas');
  $nomecompleto = nome.''.sobrenome;

  echo "Meu nome completo é $nomecompleto <p>";
  
$salario1 = 1000;
$salario2 = 2000;
$salario1= $salario1 + $salario2;

$salario2++;
$salario1 *=1.1;

echo "Salário1: $salario1 <br> Salário2: $salario2";
for ($i = 0; $i < 100; $i++) {
    
     $salario1++; 

     if ($i == 49){
        break;
     }

    }

    if ($salario1 < $salario2) {

        echo "<p>Salaário 1 é menor";
     } else if ($salario2 > $salario1){
        echo "<p>salário 2 é maior";
     } else {
        echo "<p>Os salários são iguais";
     }

echo "<br>";

$idade = array("Josué"=>"35", "Maria"=>"37", "Matheus"=>"43");
foreach($idade as $chave => $valor) {
    echo "Chave=" . $chave . ", Valor=" . $valor;
echo "<br>";
}

$disciplinas = array (
    "Programação Web",
    "Administração de Sistema",
    "Engenharia de Software",
    "Estrutura de Dados",
    "Banco de Dados",
);

$professores= array (
    "Cleber",
    "Sandro",
    "Julian",
    "Bastos",
    "Marco",
);
for ($i = 0; $i < 5; $i++) {
    echo "Disciplina $disciplinas[$i], professores $professores[$i] <br>";
}

echo "<p>"
?>

<!DOCTYPE html>
<html>
<head>
    <title>tabela aula 08</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #ADD8E6;
            color: white;
        }
    </style>
</head>
<body>

<?php

$disciplinas = [
    ['Disciplina' => 'Matemática', 'Faltas' => 5, 'Média' => 8.5],
    ['Disciplina' => 'Português', 'Faltas' => 2, 'Média' => 9],
    ['Disciplina' => 'Geografia', 'Faltas' => 10, 'Média' => 6],
    ['Disciplina' => 'Educação Física', 'Faltas' => 2, 'Média' => 8],
];


echo "<table>";
echo "<tr><th>Disciplina</th><th>Faltas</th><th>Média</th></tr>";


foreach ($disciplinas as $disciplina) {
    echo "<tr>";
    echo "<td>" . $disciplina['Disciplina'] . "</td>";
    echo "<td>" . $disciplina['Faltas'] . "</td>";
    echo "<td>" . $disciplina['Média'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
