function solution(array){
    let num = Number(array[0]);
    let result = [];
    for (let i = 0; i < num; i++){
        result[i] = 0;
    }

    for (let i = 1; i < array.length; i++){
        let temp = array[i].split(" - ");
        let index = Number(temp[0]);
        let value = Number(temp[1]);
        result[index] = value;
    }

    for (let i = 0; i < result.length; i++){
        console.log(result[i]);
    }
}

solution([ '3', '0 - 5', '1 - 6', '2 - 7' ]);