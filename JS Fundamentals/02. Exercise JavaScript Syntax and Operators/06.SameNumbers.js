function solve(number){

    let numberToArrayToString = Array.from(number.toString());

    let result = 0;
    let same = true;

    for (let i = 0; i < numberToArrayToString.length; i++){
        result += Number(numberToArrayToString[i]);
        if (i > 0){
            if (numberToArrayToString[i] === numberToArrayToString[i - 1]){
                if (same){

                }
            }else {
                same = false;
            }
        }
    }

    console.log(same);
    console.log(result);
}

solve(2222322);