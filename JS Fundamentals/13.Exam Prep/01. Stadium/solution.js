function solve() {
    Array.from(document.getElementsByClassName('seat')).forEach(s => {
        s.addEventListener('click', buyTicket)
    });

    let summaryButton = document.querySelector('#summary button');
    summaryButton.addEventListener('click', getSummary);

    let profit = 0;
    let fans = 0;
    let outputElement = document.getElementById('output');

    function buyTicket(e) {
        let seat = e.target;
        let sector = getSector(seat.parentNode.cellIndex);
        let zone = seat.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].textContent;

        if (seat.style.background === '') {
            outputElement.value += ` Seat ${seat.textContent} in zone ${zone} sector ${sector} was taken.\n`;
            seat.style.background = 'rgb(255,0,0)';
            calculateProfit(sector, zone);
            fans++;
        } else {
            outputElement.value += ` Seat ${seat.textContent} in zone ${zone} sector ${sector} is unavailable.\n`;
        }


    }

    function getSector(number) {
        let sector = '';
        switch (number) {
            case 0:
                sector = 'A';
                break;
            case 1:
                sector = 'B';
                break;
            case 2:
                sector = 'C';
                break
        }

        return sector;
    }

    function calculateProfit(sector, zone) {

        if (sector === 'A') {
            switch (zone) {
                case 'VIP':
                    profit += 25;
                    break;
                default:
                    profit += 10;
                    break;
            }
        } else if (sector === 'B') {
            switch (zone) {
                case 'VIP':
                    profit += 15;
                    break;
                default:
                    profit += 7;
                    break;
            }
        } else if (sector === 'C') {
            switch (zone) {
                case 'VIP':
                    profit += 10;
                    break;
                default:
                    profit += 5;
                    break;
            }
        }
    }

    function getSummary() {
        let spanElement = document.getElementsByTagName('span')[0];
        spanElement.textContent = `${profit} leva, ${fans} fans.`
    }
}