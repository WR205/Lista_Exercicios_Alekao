//  Operações Aritméticas
//Exercicio: Prioridades
//Autor: Pedro

//=========================| Código |=========================//
// Programa que demonstra precedência de operadores em JavaScript

function inicio() {
    let resultado;

    resultado = 5.0 + 4.0 * 2.0;
    console.log("Operação: 5 + 4 * 2 = " + resultado);


    resultado = (5.0 + 4.0) * 2.0;
    console.log("Operação: (5 + 4) * 2 = " + resultado);

 
    resultado = 1.0 + 2.0 / 3.0 * 4.0;
    console.log("Operação: 1 + 2 / 3 * 4 = " + resultado);

   
    resultado = (1.0 + 2.0) / (3.0 * 4.0);
    console.log("Operação: (1 + 2) / (3 * 4) = " + resultado);
}

inicio();

//============================================================//