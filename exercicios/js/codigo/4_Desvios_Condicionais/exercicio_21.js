//  Desvios Condicionais
//Exercicio: Mini Calculadora
//Autor: Weverton

//=========================| Código |=========================//

const inputNumero = document.getElementById("numero");
const resultadoElement = document.getElementById("resultado");
const equacaoElement = document.getElementById("equacao");

inputNumero.addEventListener('keyup', (event)=>{
    if(event.key == "+" || event.key == "-" || event.key == "*" || event.key == "/"){
        calculo(event.key);
    }
})

let valores = [];
let equacao;

function calculo(operador){
    if(!inputNumero.value){
        alert("Insira um Valor!");
        return;
    }
    resultado()
    equacaoElement.textContent = `${operador}`;
    equacao = operador;
}
function soma(){
    valores[0] = valores[0] + valores[1]; 
}
function subtracao(){
    valores[0] = valores[0] - valores[1];  
}
function multiplicacao(){
    valores[0] = valores[0] * valores[1]; 
}
function divisao(){
    valores[0] = valores[0] / valores[1];
}

function resultado(){
    if(!valores[0]){
        valores[0] = Number(inputNumero.value);
    } else if(equacao){
        valores[1] = Number(inputNumero.value);
    }
    inputNumero.value = "";
    
    if(valores[1]){
        switch(equacao){
            case "+":
                soma();
            break;
            case "-":
                subtracao();
            break;
            case "*":
                multiplicacao();
            break;
            case "/":
                divisao();
        }
        valores.pop;
        equacaoElement.textContent = "";
        resultadoElement.textContent = valores[0];
    }
}

function limpar(){
    valores = [];
    equacao = "";
    equacaoElement.textContent = "";
    resultadoElement.textContent = "";
}

//============================================================//