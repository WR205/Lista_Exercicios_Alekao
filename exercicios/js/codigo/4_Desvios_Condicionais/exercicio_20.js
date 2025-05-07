//  Desvios Condicionais
//Exercicio: Tipo de Triângulo
//Autor: Weverton

//=========================| Código |=========================//

const arestaElement0 = document.getElementById("aresta0");
const arestaElement1 = document.getElementById("aresta1");
const arestaElement2 = document.getElementById("aresta2");
const mensagem = document.getElementById("mensagem");

function verificarTriangulo(){
    const aresta = [arestaElement0.value, arestaElement1.value, arestaElement2.value];
    let controle;
    if(aresta[0] < aresta[1]){
        controle = aresta[0];
        aresta[0] = aresta[1]
        aresta[1] = controle; 
    }
    if(aresta[0] < aresta[2]){
        controle = aresta[0];
        aresta[0] = aresta[2]
        aresta[2] = controle; 
    }
    if(aresta[1] < aresta[2]){
        controle = aresta[1];
        aresta[1] = aresta[2]
        aresta[2] = controle; 
    }
    if(!arestaA.value || !arestaB.value || !arestaC.value){
        alert("É necessário que as três arestas sejam informadas!")
        return
    }
    if((arestaA.value + arestaB.value) < arestaC.value)
}

//============================================================//