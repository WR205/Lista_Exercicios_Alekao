//  Desvios Condicionais
//Exercicio: Média Final
//Autor: Weverton

//=========================| Código |=========================//

//Objetivo: fazer um calculo de Média dinamico, com adição e deleção de notas dinamicamente
const notas = [];

const listaNotasElemento = document.getElementById("notas");
const mediaElemento = document.getElementById("media");

const inputNota = document.getElementById("nota");
inputNota.addEventListener("keyup", (event)=>{
    if(event.key == "Enter"){
        adicionarNota();
    }
})

function calcularMedia(){
    let media = 0;
    const tamanho = notas.length;
    notas.forEach(element => {
        media += element;
    });
    media = media/tamanho;
    if(isNaN(media)){
        media = 0;
    }
    mediaElemento.textContent = media.toFixed(1);
}

function adicionarNota(){
    if(!inputNota.value){
        alert("Insira um Valor!");
        return;
    }
    if(inputNota.value < 0 || 10 < inputNota.value){
        alert("Só é aceito notas de 0 a 10!");
        return;
    }
    let ultimaPosicao = notas.length;
    notas[ultimaPosicao] = Number(inputNota.value);

    const novaNota = document.createElement("p");
    const paiNota = document.createElement("li");

    novaNota.innerHTML = "Nota <span class='indice'>" + (ultimaPosicao + 1) + "</span>: " + notas[ultimaPosicao];
    paiNota.dataset.indice = ultimaPosicao;
    paiNota.appendChild(novaNota);
    listaNotasElemento.appendChild(paiNota);

    const deletar = document.createElement("button");
    deletar.textContent = "Deletar";
    deletar.setAttribute('onclick', 'deletar(event)')
    paiNota.insertBefore(deletar, novaNota.nextSibling);
    
    inputNota.value = "";

    calcularMedia();
}

function deletar(event){
    notas.splice(event.target.parentNode.dataset.indice, 1);
    event.target.parentNode.remove();
    const lista = listaNotasElemento.querySelectorAll("li")
    lista.forEach((element, indice) => {
        element.dataset.indice = indice;
        element.querySelector(".indice").textContent = indice + 1;
    });
    calcularMedia();
}

//============================================================//