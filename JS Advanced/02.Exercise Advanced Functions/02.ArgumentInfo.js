function solve(){

    let summary = {};

    for (let i = 0; i < arguments.length; i++){
        let obj = arguments[i];
        let type = typeof  obj;

        console.log(`${type}: ${obj}`);

        if (summary.hasOwnProperty(type) === false) {
            summary[type] = 0;
        }

        summary[type]++;
    }

    let sorted = [];

    for (let type in summary) {
        sorted.push([type, summary[type]]);
    }

    sorted.sort(function(a, b) {
        return b[1] - a[1];
    });

    for (let type in sorted) {
        console.log(`${sorted[type][0]} = ${sorted[type][1]}`);
    }
}

solve('cat', 42, 53, function () { console.log('Hello world!'); });