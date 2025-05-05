//  Desvios Condicionais
//Exercicio: Números Iguais
//Autor: Weverton

//=========================| Código |=========================//

function randomNumber(max = 6){
    return Math.floor(Math.random()*(max+1));
}

const escopo = 6;

const mensagem = document.getElementById("mensagem");
const mensagemNumeroGerado = document.getElementById("numeroGerado");
const inputNumero = document.getElementById("numero");
const verificarNumero = document.getElementById("verificarNumero");
verificarNumero.addEventListener('click', ()=>{
    if(!inputNumero.value){
        alert("Insira um Valor!");
        return;
    }
    if(escopo < inputNumero.value || inputNumero.value < 0){
        alert("Valor informado está fora do escopo!");
        return;
    }
    const numeroGerado = randomNumber(escopo);
    mensagemNumeroGerado.innerHTML = "Número Gerado: " + numeroGerado;
    let resultado = "diferentes";
    if(numeroGerado == inputNumero.value){
        resultado = "iguais";
    }
    mensagem.innerHTML = "Os números são " + resultado;
})

//============================================================//