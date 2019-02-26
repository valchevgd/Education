(function solve() {
    Array.prototype.last = function() {
        let last = this[this.length - 1];
        return last;
    };

    Array.prototype.skip = function (n) {
        let output = [];

        for (let i = n; i < this.length; i++) {
            output.push(this[i]);
        }

        return output;
    };

    Array.prototype.take = function (n) {

        let output = [];

        for (let i = 0; i < n; i++) {
            output.push(this[i]);
        }

        return output;
    };

    Array.prototype.sum = function () {

        let sum = 0;

        for (let i = 0; i < this.length; i++) {
            sum += this[i];
        }

        return sum;
    };

    Array.prototype.average = function () {

        let average = this.sum() / this.length;

        return average;
    };

})();

let testArray = [1, 2, 3];
console.log(testArray.last());