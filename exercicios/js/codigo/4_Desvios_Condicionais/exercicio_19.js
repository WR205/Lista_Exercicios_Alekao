//  Desvios Condicionais
//Exercicio: Numero Inteiro
//Autor: Weverton

//=========================| Código |=========================//


const mensagem = document.getElementById("mensagem")
const inputNumero = document.getElementById("numero");
inputNumero.addEventListener("keyup", (event)=>{
    if(event.key == "Enter"){
        verificarNumero();
    }
})

function verificarNumero(){
    if(!inputNumero.value){
        alert("Insira um Valor!");
        return;
    }

    strngNumTamanho = inputNumero.value.length;
    for(let i = strngNumTamanho; i >= 0; i--){
        if(inputNumero.value[i] == "." || inputNumero.value[i] == ","){
            mensagem.style.fontSize = "50px"
            mensagem.innerHTML = "Isso não é um número inteiro!<br>";
            setTimeout(() => {
                mensagem.innerHTML += "Calma ai que eu já te ajudo nisso";
            }, 1500);
            setTimeout(() => {
                window.location.href = "https://www.todamateria.com.br/numeros-inteiros/";
            }, 3000);
            return;
        }
    }
    const numero = Number(inputNumero.value);
    let resp;
    if(numero > 0){
        resp = "positivo"
    } else if (numero < 0){
        resp = "negativo"
    } else {
        resp = "zero"
    }
    mensagem.textContent = "O Número informado é " + resp
}

//============================================================//