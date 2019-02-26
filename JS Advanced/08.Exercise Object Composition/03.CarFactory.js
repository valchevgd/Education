function carBuilder(clientWanted) {
    let car = {};
    let engines = [{power: 90, volume: 1800}, {power: 120, volume: 2400}, {power: 200, volume: 3500}];

    car.model = clientWanted.model;

    if (clientWanted.power < 110) {
        car.engine = engines[0];
    } else if (clientWanted.power < 200) {
        car.engine = engines[1];
    } else {
        car.engine = engines[2];
    }

    let carriage = {
        type: clientWanted.carriage,
        color: clientWanted.color
    };
    car.carriage = carriage;

    let wheelSize = clientWanted.wheelsize;

    if (wheelSize % 2 === 0){
        wheelSize--;
    }

    car.wheels = [wheelSize, wheelSize, wheelSize, wheelSize];

    return car;
}

console.log(carBuilder({
    model: 'VW Golf II',
    power: 90,
    color: 'blue',
    carriage: 'hatchback',
    wheelsize: 14
}));