function solve(arg) {

    let type = typeof arg;
    let result;

    if (type !== 'number'){
        result = 'We can not calculate the circle area, because we receive a ' + type +'.';
    }else {
        result = (Math.PI * arg * arg).toFixed(2);
    }

    print(result);

    function print(result) {
        console.log(result);
    }

}

solve('name');