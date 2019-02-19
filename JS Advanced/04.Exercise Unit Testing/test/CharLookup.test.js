let lookupChar = require('../03.CharLookup').lookupChar;
let expect = require('chai').expect;

describe('lookupChar functionality', function () {
    it('should return undefined with non-string as first argument', function () {
        expect(lookupChar([], 5))
            .to.be.undefined;
    });

    it('should return undefined with float as second argument', function () {
        expect(lookupChar('string', 5.2))
            .to.be.undefined;
    });

    it('should return undefined with string as second argument', function () {
        expect(lookupChar('string', '2'))
            .to.be.undefined;
    });

    it('should return "Incorrect index" with 6 (string length)as second argument', function () {
        expect(lookupChar('string', 6))
            .to.be.equal('Incorrect index');
    });

    it('should return "Incorrect index" with negative number as second argument', function () {
        expect(lookupChar('string', -1))
            .to.be.equal('Incorrect index')
    });

    it('should return "r" with correct input (string and index)', function () {
        expect(lookupChar('string', 2))
            .to.be.equal('r');
    });
});