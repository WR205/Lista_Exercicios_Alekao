//  Algoritmos Sequencias
//Exercicio: Troca Variáveis
//Autor: Pedro

//=========================| Código |=========================//
function trocaVariaveis() {
    const read = require('readline-sync');
    let a = read.questionInt('Digite o valor de a: ');
    let b = read.questionInt('Digite o valor de b: ');

    console.log(`Antes da troca: a = ${a}, b = ${b}`);

    // Troca os valores
    let temp = a;
    a = b;
    b = temp;

    console.log(`Depois da troca: a = ${a}, b = ${b}`);
}
trocaVariaveis();
//============================================================//