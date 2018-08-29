function solution(array){
    let result = [];
    for (let i = 0; i < array.length; i++){
        let temp = array[i].split(' ');
        let comand = temp[0];
        let value = temp[1];
        if (comand === "add"){
            result.push(value);
        }else{
            if(value < result.length){
                result.splice(value, 1);
            }
        }
    }

    for (let i = 0; i < result.length; i++){
        console.log(result[i]);
    }
}

solution(["add 3", "add 5", "remove 2", "remove 0", "add 7"]);