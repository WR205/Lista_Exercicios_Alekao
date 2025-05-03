//  Laços de Repetição
//Exercicio: Média de Dez Números
//Autor: Gabriel Magina Coutinho

//=========================| Código |=========================//


const container = document.getElementById("inputs-container");
for (let i = 1; i <= 10; i++) {
    const input = document.createElement("input");
    input.type = "number";
    input.name = `numero${i}`;
    input.placeholder = `Digite o ${i}º número`;
    input.required = true;
    container.appendChild(input);
    container.appendChild(document.createElement("br"));
}

document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault();

    let soma = 0;
    for (let i = 1; i <= 10; i++) {
        const valor = parseFloat(document.querySelector(`input[name=numero${i}]`).value);
        soma += valor;
    }

    const media = soma / 10;
    document.getElementById("resultado").textContent = `A média dos números é: ${media.toFixed(2)}`;
});

//============================================================//