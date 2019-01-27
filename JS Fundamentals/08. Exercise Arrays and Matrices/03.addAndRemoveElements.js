function solve(array) {
    let num = 1;
    let output = [];

    for(let element of array){
        if (element === 'add'){
            output.push(num)
        }else {
            let el = output.pop();
        }

        num++;
    }

    if (output.length > 0){
        for(let element of output){
            console.log(element);
        }
    } else {
        console.log('Empty');
    }
}

solve(['add',
    'add',
    'remove',
    'add',
    'add']);