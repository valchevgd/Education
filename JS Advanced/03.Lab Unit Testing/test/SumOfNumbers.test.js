let sum = require('../04.SumOfNumbers').sum;
let expect = require('chai').expect;

describe('sumArr', function () {
    it('sum array of positive integers', function () {
        expect(sum([2, 3, 4, 5])).to.equal(14)
    });

    it('sum array of negative integers', function () {
        expect(sum([-6, -8, -14, -50])).to.equal(-78)
    });

    it('sum array of positive and negative integers', function () {
        expect(sum([-16, 8, -1, 25, -13])).to.equal(3)
    });
});