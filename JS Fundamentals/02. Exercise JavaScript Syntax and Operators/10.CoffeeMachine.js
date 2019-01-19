function solve(input) {

    let totalMoney = 0;

    for (const line of input){

        let priceOfOrder = 0;
        let order = line.split(', ');

        if (order.includes('decaf')) {
            priceOfOrder += 0.9;
        }else {
            priceOfOrder += 0.8;
        }

        if (order.includes('milk')){
            priceOfOrder += 0.1;
        }

        if (order[order.length - 1] > 0){
            priceOfOrder += 0.1;
        }

        let moneyBalance = order[0] - priceOfOrder;

        if (moneyBalance < 0){
            console.log(`Not enough money for ${order[1]}. Need ${Math.abs(moneyBalance).toFixed(2)}$ more.`);
        }else {
            console.log(`You ordered ${order[1]}. Price: ${priceOfOrder.toFixed(2)}$ Change: ${moneyBalance.toFixed(2)}$`);
            totalMoney += priceOfOrder;
        }
    }

    console.log(`Income Report: ${totalMoney.toFixed(2)}$`);
}

solve(['1.00, coffee, caffeine, milk, 4',
       '0.40, tea, milk, 2',
       '1.00, coffee, decaf, 0']);