let createCalculator = require('../07.Add_Subtract').createCalculator;
let expect = require('chai').expect;

describe('calculate', function () {
    it('Check for add method', function () {
        let calculator = createCalculator();
        calculator.add(2);
        expect(calculator.get()).to.be.equal(2);
    });

    it('Check for subtract method', function () {
        let calculator = createCalculator();
        calculator.add(5);
        calculator.subtract(2);
        expect(calculator.get()).to.be.equal(3);
    });

    it('Take float number', function () {
        let calculator = createCalculator();
        calculator.add(2.3);
        calculator.subtract(1.8);
        expect(calculator.get()).to.be.equal(0.4999999999999998);
    });

    it('Take string as argument of add', function () {
        let calculator = createCalculator();
        calculator.add('6');
        calculator.subtract(5);
        expect(calculator.get()).to.be.equal(1);
    });

    it('Take string as argument of add', function () {
        let calculator = createCalculator();
        calculator.add('Pesho');
        calculator.subtract(5);
        expect(calculator.get()).to.be.NaN;
    });

    it('Take string as argument of sub', function () {
        let calculator = createCalculator();
        calculator.add(3);
        calculator.subtract('8');
        expect(calculator.get()).to.be.equal(-5);
    });

    it('Take negative number as argument of sub', function () {
        let calculator = createCalculator();
        calculator.subtract(-3);
        expect(calculator.get()).to.be.equal(3);
    });

    it('Take string as argument of sum', function () {
        let calculator = createCalculator();
        calculator.add(8);
        calculator.subtract('six');
        expect(calculator.get()).to.be.NaN;
    });
});