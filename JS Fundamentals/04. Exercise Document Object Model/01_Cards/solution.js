function solve() {

    let firstPlayerCard;
    let secondPlayerCard;

    let firstPlayerFirstCard = document.querySelector('div#player1Div img:nth-child(1)');
    let firstPlayerSecondCard = document.querySelector('div#player1Div img:nth-child(2)');
    let firstPlayerThirdCard = document.querySelector('div#player1Div img:nth-child(3)');
    let firstPlayerFourthCard = document.querySelector('div#player1Div img:nth-child(4)');
    let firstPlayerFifthCard = document.querySelector('div#player1Div img:nth-child(5)');
    let firstPlayerSixthCard = document.querySelector('div#player1Div img:nth-child(6)');
    let firstPlayerSeventhCard = document.querySelector('div#player1Div img:nth-child(7)');
    let firstPlayerEightCard = document.querySelector('div#player1Div img:nth-child(8)');

    let secondPlayerFirstCard = document.querySelector('div#player2Div img:nth-child(1)');
    let secondPlayerSecondCard = document.querySelector('div#player2Div img:nth-child(2)');
    let secondPlayerThirdCard = document.querySelector('div#player2Div img:nth-child(3)');
    let secondPlayerFourthCard = document.querySelector('div#player2Div img:nth-child(4)');
    let secondPlayerFifthCard = document.querySelector('div#player2Div img:nth-child(5)');
    let secondPlayerSixthCard = document.querySelector('div#player2Div img:nth-child(6)');
    let secondPlayerSeventhCard = document.querySelector('div#player2Div img:nth-child(7)');
    let secondPlayerEightCard = document.querySelector('div#player2Div img:nth-child(8)');



    firstPlayerFirstCard.addEventListener('click', () => {
        firstPlayerCard = firstPlayerFirstCard;

        playCard(firstPlayerFirstCard, 'first');
    });
    firstPlayerSecondCard.addEventListener('click', () => {
        firstPlayerCard = firstPlayerSecondCard;

        playCard(firstPlayerSecondCard, 'first');
    });
    firstPlayerThirdCard.addEventListener('click', () => {
        firstPlayerCard = firstPlayerThirdCard;

        playCard(firstPlayerThirdCard, 'first');
    });
    firstPlayerFourthCard.addEventListener('click', () => {
        firstPlayerCard = firstPlayerFourthCard;

        playCard(firstPlayerFourthCard, 'first');
    });
    firstPlayerFifthCard.addEventListener('click', () => {
        firstPlayerCard = firstPlayerFifthCard;

        playCard(firstPlayerFifthCard, 'first');
    });
    firstPlayerSixthCard.addEventListener('click', () => {
        firstPlayerCard = firstPlayerSixthCard;

        playCard(firstPlayerSixthCard, 'first');
    });
    firstPlayerSeventhCard.addEventListener('click', () => {
        firstPlayerCard = firstPlayerSeventhCard;

        playCard(firstPlayerSeventhCard, 'first');
    });
    firstPlayerEightCard.addEventListener('click', () => {
        firstPlayerCard = firstPlayerEightCard;

        playCard(firstPlayerEightCard, 'first');
    });


    secondPlayerFirstCard.addEventListener('click', () => {
        secondPlayerCard = secondPlayerFirstCard;
        playCard(secondPlayerFirstCard, 'second');
    });
    secondPlayerSecondCard.addEventListener('click', () => {
        secondPlayerCard = secondPlayerSecondCard;
        playCard(secondPlayerSecondCard, 'second');
    });
    secondPlayerThirdCard.addEventListener('click', () => {
        secondPlayerCard = secondPlayerThirdCard;
        playCard(secondPlayerThirdCard, 'second');
    });
    secondPlayerFourthCard.addEventListener('click', () => {
        secondPlayerCard = secondPlayerFourthCard;
        playCard(secondPlayerFourthCard, 'second')
    });
    secondPlayerFifthCard.addEventListener('click', () => {
        secondPlayerCard = secondPlayerFifthCard;
        playCard(secondPlayerFifthCard, 'second');
    });
    secondPlayerSixthCard.addEventListener('click', () => {
        secondPlayerCard = secondPlayerSixthCard;
        playCard(secondPlayerSixthCard, 'second');
    });
    secondPlayerSeventhCard.addEventListener('click', () => {
        secondPlayerCard = secondPlayerSeventhCard;
        playCard(secondPlayerSeventhCard, 'second');
    });
    secondPlayerEightCard.addEventListener('click', () => {
        secondPlayerCard = secondPlayerEightCard;
        playCard(secondPlayerEightCard, 'second');
    });

    function playCard(card, player) {
        card.src = "images/whiteCard.jpg";

        if (player === 'first'){
            let resultSpace = document.querySelector('div#result span:nth-child(1)');
            let cardValue = card.name;
            resultSpace.innerText = cardValue;
        }else{
            let resultSpace = document.querySelector('div#result span:nth-child(3)');
            let cardValue = card.name;
            resultSpace.innerText = cardValue;
        }

        if (firstPlayerCard && secondPlayerCard){
            playHand();
        }

    }

    function playHand() {
        let firstPlayerValue = firstPlayerCard.name;
        let secondPlayerValue = secondPlayerCard.name;

        if (firstPlayerValue > secondPlayerValue){
            firstPlayerCard.style.border = '2px solid green';
            secondPlayerCard.style.border = '2px solid darkred';
        }else {
            firstPlayerCard.style.border = '2px solid darkred';
            secondPlayerCard.style.border = '2px solid green';
        }

        let historyDiv = document.getElementById('history');
        historyDiv.innerText = historyDiv.innerText + `[${firstPlayerValue} vs ${secondPlayerValue}]`;

        let firstResultSpace = document.querySelector('div#result span:nth-child(1)');
        let secondResultSpace = document.querySelector('div#result span:nth-child(3)');

        setTimeout(() => {
            firstResultSpace.innerText = '';
            secondResultSpace.innerText = '';
        }, 2000);

        firstPlayerCard = null;
        secondPlayerCard = null;
    }
}