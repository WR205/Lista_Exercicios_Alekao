//  Desvios Condicionais
//Exercicio: Escolha-Caso
//Autor: Weverton

//=========================| Código |=========================//

const resposta = document.getElementById('resposta');
const resultado = document.getElementById('resultado');
resposta.addEventListener("keyup", (event)=>{
    if(event.key == "Enter"){
        executeResultado();
    }
})


function executeResultado(){
    switch(resposta.value){
        case "1":
            resultado.innerHTML = `<p>Você é Bonito</p>`
        break;
        case "2":
            resultado.innerHTML = `<p>Você é Feio</p>`
        break;
        case "3":
            resultado.innerHTML = `<p>Tchau!</p>`
        break;
        default:
            resultado.innerHTML = `<p>Opção Inválida</p>`
    }
}

//============================================================//