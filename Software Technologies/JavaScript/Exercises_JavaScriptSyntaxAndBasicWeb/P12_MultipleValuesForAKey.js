function solution(array) {
    let result = [];
    let obj;
    for (let i = 0; i < array.length - 1; i++) {
        let temp = array[i].split(' ');
        obj = {key: temp[0], value: temp[1]};
        if (!result[obj.key]) {
            result.push(obj);
        }else {
            result[obj.key] = obj.value;
        }
    }

    let key = array[array.length - 1];

    let validKey = false
    ;
    for (let i = 0; i < result.length; i++){
        if (result[i].key === key){
            validKey = true;
            break;
        }
    }
    if (!validKey){
        console.log("None");
    }else{
        for (let i = 0; i < result.length; i++){
            if (result[i].key === key){
                console.log(result[i].value);
            }
        }
    }

}

solution(["key value", "key evalu", "test test", "key"]);