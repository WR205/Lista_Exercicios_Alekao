//  Desvios Condicionais
//Exercicio: Média Final
//Autor: Weverton

//=========================| Código |=========================//

const notas = [];

const inputNota = document.getElementById("nota");
inputNota.addEventListener("keyup", (event)=>{
    if(event.key == "Enter"){
        adicionarNota();
    }
})

function adicionarNota(){
    if(!inputNota.value){
        alert("Insira um Valor!");
        return;
    }
    if(inputNota.value < 0 || 10 < inputNota.value){
        alert("Só é aceito notas de 0 a 10!");
        return;
    }
    notasTamanho = notas.length;
    notas.push(inputNota.value);
    //"<p>Nota [Indice]: notas[ultimoValor]</p>(hover:<button>Deletar Elemento</button>)"
    const novaNota = document.createElement("p");
    novaNota.textContent = "Nota " + (notasTamanho + 1) + ": " + notas[notasTamanho];
    document.body.appendChild(novaNota);
    inputNota.value = "";
}

//============================================================//