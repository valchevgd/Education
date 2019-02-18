let isSymmetric = require('../05.CheckForSymmetry').isSymmetric;
let expect = require('chai').expect;

describe('symmetric', function () {
    it('Take a string as argument', function () {
        expect(isSymmetric('test')).to.be.false;
    });

    it('Take symmetric array', function () {
        expect(isSymmetric(['true', 'false', 'true', 'false', 'true']))
            .to.be.true;
    });

    it('Take symmetric array with even elements', function () {
        expect(isSymmetric(['true', 'false', 'true', 'true', 'false', 'true']))
            .to.be.true;
    });

    it('Take non symmetric array', function () {
        expect(isSymmetric(['false', 'false', 'true', 'false', 'true']))
            .to.be.false;
    });

    it('Take array with different types', function () {
        expect(isSymmetric([1, 'Pesho', [3, 4], {name : 'Ivan', age : 41}]))
            .to.be.false;
    });

    it('Take symmetric array of numbers', function () {
        expect(isSymmetric([1, 2.3, 6, 6, 2.3, 1])).to.be.true;
    });

    it('Take empty arrays and object', function () {
        expect(isSymmetric([[], {}, []])).to.be.true;
    });
});