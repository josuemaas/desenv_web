
function somaMediaHorizontal() {
    var tabela = document.getElementById("notasTabela")
    var tamanhoTd = tabela.rows[1].querySelectorAll("td").length
    if (tamanhoTd <= 4){
        var listaMediaNotas = ["Media das Notas"]
        var listaSomaAlunos = ["Soma das Notas"]
        var tabela = document.getElementById("notasTabela");
        var numeroLinhasNotas = tabela.rows.length
        for (var i = 1; i <= numeroLinhasNotas - 1; i++){
            var soma = 0
            var media = 0
            var numeroColunas = tabela.rows[i].querySelectorAll("td")
            for ( var j = 1; j <= numeroColunas.length - 1; j++){
                var nota = parseFloat(numeroColunas[j].innerHTML)
                soma = nota + soma
                media = soma/(numeroLinhasNotas-1)
            }
            listaSomaAlunos.push(soma)
            listaMediaNotas.push(media)    
    
        }

        for (var k = 0; k <= listaSomaAlunos.length-1; k++){
            const novaCelula = document.createElement('td');
            novaCelula.textContent = listaSomaAlunos[k];
            tabela.rows[k].appendChild(novaCelula)
        }
    
        for (var k = 0; k <= listaMediaNotas.length-1; k++){
            const novaCelula = document.createElement('td');
            novaCelula.textContent = listaMediaNotas[k];
            tabela.rows[k].appendChild(novaCelula)
        }
    }else { 
        alert("Seu resultado da coluna totalizadora já esta em tela!")
        return;
    }
}


function somaMediaVertical() {
    var listaMediaNotas = ["Media das Notas"]
    var listaSomaAlunos = ["Soma das Notas"]
    var tabela = document.getElementById("notasTabela")
    var body = document.querySelector('tbody')
    var numeroTotalLinhas = body.querySelectorAll('tr')
    var numeroColunasTabela = tabela.rows[1].querySelectorAll("td")
    if (numeroTotalLinhas.length <= 7 ){

        for (var j = 1; j <= numeroColunasTabela.length - 1 ; j++) {  
            var soma = 0
            var media = 0
    
            for (var i = 1; i <= tabela.rows.length - 1; i++) {
                var todasColunasTabela = tabela.rows[i].querySelectorAll("td")
                var nota = parseFloat(todasColunasTabela[j].innerHTML)
                soma = nota + soma
                media = soma/(tabela.rows.length-1)
            }
    
            listaSomaAlunos.push(soma)
            listaMediaNotas.push(media)  
        
        }
    
        // Cria um novo elemento de linha
        const novaLinhaSoma = document.createElement('tr');
    
        for (var k = 0; k <= listaSomaAlunos.length-1; k++){
            // Cria novas células (td) para a nova linha
            const novaCelula = document.createElement('td');
            novaCelula.textContent = listaSomaAlunos[k];  // Texto da primeira célula
            novaLinhaSoma.appendChild(novaCelula);
            body.appendChild(novaLinhaSoma);
        }
        
        // Cria um novo elemento de linha
        const novaLinhaMedia = document.createElement('tr');
    
        for (var k = 0; k <= listaMediaNotas.length-1; k++){
            // Cria novas células (td) para a nova linha
            const novaCelula = document.createElement('td');
            novaCelula.textContent = listaMediaNotas[k];  // Texto da primeira célula
            novaLinhaMedia.appendChild(novaCelula);
            body.appendChild(novaLinhaMedia);
        }
    } else {
        alert("Seu resultado da linha totalizadora já esta em tela!")
        return;
    }
   
}
