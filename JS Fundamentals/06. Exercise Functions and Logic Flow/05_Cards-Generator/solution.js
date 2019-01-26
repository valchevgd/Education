function solve() {
    let cards = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

    let fromElement = document.getElementById('from');
    let toElement = document.getElementById('to');
    let btn = document.getElementsByTagName('button')[0];
    let outputElement = document.getElementById('cards');
    let startIndex = 0;
    let endIndex = 0;


    btn.addEventListener('click', () => {
        let inputSuit = document.querySelector('#exercise select').selectedIndex;
        let firstCard = fromElement.value;
        let lastCard = toElement.value;
        getIndexes(firstCard, lastCard);
        let cardsToAdd = getCards();
        let outputSuit = getOutputSuit(inputSuit);
        makeCards(cardsToAdd, outputSuit);
        fromElement.value = '';
        toElement.value = '';

    });

    function getIndexes(firstCard, lastCard) {
        for (const card in cards) {
            if (cards[card] === firstCard) {
                startIndex = Number(card);
            }

            if (cards[card] === lastCard) {
                endIndex = Number(card);
            }
        }
    }

    function getCards() {
        let newCards = [];
        for (let i = startIndex; i <= endIndex; i++) {
            newCards.push(cards[i]);
        }
        return newCards;
    }


    function getOutputSuit(suit) {
        console.log(typeof suit);
        let outputSuit = '';
        switch (suit) {
            case 0:
                outputSuit = '&hearts;';
                break;
            case 1:
                outputSuit = '&spades;';
                break;
            case 2:
                outputSuit = '&diamond;';
                break;
            case 3:
                outputSuit = '&clubs;';
                break;
        }

        return outputSuit;
    }

    function makeCards(cardss, suit) {

        for (let card in cardss){
            let cardDiv = document.createElement('div');
            let firstSuitElement = document.createElement('p');
            let cardNumberElement = document.createElement('p');
            let secondSuitElement = document.createElement('p');
            cardDiv.setAttribute('class', 'card');
            cardDiv.appendChild(firstSuitElement);
            cardDiv.appendChild(cardNumberElement);
            cardDiv.appendChild(secondSuitElement);
            firstSuitElement.innerHTML = suit;
            cardNumberElement.innerHTML = cardss[card];
            secondSuitElement.innerHTML = suit;

            outputElement.appendChild(cardDiv);
        }

    }

}