// JavaScript demonstration
function somar() {
    var input_primeiro = document.getElementById("primeiro")
   console.log(input_primeiro.value)
    var input_segundo_elemento = document.getElementById("segundo")
    console.log(parseFloat (input_segundo_elemento.value))
    var soma = parseFloat(input_primeiro.value) + parseFloat(input_segundo_elemento.value)
    console.log(soma)
    var input_resultado = document.getElementById("resultado")
    input_resultado.value = soma
    condicao_cor(soma, input_resultado)
  }
   

  function dividir(){
    var input_primeiro = document.getElementById("primeiro")
    console.log(input_primeiro.value)
    var input_segundo_elemento = document.getElementById("segundo")
    console.log(parseFloat(input_segundo_elemento.value))
    var dividir = parseFloat(input_primeiro.value) / parseFloat(input_segundo_elemento.value)
    console.log(dividir)
    var input_resultado = document.getElementById("resultado")
    input_resultado.value = dividir
    condicao_cor(dividir, input_resultado)
  }

  function multiplicar(){
    var input_primeiro = document.getElementById("primeiro")
    console.log(input_primeiro.value)
    var input_segundo_elemento = document.getElementById("segundo")
    console.log(parseFloat(input_segundo_elemento.value))
    var multiplicar = parseFloat(input_primeiro.value) * parseFloat(input_segundo_elemento.value)
    console.log(multiplicar)
    var input_resultado = document.getElementById("resultado")
    input_resultado.value = multiplicar
    condicao_cor(multiplicar, input_resultado)
  }
 
  function subtrair(){
    var input_primeiro = document.getElementById("primeiro")
    console.log(input_primeiro.value)
    var input_segundo_elemento = document.getElementById("segundo")
    console.log(parseFloat(input_segundo_elemento.value))
    var subtrair = parseFloat(input_primeiro.value) - parseFloat(input_segundo_elemento.value)
    console.log(subtrair)
    var input_resultado = document.getElementById("resultado")
    input_resultado.value = subtrair
    condicao_cor(subtrair, input_resultado)
  }
 
  function condicao_cor(operacao, input_resultado){
    if (operacao > 0){ 
      input_resultado.style.backgroundColor= "green";
    } else if (operacao < 0){
      input_resultado.style.backgroundColor= "red";
    }
    else {
      input_resultado.style.backgroundColor= "black";
      input_resultado.style.color = "white";
    }

  }
 