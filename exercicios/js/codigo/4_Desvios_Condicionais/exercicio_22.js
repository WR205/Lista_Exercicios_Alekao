//  Desvios Condicionais
//Exercicio: Escolha-Caso
//Autor: Weverton

//=========================| Código |=========================//

const resposta = document.getElementById('resposta');
const resultado = document.getElementById('resultado');
resposta.addEventListener("keyup", (event)=>{
    if(event.key == "Enter"){
        executeResultado();
    }
})


function executeResultado(){
    switch(resposta.value){
        case "1":
            resultado.innerHTML = `<p>Você decide tomar atitude, e você fala um 'oi'</p>
            <p>ela para, te responde, e vocês dois batem mo papo, vocês pegam contato um do outro</p>
            <p>vocês dois começam a conversar, começar a sair juntos, passa um tempo, vocês casam</p>
            <p>tem 72 filhos, e você tem a vida mais feliz do mundo!</p>
            <p>Você viveu uma vida feliz, parabéns</p>`
        break;
        case "2":
            resultado.innerHTML = `<p>Você por algum motivo elogia alguém que você nunca viu</p>
            <p>ela fica lisongeada, ela não te conhece, mas decide bater um papo com você</p>
            <p>vocês dois começam a conversar, começar a sair juntos, passa um tempo, vocês casam</p>
            <p>tem 72 filhos, e você tem a vida mais feliz do mundo!</p>
            <p>Você viveu uma vida feliz, parabéns</p>`
        break;
        case "3":
            resultado.innerHTML = `<p>Você por algum motivo está muito bravo aquele dia, e ai você decide ofendela</p>
            <p>ela fica triste, você sente remorso e pede desculpas, ela aceita seus pedidos de desculpa</p>
            <p>vocês dois começam a conversar, começar a sair juntos, passa um tempo, vocês casam</p>
            <p>tem 72 filhos, e você tem a vida mais feliz do mundo!</p>
            <p>Você viveu uma vida feliz, parabéns</p>`
        break;
        case "4":
            resultado.innerHTML = `<p>Você decide continuar caminhando em seu caminho ignorando a sua existencia</p>
            <p>porém você acaba esbarrando nela, derrubando os pertences dela</p>
            <p>você pede desculpas e a ajuda a pegar as coisas que cairam no chão, ela sabe que você não fez por mal e agradece a gentileza</p>
            <p>após isso vocês dois começam a conversar, começar a sair juntos, passa um tempo, vocês casam</p>
            <p>tem 72 filhos, e você tem a vida mais feliz do mundo!</p>
            <p>Você viveu uma vida feliz, parabéns</p>`
        break;
        case "5":
            resultado.innerHTML = `<p>Você vê ela, e percebe um olhar meio entristecido em seu olhar</p>
            <p>então você dá um abraço nela, ela acha isso estranho, mas agradece pelo abraço, e se sente um pouco melhor</p>
            <p>então ela decide contar que ela está passando por um momento dificil em sua vida, e que tudo que ela queria era um abraço</p>
            <p>após isso vocês dois começam a conversar, começar a sair juntos, passa um tempo, vocês casam</p>
            <p>tem 72 filhos, e você tem a vida mais feliz do mundo!</p>
            <p>Você viveu uma vida feliz, parabéns</p>`
        break;
        case "6":
            resultado.innerHTML = `<p>Você vê ela, e percebe um olhar meio entristecido em seu olhar</p>
            <p>então você a para e pergunta se ela está bem</p>
            <p>ela a principio acha estranho um estranho perguntar como ela está, mas por algum motivo ela decide contar o que está acontecendo</p>
            <p>ela diz que está passando por um momento dificil em sua vida, você ouve atentamente, e a aconselha</p>
            <p>ela agradece pelos conselhos que você falou para ela, com isso você pega o contato dela para poder conversar mais com ela e poder aconselha-la</p>
            <p>após isso vocês dois começam a conversar, começar a sair juntos, passa um tempo, vocês casam</p>
            <p>tem 72 filhos, e você tem a vida mais feliz do mundo!</p>
            <p>Você viveu uma vida feliz, parabéns</p>`
        break;
        case "7":
            resultado.innerHTML = `<p>Você vê que está escuro, e pode ser perigoso ela andar a noite sozinha'</p>
            <p>você se oferece para acompanha-la pois pode ser perigoso com estranhos na rua andando a essa hora da noite</p>
            <p>ela fica surpresa com um estranho falando com ela, mas ela compreende a situação e concorda com o que você acabou de dizer, então aceita sua oferta</p>
            <p>você a acompanha até em casa, ela agradece, e vocês dois trocam contato</p>
            <p>após isso vocês dois começam a conversar, começar a sair juntos, passa um tempo, vocês casam</p>
            <p>tem 72 filhos, e você tem a vida mais feliz do mundo!</p>
            <p>Você viveu uma vida feliz, parabéns</p>`
        break;
        default:
            resultado.innerHTML = `<p>Você fica com medo e não faz nada, ela passa na sua frente e vai embora!</p>
            <p>você acaba de perder a ÚNICA oportunidade de sua vida de por ter contato com alguém do genero oposto</p>
            <p>Parabéns, você é incompetente!</p>`
    }
}

//============================================================//