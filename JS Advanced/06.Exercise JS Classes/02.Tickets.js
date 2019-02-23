function solve(tickets, sortBy){

    class Ticket{

        constructor(destination, price, status){
            this.destination = destination;
            this.price = price;
            this.status = status;
        }
    }

    let sorted = [];

    for (let element of tickets){
        let tokens = element.split('|');
        let ticket = new Ticket(tokens[0], Number(tokens[1]), tokens[2]);
        sorted.push(ticket)
    }

    if (sortBy === 'destination') {
        sorted.sort((a,b) => (a.destination > b.destination) ? 1 : ((b.destination > a.destination) ? -1 : 0));
    }else if (sortBy === 'price'){
        sorted.sort((a, b) => {
            return a.price - b.price;
        });
    }else if (sortBy === 'status'){
        sorted.sort((a,b) => (a.status > b.status) ? 1 : ((b.status > a.status) ? -1 : 0));
    }

    return sorted;
}

console.log(solve(['Philadelphia|94.20|available',
        'New York City|99.99|available',
        'New York City|95.99|sold',
        'Boston|126.20|departed'],
    'status'));