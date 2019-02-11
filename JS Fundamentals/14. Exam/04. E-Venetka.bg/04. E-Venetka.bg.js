function solve(input) {
    let profit = [];


    for (let vignette of input) {
        let town = {};
        if (!profit.hasOwnProperty(vignette.town)) {
            town['name'] = vignette.town;
            town['price'] = 0;
            town['cars'] = [];
            profit[vignette.town] = town;
        }
        if (!profit[vignette.town].cars.includes(vignette.model)){
            profit[vignette.town].cars.push(vignette.model)
        }


        profit[vignette.town].price += vignette.price


    }

    let cityOutput = '';
    let bestCity = '';
    let bestProfit = 0;
    for (let town in profit) {
        if(profit[town].price > bestProfit){
            cityOutput = `${profit[town].name} is most profitable - ${profit[town].price} BGN`;
            bestProfit = profit[town].price;
            bestCity = profit[town].name;
        }
    }

    console.log(cityOutput);

    let bestCars = {};

    for (let car of profit[bestCity].cars){
        let newCar = {};
        if (!bestCars.hasOwnProperty(car)){
            newCar['car'] = car;
            newCar['count'] = 0;
            bestCars[car] = newCar;
        }
        bestCars[car].count++;
    }

    let bestCar = '';
    let carLength = 0;
    for (let car in bestCars){
        if(bestCars[car].count > carLength){
            bestCar = bestCars[car].car;
            carLength = bestCars[car].count;
        }
    }

    console.log(`Most driven model: ${bestCar}`);

    let cities = [];

    for (let car of input){

        if (car.model === bestCar){
            if (!cities.hasOwnProperty(car.town)) {
                cities[car.town] = [];
            }
            cities[car.town].push(car.regNumber);
        }
    }

    cities.sort((a, b) => {
        return a.key - b.key;
    });

    for (let city in cities){
        console.log(`${city}: ${cities[city].join(', ')}`);
    }


}
solve([{model: 'BMW', regNumber: 'B1234SM', town: 'Varna', price: 2},
    {model: 'BMW', regNumber: 'C5959CZ', town: 'Sofia', price: 8},
    {model: 'Tesla', regNumber: 'NIKOLA', town: 'Burgas', price: 9},
    {model: 'BMW', regNumber: 'A3423SM', town: 'Varna', price: 3},
    {model: 'Lada', regNumber: 'SJSCA', town: 'Sofia', price: 3}]);