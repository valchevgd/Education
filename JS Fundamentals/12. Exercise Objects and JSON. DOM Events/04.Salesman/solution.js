function solve() {
    let loadButton = document.getElementsByTagName('button')[0];
    loadButton.addEventListener('click', load);
    let buyButton = document.getElementsByTagName('button')[1];
    buyButton.addEventListener('click', sell);
    let endButton = document.getElementsByTagName('button')[2];
    endButton.addEventListener('click', end);

    let storage = {};
    let profit = 0;
    let resultArea = document.getElementsByTagName('textarea')[2];

    function load() {
        let load = JSON.parse(document.getElementsByTagName('textarea')[0].value);
        for (let product of load) {
            if (!storage.hasOwnProperty(product.name)) {
                storage[product.name] = {
                    price: product.price,
                    quantity: product.quantity
                };
            } else {
                storage[product.name] = {
                    price: product.price,
                    quantity: product.quantity + storage[product.name].quantity
                };
            }
            resultArea.value += `Successfully added ${product.quantity} ${product.name}. Price: ${product.price}\n`
        }
    }
    
    function sell() {
        let product = JSON.parse(document.getElementsByTagName('textarea')[1].value);

        if (storage.hasOwnProperty(product.name) && storage[product.name].quantity >= product.quantity){
            storage[product.name].quantity -= product.quantity;
            profit += product.quantity * storage[product.name].price;
            resultArea.value += `${product.quantity} ${product.name} sold for ${product.quantity * storage[product.name].price}.\n`;
        } else {
            resultArea.value += 'Cannot complete order.\n';
        }
    }
    
    function end() {
        resultArea.value += `Profit: ${profit.toFixed(2)}.\n`;

        loadButton.removeEventListener('click', load);
        buyButton.removeEventListener('click', sell);
        endButton.removeEventListener('click', end);
    }
}