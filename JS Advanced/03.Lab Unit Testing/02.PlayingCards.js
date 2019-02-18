function printDeckOfCards(array) {
    let cards = [];

    try {
        for (let i = 0; i < array.length; i++){
            let card = array[i].split('');
            let suit = card.pop();
            cards.push(makeCard(card.join(''), suit).toString()) ;
        }

        console.log(cards.join(' '));

    }catch (e) {
        console.log(e);
    }




    function makeCard(face, suit) {
        let validFaces = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
        let validSuits = {
            'S' : '\u2660',
            'H' : '\u2665',
            'D' : '\u2666',
            'C' : '\u2663'
        };

        let isFaceValid = validFaces.includes(face);
        let isSuitValid = validSuits.hasOwnProperty(suit);

        if (!isFaceValid || !isSuitValid){
            throw `Invalid card: ${face}${suit}`;
        }

        let card = {
            face,
            suit : validSuits[suit],
            toString : function () {
                return this.face + this.suit
            }

        };

        return card
    }
}

printDeckOfCards(['AS', '10D', 'KH', '3C']);

