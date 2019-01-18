function solve(numbers) {

    let perfectNumbers = [];

    for (let i = 0; i < numbers.length; i++) {
        let sum = aliquotSum(numbers[i]);
        if (sum === numbers[i]){
            perfectNumbers.push(numbers[i]);
        }
    }

    if (perfectNumbers.length) {
        console.log(perfectNumbers.join(', '));
    }else {
        console.log('No perfect number');
    }


    function aliquotSum(num) {
        let sum = 0;
        for (let i = 1; i < num; i++) {
            if (num % i === 0) {
                sum += i;
            }
        }

        return sum;
    }
}

solve([5, 32, 82]);