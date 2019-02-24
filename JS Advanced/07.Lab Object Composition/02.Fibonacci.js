function getFibonator(){
    let firstFib = 0;
    let secondFib = 1;

    return function () {
        let result = secondFib;
        let sum = firstFib + secondFib;
        firstFib = secondFib;
        secondFib = sum;

        return result;
    };
}

let fib = getFibonator();
console.log(fib()); // 1
console.log(fib()); // 1
console.log(fib()); // 2
console.log(fib()); // 3
console.log(fib()); // 5
console.log(fib()); // 8
console.log(fib()); // 13