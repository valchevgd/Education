function solve() {
    return (function () {

        const ingredients = {
            protein: 0,
            carbohydrate: 0,
            fat: 0,
            flavour: 0
        };

        const recipes = {
            apple: {
                carbohydrate: 1,
                flavour: 2
            },
            coke: {
                carbohydrate: 10,
                flavour: 20
            },
            burger: {
                carbohydrate: 5,
                fat: 7,
                flavour: 3
            },
            omelet: {
                protein: 5,
                fat: 1,
                flavour: 1
            },
            cheverme: {
                carbohydrate: 10,
                protein: 10,
                fat: 10,
                flavour: 10
            }
        };

        return function (input) {

            let tokens = input.split(' ');

            let command = tokens[0];

            if (command === 'restock') {
                let ingredient = tokens[1];
                let quantity = parseInt(tokens[2]);

                ingredients[ingredient] += quantity;

                return 'Success';
            } else if (command === 'report') {
                let arrayOfIngredients = [];

                for (let ingredient in ingredients) {
                    arrayOfIngredients.push(`${ingredient}=${ingredients[ingredient]}`);
                }

                return arrayOfIngredients.join(' ');
            } else if (command === 'prepare') {
                let recipe = tokens[1];
                let quantity = tokens[2];

                for (let ingredient in recipes[recipe]) {
                    if (ingredients[ingredient] < (recipes[recipe][ingredient] * quantity)) {
                        return `Error: not enough ${ingredient} in stock`
                    }
                }

                for (let ingredient in recipes[recipe]) {
                    ingredients[ingredient] -= recipes[recipe][ingredient] * quantity;
                }

                return 'Success'
            }

        }
    })();
}

let manager = solve();

manager('restock carbohydrate 10');
manager('restock flavour 10');
manager('prepare apple 1');
manager('restock fat 10');
manager('prepare burger 1');
manager('report');