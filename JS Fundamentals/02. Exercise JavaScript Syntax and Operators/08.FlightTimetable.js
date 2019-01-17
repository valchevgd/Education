function solve(flight) {
    let typeOfFlight = flight[0];
    let destinationOfFlight = flight[1];
    let timeOfFlight = flight[2];
    let numberOfFlight = flight[3];
    let numberOfGate = flight[4];

    console.log(`${typeOfFlight}: Destination - ${destinationOfFlight}, Flight - ${numberOfFlight}, Time - ${timeOfFlight}, Gate - ${numberOfGate}`)
}

solve(['Departures', 'London', '22:45', 'BR117', '42']);