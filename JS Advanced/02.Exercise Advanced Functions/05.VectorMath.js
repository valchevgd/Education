let solution = (function () {

    const add = ([x1, y1],[x2, y2]) => {
        return [x1 + x2, y1 + y2];
    };

    const multiply = ([x, y], scalar) => {
        return [x * scalar, y * scalar];
    };

    const length = ([x, y]) => {
        return Math.sqrt(x * x  + y * y);
    };

    const dot = ([x1, y1],[x2, y2]) => {
        return x1 * x2 + y1 * y2;
    };

    const cross = ([x1, y1],[x2, y2]) => {
        return x1 * y2 - y1 * x2;
    };

    return {
        add,
        multiply,
        length,
        dot,
        cross

    }
})();

console.log(solution.cross([3, 7], [1, 0]));