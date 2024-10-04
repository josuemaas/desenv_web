<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árvore Recursiva</title>
</head>
<body>

    <h1>ex10</h1>

    <?php
    $arvore = [
        'Raiz' => [                 
            'Nó1' => [            
                'Nó1.1' => [],    
                'Nó1.2' => []     
            ],
            'Nó2' => [            
                'Nó2.1' => [      
                    'Nó2.1.1' => []
                ],
                'Nó2.2' => []     
            ]
        ]
    ];
    function exibirArvore($nos) {
        echo "<ul>";
        
        
        foreach ($nos as $chave => $filho) {
            echo "<li>" . $chave . "</li>";
            
            // Se esse nó tiver filhos (se o array $filho não for vazio), chama a função novamente
            if (!empty($filho)) {
                exibirArvore($filho);  // Aonde a recursão acontece, chamando a função para exibir os filhos
            }
        }
        echo "</ul>";
    }

    // Chama função para exibir a árvore completa, começando pela raiz que foi denominada ($arvore)
    exibirArvore($arvore);
    ?>

</body>
</html>