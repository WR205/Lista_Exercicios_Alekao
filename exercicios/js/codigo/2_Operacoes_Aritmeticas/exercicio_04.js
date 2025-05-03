//  Operações Aritméticas
//Exercicio: Operações Simples
//Autor: Pedro

//=========================| Código |=========================//
function inicio()
{
    const read = require('readline-sync');
    let n1 = read.questionInt('Digite o primeiro número: ');
    let n2 = read.questionInt('Digite o segundo número: ');

    let soma = n1 + n2;
    let subtracao = n1 - n2;
    let multiplicacao = n1 * n2;
    let divisao = n1 / n2;

    console.log(`A soma é: ${soma}`);
    console.log(`A subtração é: ${subtracao}`);
    console.log(`A multiplicação é: ${multiplicacao}`);
    console.log(`A divisão é: ${divisao}`);
}
inicio();
//============================================================//