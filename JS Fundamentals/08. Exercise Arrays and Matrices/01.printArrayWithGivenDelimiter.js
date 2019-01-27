function solve(array) {
    let delimer = array.pop();
    console.log(array.join(delimer));
}

solve(['One',
    'Two',
    'Three',
    'Four',
    'Five',
    '-']);