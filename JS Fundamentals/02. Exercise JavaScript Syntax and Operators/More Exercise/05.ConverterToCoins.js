function solve(sum, coinsValue){
    let coins = [];

    coinsValue = coinsValue.sort(function(a, b){return b-a});

    while (sum){

        for (let i = 0; i < coinsValue.length; i++){
            if (sum - coinsValue[i] >= 0){
                sum -= coinsValue[i];
                coins.push(coinsValue[i]);
                break;
            }
        }
    }

    console.log(coins.join(', '))
}

solve(123, [5, 50, 2, 1, 10]);