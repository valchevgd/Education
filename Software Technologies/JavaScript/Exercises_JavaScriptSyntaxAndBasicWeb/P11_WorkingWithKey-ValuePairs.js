function solution(array) {
    let result = [];
    for (let i = 0; i < array.length - 1; i++) {
        let temp = array[i].split(' ');
        let obj = {key: temp[0], value: temp[1]};
        if (!result[obj.key]) {
            result[obj.key] = obj.value;
        }else {
            result[obj.key] = obj.value;
        }
    }

    let key = array[array.length - 1];

    if (result[key] === undefined){
        console.log("None");
    }else{
        console.log(result[key]);
    }

}

solution(["key value", "key evalu", "4 test2", "4 test3", "4 test5", "key"]);