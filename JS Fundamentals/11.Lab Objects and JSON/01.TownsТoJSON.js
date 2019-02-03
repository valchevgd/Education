function solve(array) {
    let regEx = /([A-Z][a-z]+|[A-Z][a-z]+ [A-Z][a-z]*)\s*\|*\s*([0-9]+\.[0-9]+)\s*\|*\s*([0-9]+\.[0-9]+)/;
    let towns = [];
    for (let i = 1; i < array.length; i++){
        let matches = regEx.exec(array[i]);
        let line = { 'Town': matches[1], 'Latitude':Number(matches[2]), 'Longitude':Number(matches[3]) };
        towns.push(line);
    }

    console.log(JSON.stringify(towns));
}

solve(['| Town | Latitude | Longitude |',
    '| Sofia | 42.696552 | 23.32601 |',
    '| Beijing | 39.913818 | 116.363625 |']);