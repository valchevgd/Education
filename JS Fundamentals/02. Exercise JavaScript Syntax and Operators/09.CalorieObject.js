function solve(array) {

    let object = {};

    for (let i = 0; i < array.length; i+=2){
        object[array[i]] = Number(array[i+1]);
    }

    console.log(object);
}

solve(['Yoghurt', 48, 'Rise', 138, 'Apple', 52]);