function solve(array) {
    let num = Number(array.pop());

    for (let i = 0; i < num % array.length; i++){
        let lastElement = array.pop();
        array.unshift(lastElement);
    }

    console.log(array.join(' '));
}

solve(['Banana',
    'Orange',
    'Coconut',
    'Apple',
    '15']);