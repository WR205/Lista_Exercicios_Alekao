//  Laços de Repetição
//Exercicio: Tabuada
//Autor: Gabriel Magina Coutinho

//=========================| Código |=========================//






const titleElement = document.querySelector('.title');
const tabuadaSectionElement = document.querySelector('.tabuada');
const numeroElement = document.querySelector('.numero');

function gerarTabuada(numero) {

    titleElement.textContent = '';
    tabuadaSectionElement.innerHTML = '';


    if (!isNaN(numero)) {
        titleElement.textContent = `Tabuada do ${numero}`;

        for (let i = 1; i <= 10; i++) {
            const resultado = numero * i;
            const linha = document.createElement('p');
            linha.textContent = `${numero} x ${i} = ${resultado}`;
            tabuadaSectionElement.appendChild(linha);
        }
    } else {
        titleElement.textContent = "Número inválido!";
    }
}


const botao = document.querySelector('.gerar');

botao.addEventListener('click', () => {
    const valor = parseInt(numeroElement.value);
    gerarTabuada(valor);
});




//============================================================//