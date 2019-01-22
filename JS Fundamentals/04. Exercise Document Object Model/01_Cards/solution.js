function solve() {

    Array.from(document.getElementsByTagName('img')).forEach(img => {
       img.addEventListener('click', playCard);
    });


    function playCard(e) {

        let card = e.target;
        card.removeEventListener('click',playCard);
        let parentId = card.parentElement.id;
        let spans = document.getElementsByTagName('span');
        card.src = "images/whiteCard.jpg";

        if (parentId === 'player1Div'){
            spans[0].textContent = card.name;
        }else {
            spans[2].textContent = card.name;
        }

        if (spans[0].textContent && spans[2].textContent){
            let firstPlayerCard = document.getElementsByName(`${spans[0].textContent}`)[0];
            let secondPlayerCard = document.getElementsByName(`${spans[2].textContent}`)[0];

            if (+spans[0].textContent > +spans[2].textContent){
                console.log(spans[0].textContent);
                console.log(spans[2].textContent);
                firstPlayerCard.style.border = '2px solid green';
                secondPlayerCard.style.border = '2px solid darkred';
            }else {
                firstPlayerCard.style.border = '2px solid darkred';
                secondPlayerCard.style.border = '2px solid green';
            }

            let historyDiv = document.getElementById('history');
            historyDiv.textContent = historyDiv.textContent + `[${firstPlayerCard.name} vs ${secondPlayerCard.name}] `;

            setTimeout(() => {
                spans[0].textContent = '';
                spans[2].textContent = '';
            }, 2000);
        }

    }

}