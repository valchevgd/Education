function solve(firstNumber, secondNumber, thirdNumber){

    let maxNumber = Math.max(Math.max(firstNumber, secondNumber), thirdNumber);

    print(maxNumber);

    function print(number) {
        console.log(`The largest number is ${number}.`);
    }
}

solve(-3, -5, -22.5);