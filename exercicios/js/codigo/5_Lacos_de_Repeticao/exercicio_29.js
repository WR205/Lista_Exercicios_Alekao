//  Laços de Repetição
//Exercicio: Eleição
//Autor: Gabriel Magina Coutinho

//=========================| Código |=========================//


    let candidatoA = 0;
    let candidatoB = 0;
    let brancos = 0;
    let nulos = 0;
    let total = 0;
    let votacaoEncerrada = false;

    function votar() {
      if (votacaoEncerrada) {
        document.getElementById('mensagem').innerText = "Votação já encerrada.";
        return;
      }

      const voto = document.getElementById('voto').value;
      const msg = document.getElementById('mensagem');

      switch (voto) {
        case "1":
          candidatoA++;
          msg.innerText = "Voto computado para Candidato A.";
          break;
        case "2":
          candidatoB++;
          msg.innerText = "Voto computado para Candidato B.";
          break;
        case "3":
          brancos++;
          msg.innerText = "Voto em branco computado.";
          break;
        case "4":
          nulos++;
          msg.innerText = "Voto nulo computado.";
          break;
        case "0":
          encerrarVotacao();
          return;
        default:
          msg.innerText = "Selecione uma opção válida.";
      }

      document.getElementById('voto').value = ""; 
    }

    function encerrarVotacao() {
      votacaoEncerrada = true;
      total = candidatoA + candidatoB + brancos + nulos;

      let resultado = document.getElementById('resultado');

      if (total === 0) {
        resultado.innerHTML = "<p>Nenhum voto registrado.</p>";
        return;
      }

      let pct = (n) => ((n / total) * 100).toFixed(2) + "%";

      resultado.innerHTML = `
        <h2>Votação Encerrada</h2>
        <p>Total de votos: ${total}</p>
        <ul>
          <li>Candidato A: ${candidatoA} voto(s) - ${pct(candidatoA)}</li>
          <li>Candidato B: ${candidatoB} voto(s) - ${pct(candidatoB)}</li>
          <li>Brancos: ${brancos} voto(s) - ${pct(brancos)}</li>
          <li>Nulos: ${nulos} voto(s) - ${pct(nulos)}</li>
        </ul>
      `;

      document.getElementById('mensagem').innerText = "";
    }

//============================================================//