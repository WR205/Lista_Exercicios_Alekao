//  Laços de Repetição
//Exercicio: Contagem Regressiva
//Autor: Gabriel Magina Coutinho

//=========================| Código |=========================//

const contadorElement = document.querySelector('.contador');
const botaoElement = document.querySelector('.detonacao');
const explosaoElement = document.querySelector('.explosao');
function sleep(seconds) {
    return new Promise(resolve => {
        setTimeout(resolve, seconds * 1000);  
    });
}



async function detonacao(){
    botaoElement.style.display = "none";
    let cont = 10;
    contadorElement.textContent = cont;
    while(cont > 0){
        cont -= 1;
        contadorElement.textContent = cont;
        sleep(1);
        await sleep(1); 
        
    }
    explodir();
}

async function explodir(){
    contadorElement.style.display = "none";
    explosaoElement.style.display = "flex"
}











//============================================================//