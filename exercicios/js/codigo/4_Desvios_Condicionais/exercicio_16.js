//  Desvios Condicionais
//Exercicio: Múltiplo de Cinco
//Autor: Weverton

//=========================| Código |=========================//

const mensagem = document.getElementById("mensagem");
const inputNumero = document.getElementById("numero");
const verificarNumero = document.getElementById("verificarNumero");
verificarNumero.addEventListener('click', ()=>{
    if(!inputNumero.value){
        alert("Insira um Valor!");
        return;
    }
    let resultado = "não"
    if((inputNumero.value % 5) == 0){
        resultado = "";
    }
    mensagem.innerHTML = "<strong>" + inputNumero.value + "</strong> " + resultado + " é multiplo de cinco"
})

//============================================================//