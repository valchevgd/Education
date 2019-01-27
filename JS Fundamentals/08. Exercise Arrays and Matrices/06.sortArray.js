function solve(array) {
    array.sort((a, b) => {
        if (a.length - b.length === 0) {
            let A = a.toLowerCase();
            let B = b.toLowerCase();
            if (A < B){
                return -1;
            }else if (A > B){
                return  1;
            }else{
                return 0;
            }
        }else {
            return a.length - b.length
        }
    });

    for (let element of array){
        console.log(element);
    }
}

solve(['test',
    'Deny',
    'omen',
    'Default']);