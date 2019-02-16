let add = (function () {
    let num = 0;

    function sum(input) {
        num += input;

        return sum;
    }

    sum.toString = function () {
        return num;
    };

    return sum;
})();

add(1)(4);