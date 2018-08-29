function solution(array){
    let numberN = Number(array[0]);
    let numberX = Number(array[1]);
    let result =0;
    
    if (numberN > numberX) {
        result = numberN / numberX;
    }else {
        result = numberN * numberX;
    }

    console.log(result);
}

solution(["3", "2"]);