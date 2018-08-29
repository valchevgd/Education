function solution(array) {
    let firstNum = Number(array[0]);
    let secondNum = Number(array[1]);
    let thirdNum = Number(array[2]);

    if (firstNum === 0
        || secondNum === 0
        || thirdNum === 0) {
        return "Positive";
    }

    let negativeCounter = 0;

    for (let i = 0; i < array.length; i++) {
        if (Number(array[i] < 0)) {
            negativeCounter++;
        }
    }

    if (negativeCounter === 1
        || negativeCounter === 3) {
        return "Negative";
    } else {
        return "Positive";
    }
}

let result = solution(["0", "0", "0"]);
console.log(result);