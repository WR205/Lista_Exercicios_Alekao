//  Laços de Repetição
//Exercicio: Soma de Um a X
//Autor: Gabriel Magina Coutinho

//=========================| Código |=========================//


function calcularSoma() {
    const input = document.getElementById("numero");
    const resultado = document.getElementById("resultado");

    let numero = parseInt(input.value);

    if (isNaN(numero) || numero < 1) {
        resultado.textContent = "Por favor, digite um número inteiro positivo maior que zero.";
        return;
    }

    let soma = 0;

    for (let i = 1; i <= numero; i++) {
        soma += i;
    }

    resultado.textContent = `A soma de 1 até ${numero} é: ${soma}`;
}


//============================================================//