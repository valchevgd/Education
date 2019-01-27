function solve(array) {
    let n = Number(array.pop());

    for (let i = 0; i < array.length; i += n){
        console.log(array[i]);
    }
}

solve(['5',
    '20',
    '31',
    '4',
    '20',
    '2']);