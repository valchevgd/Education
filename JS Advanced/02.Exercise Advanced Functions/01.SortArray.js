function solve(array, string){

    if (string === 'asc'){
        return array.sort( (a, b) => a - b);
    } else {
        return array.sort( (a, b) => b - a);
    }
}

solve([14, 7, 17, 6, 8], 'asc');