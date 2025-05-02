//  Entrada e Saída
//Exercicio: Mostrar Texto na Tela
//Autor: Weverton

//=========================| Código |=========================//

const campoMensagem = document.getElementById("mensagem");
const inputTexto = document.getElementById("texto");
const mostrarTexto = document.getElementById("mostrarTexto");
mostrarTexto.addEventListener("click", ()=>{
    if(inputTexto.value == ""){
        alert("Insira um Valor!");
        return;
    }
    campoMensagem.innerHTML = `<p>${inputTexto.value}</p>`;
    inputTexto.value = "";
});

//============================================================//