function solve(firstNumber, secondNumber){

    let gcd = function(a, b) {
        if ( ! b) {
            return a;
        }

        return gcd(b, a % b);
    };

    console.log(gcd(firstNumber, secondNumber));
}

solve(2154, 458);