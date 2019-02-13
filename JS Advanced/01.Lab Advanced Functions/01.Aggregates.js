function solve(input) {
    let sum = input.reduce((acc, c) => acc + c);
    let min = input.reduce((acc, c) => Math.min(acc, c));
    let max = input.reduce((acc, c) => Math.max(acc, c));
    let product = input.reduce((acc, c) => acc * c);
    let joined = input.reduce((acc, c) => '' + acc + c);

    console.log(`Sum: ${sum}`);
    console.log(`Min: ${min}`);
    console.log(`Max: ${max}`);
    console.log(`Product: ${product}`);
    console.log(`Join: ${joined}`);
}

solve([2, 3, 10, 5]);