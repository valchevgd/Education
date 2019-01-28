function solve(array){
    let output = [];
    let biggestNum = 0;

    for (let num of array){
        if (num >= biggestNum){
            output.push(num);
            biggestNum = num;
        }
    }

    for (let num of output){
        console.log(num);
    }
}

solve([1,
    3,
    8,
    4,
    10,
    12,
    3,
    2,
    24]);