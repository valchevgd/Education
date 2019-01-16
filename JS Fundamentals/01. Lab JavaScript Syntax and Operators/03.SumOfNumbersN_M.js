function solve(firstNumAsString, secondNumAsString)
{
    let firstNum = Number(firstNumAsString);
    let secondNum = Number(secondNumAsString);
    let result = 0;

    for (let i = firstNum; i <= secondNum; i++){
        result += i;
    }

    print(result);

    function print(number) {
        console.log(number);
    }
}

solve('-8', '20');