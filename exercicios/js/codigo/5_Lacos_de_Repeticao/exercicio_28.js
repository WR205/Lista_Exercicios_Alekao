//  Laços de Repetição
//Exercicio: Fatorial
//Autor: Gabriel Magina Coutinho

//=========================| Código |=========================//
function calcularFatorial() {
    const input = document.getElementById("numero");
    const resultado = document.getElementById("resultado");

    let numero = parseInt(input.value);

    if (isNaN(numero) || numero < 0) {
        resultado.textContent = "Por favor, digite um número inteiro não-negativo.";
        return;
    }

    let atual = 1;
    let fatorial = 1;
    let passos = "1";

    while (atual <= numero) {
        fatorial *= atual;
        if (atual > 1) {
            passos += ` × ${atual}`;
        }
        atual++;
    }

    resultado.innerHTML = `O fatorial de ${numero} é: ${fatorial} <br> <small>(${numero}! = ${passos})</small>`;
}


//============================================================//