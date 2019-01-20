function solve() {

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
        playCard(firstPlayerFirstCard);
    });
    firstPlayerSecondCard.addEventListener('click', () => {
        playCard(firstPlayerSecondCard);
    });
    firstPlayerThirdCard.addEventListener('click', () => {
        playCard(firstPlayerThirdCard);
    });
    firstPlayerFourthCard.addEventListener('click', () => {
        playCard(firstPlayerFourthCard);
    });
    firstPlayerFifthCard.addEventListener('click', () => {
        playCard(firstPlayerFifthCard);
    });
    firstPlayerSixthCard.addEventListener('click', () => {
        playCard(firstPlayerSixthCard);
    });
    firstPlayerSeventhCard.addEventListener('click', () => {
        playCard(firstPlayerSeventhCard);
    });
    firstPlayerEightCard.addEventListener('click', () => {
        playCard(firstPlayerEightCard);
    });

    secondPlayerFirstCard.addEventListener('click', () => {
        playCard(secondPlayerFirstCard);
    });
    secondPlayerSecondCard.addEventListener('click', () => {
        playCard(secondPlayerSecondCard);
    });
    secondPlayerThirdCard.addEventListener('click', () => {
        playCard(secondPlayerThirdCard);
    });
    secondPlayerFourthCard.addEventListener('click', () => {
        playCard(secondPlayerFourthCard)
    });
    secondPlayerFifthCard.addEventListener('click', () => {
        playCard(secondPlayerFifthCard);
    });
    secondPlayerSixthCard.addEventListener('click', () => {
        playCard(secondPlayerSixthCard);
    });
    secondPlayerSeventhCard.addEventListener('click', () => {
        playCard(secondPlayerSeventhCard);
    });
    secondPlayerEightCard.addEventListener('click', () => {
        playCard(secondPlayerEightCard);
    });

    function playCard(card) {
        card.style
    }
}