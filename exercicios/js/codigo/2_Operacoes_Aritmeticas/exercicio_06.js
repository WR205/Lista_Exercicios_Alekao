//  Operações Aritméticas
//Exercicio: Divisões Inteiras
//Autor: Pedro

//=========================| Código |=========================//
const read = require('readline-sync');
let n1 = read.questionInt('Digite um número: ');

metade_inteira = (n1 / 2);
resto = n1 % 3;

console.log(`A metade inteira de ${n1} é: ${metade_inteira}`);
console.log(`O resto da divisão de ${n1} por 3 é: ${resto}`);
//============================================================//