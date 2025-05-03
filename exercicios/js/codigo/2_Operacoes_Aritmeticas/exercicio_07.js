//  Operações Aritméticas
//Exercicio: Potencia e Raiz
//Autor: Pedro

//=========================| Código |=========================//
const read = require('readline-sync');

let valor = read.questionFloat('Digite um valor: ');

let potencia = Math.pow(valor, 3);
let raiz_quadrada = Math.sqrt(valor);

console.log(`O número ao cubo é: ${potencia}`);
console.log(`A raiz quadrada do número é: ${raiz_quadrada}`);

//============================================================//
