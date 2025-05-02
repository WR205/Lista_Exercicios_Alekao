//  Laços de Repetição
//Exercicio: Consistência
//Autor: Gabriel Magina Coutinho

//=========================| Código |=========================//



document.getElementById("btn").addEventListener("click", verifyIdade);

function verifyIdade() {
    let idade = document.getElementById("idade").value;
    let resultado = document.getElementById("resultado");

    if (idade >= 5 && idade <= 150) {
        resultado.innerHTML = "Idade válida: " + idade;
    } else {
        resultado.innerHTML = "Idade inválida, digite novamente";
    }

    document.getElementById("idade").value = "";
    document.getElementById("idade").focus();
}





//============================================================//