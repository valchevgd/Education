function solve(firstArray, secondArray, thirdArray) {

    let newArray = [];
    let sum = 0;

    for (let i = 0; i < firstArray.length; i ++){
        if (secondArray.includes(firstArray[i])){
            if (thirdArray.includes(firstArray[i])){
                newArray.push(firstArray[i]);
                sum += firstArray[i];
            }
        }
    }

    let sorted = newArray.sort();
    let arrayForPrint = sorted.join(', ');
    let average = sum / newArray.length;

    let median = 0;
    let half = Math.floor(sorted.length / 2);

    if (sorted.length % 2){
        median = sorted[half];
    }else {
        median = (sorted[half - 1] + sorted[half]) / 2.0;
    }

    console.log(`The common elements are ${arrayForPrint}.`);
    console.log(`Average: ${average}.`);
    console.log(`Median: ${median}.`);
}

solve([1, 2, 3, 4, 5],
    [3, 2, 1, 5, 8],
    [2, 5, 3, 1, 16]);