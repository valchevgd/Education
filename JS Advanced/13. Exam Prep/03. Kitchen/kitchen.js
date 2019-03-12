class Kitchen {

    constructor(budget) {

        this.budget = budget;
        this.menu = {};
        this.productsInStock = {};
        this.actionsHistory = {
            actions: '',
        };
    }

    loadProducts(products) {

        for (let i = 0; i < products.length; i++) {
            let tokens = products[i].split(' ');

            let productName = tokens[0];
            let productQuantity = Number(tokens[1]);
            let productPrice = Number(tokens[2]);
            let totalPrice = productQuantity * productPrice;

            if (totalPrice <= this.budget) {
                let product = {};

                product[productName] = productQuantity;

                if (!this.productsInStock.hasOwnProperty(productName)) {
                    this.productsInStock[productName] = 0;
                }

                this.productsInStock[productName] += productQuantity;

                this.budget -= totalPrice;

                this.actionsHistory['actions'] += `Successfully loaded ${productQuantity} ${productName}\n`
            } else {
                this.actionsHistory['actions'] += `There was not enough money to load ${productQuantity} ${productName}\n`
            }
        }
        return this.actionsHistory.actions;
    }

    addToMenu(mealName, products, price) {

        if (!this.menu.hasOwnProperty(mealName)) {
            this.menu[mealName] = {
                price,
                products
            };

            return `Great idea! Now with the ${mealName} we have ${Object.keys(this.menu).length} meals in the menu, other ideas?`;
        } else {
            return `The ${mealName} is already in the our menu, try something different.`;
        }
    }

    showTheMenu() {
        let result = '';

        if (Object.keys(this.menu).length === 0) {
            result = 'Our menu is not ready yet, please come later...';
        } else {
            for (const meal in this.menu) {
                result += `${meal} - $ ${this.menu[meal].price}\n`;
            }
        }

        return result;
    }

    makeTheOrder(meal) {

        let result = '';

        if (!this.menu.hasOwnProperty(meal)) {
            result = `There is not ${meal} yet in our menu, do you want to order something else?`
        } else {
            let haveAllProducts = true;
            let mealProducts = this.menu[meal].products;

            for (const product of mealProducts){
                let tokens = product.split(' ');
                let productQuantity = tokens.pop();
                let productName = tokens.join(' ');

                if (!this.productsInStock.hasOwnProperty(productName) || this.productsInStock[productName] < productQuantity) {
                    haveAllProducts = false;
                    break;
                }
            }

            if (haveAllProducts) {

                for (const product of mealProducts){
                    let tokens = product.split(' ');
                    let productQuantity = tokens.pop();
                    let productName = tokens.join(' ');

                    this.productsInStock[productName] -= productQuantity;
                }

                this.budget += this.menu[meal].price;

                result = `Your order (${meal}) will be completed in the next 30 minutes and will cost you ${this.menu[meal].price}.`
            } else {
                result = `For the time being, we cannot complete your order (${meal}), we are very sorry...`
            }
        }

        return result;
    }

}

let kitchen = new Kitchen(1000);
console.log(kitchen.loadProducts(['Banana 10 5', 'Banana 20 10', 'Strawberries 10 5', 'Yogurt 10 10', 'Yogurt 500 1500', 'Honey 5 50']));
console.log(kitchen.addToMenu('frozenYogurt', ['Yogurt 1', 'Honey 1', 'Banana 1', 'Strawberries 10'], 9.99));
console.log(kitchen.addToMenu('Pizza', ['Flour 0.5', 'Oil 0.2', 'Yeast 0.5', 'Salt 0.1', 'Sugar 0.1', 'Tomato sauce 0.5', 'Pepperoni 1', 'Cheese 1.5'], 15.55));
console.log(kitchen.showTheMenu());
console.log(kitchen.makeTheOrder('Pizza'));
console.log(kitchen.makeTheOrder('frozenYogurt'));
console.log(kitchen.budget);