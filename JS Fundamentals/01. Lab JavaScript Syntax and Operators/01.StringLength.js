function solve(firstStr, secondStr, thirdStr) {
    let sum;
    let average;

    let firstLength = firstStr.length;
    let secondLength = secondStr.length;
    let thirdLength = thirdStr.length;

    sum = firstLength + secondLength + thirdLength;
    average = Math.floor(sum / 3);

    console.log(sum);
    console.log(average);
}

solve('pasta', '5', '22.3');