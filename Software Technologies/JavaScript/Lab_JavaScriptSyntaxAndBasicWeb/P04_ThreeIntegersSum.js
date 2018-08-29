function solve(arr) {

    let nums = arr[0].split(' ')
    let firstNum = Number(nums[0]);
    let secondNum = Number(nums[1]);
    let thirdNum = Number(nums[2]);

    if (firstNum + secondNum === thirdNum) {
        if (firstNum < secondNum) {
            console.log(`${firstNum} + ${secondNum} = ${thirdNum}`)
        } else {
            console.log(`${secondNum} + ${firstNum} = ${thirdNum}`)
        }
    } else if (firstNum + thirdNum === secondNum) {
        if (firstNum < thirdNum) {
            console.log(`${firstNum} + ${thirdNum} = ${secondNum}`)
        } else {
            console.log(`${thirdNum} + ${firstNum} = ${secondNum}`)
        }
    }else if (secondNum + thirdNum === firstNum) {
        if (secondNum < thirdNum) {
            console.log(`${secondNum} + ${thirdNum} = ${firstNum}`)
        } else {
            console.log(`${thirdNum} + ${secondNum} = ${firstNum}`)
        }
    }else{
        console.log('No');
    }
}

solve(['8 15 7'])