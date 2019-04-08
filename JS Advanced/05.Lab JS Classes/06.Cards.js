(function(){

    let validFaces = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
    let Suits = {
        'SPADES' : '\u2660',
        'HEARTS' : '\u2665',
        'DIAMONDS' : '\u2666',
        'CLUBS' : '\u2663'
    };

   class Card{
        constructor(face, suit){
            if (!validFaces.includes(face) || (typeof suit !== 'string')) {
                throw new Error;
            }

            this.face = face;
            this.suit = suit;
        }

        // set face(face){
        //
        //
        //     return this.face = face;
        // }
   }

    return {
        Suits:Suits,
        Card:Card
    }
}());
