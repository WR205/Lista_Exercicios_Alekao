//  Desvios Condicionais
//Exercicio: Tipo de Triângulo
//Autor: Weverton

//=========================| Código |=========================//

const arestaElement0 = document.getElementById("aresta0");
const arestaElement1 = document.getElementById("aresta1");
const arestaElement2 = document.getElementById("aresta2");
const mensagem = document.getElementById("mensagem");

function ordenarMaiorMenor(arrayFornecido){
    let controle;
    const arrayTamanho = arrayFornecido.length;
    for(let i = 1; i < arrayTamanho; i++){
        for(let j = i; j >= 0 && arrayFornecido[j] > arrayFornecido[j-1]; j--){
            controle = arrayFornecido[j-1];
            arrayFornecido[j-1] = arrayFornecido[j]
            arrayFornecido[j] = controle;
        }
    }
}

function verificarTriangulo(){
    if(!arestaElement0.value || !arestaElement1.value || !arestaElement2.value){
        alert("É necessário que as três arestas sejam informadas!")
        return
    }
    const aresta = [Number(arestaElement0.value), Number(arestaElement1.value), Number(arestaElement2.value)];
    ordenarMaiorMenor(aresta);
    let resp;
    if((aresta[1] + aresta[2]) <= aresta[0]){
        resp = "não existe!";
    } else if(aresta[0] == aresta[1] && aresta[0] == aresta[2]){
        resp = "é Equilátero";
    } else if(aresta[0] == aresta[1] || aresta[0] == aresta[2] || aresta[1] == aresta[2]){
        resp = "é Isósceles";
    } else {
        resp = "é Escaleno";
    }
    mensagem.textContent = "Esse triangulo " + resp;
}

//============================================================//