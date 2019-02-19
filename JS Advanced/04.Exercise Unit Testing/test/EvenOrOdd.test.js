let isOddOrEven = require('../02.EvenOrOdd').isOddOrEven;
let expect = require('chai').expect;

describe('is Odd ore Even functionality', function () {

    it('should return even with input "string"', function () {
        expect(isOddOrEven('string'))
            .to.be.equal('even');
    });

    it('should return odd with input "input"', function () {
        expect(isOddOrEven('input'))
            .to.be.equal('odd');
    });

    it('should return undefined with number as input', function () {
        expect(isOddOrEven(4))
            .to.be.undefined;
    });
});