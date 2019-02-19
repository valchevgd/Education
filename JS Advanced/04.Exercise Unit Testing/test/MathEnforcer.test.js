let mathEnforcer = require('../04.MathEnforcer').mathEnforcer;
let expect = require('chai').expect;

describe('mathEnforcer functionality', function () {

    describe('addFive functionality', function () {
        it('should return undefined with non-numeric input on addFive function', function () {
            expect(mathEnforcer.addFive('five'), 'string as input')
                .to.be.undefined;
            expect(mathEnforcer.addFive([]), 'empty array as input')
                .to.be.undefined;
            expect(mathEnforcer.addFive({name : 'Pesho', age : 25}), 'object as input')
                .to.be.undefined;
            expect(mathEnforcer.addFive(() => {}), 'arrow function as input')
                .to.be.undefined;
            expect(mathEnforcer.addFive('3'), 'string number as input')
                .to.be.undefined;
        });

        it('should return 11 with 6 (integer) as input', function () {
            expect(mathEnforcer.addFive(6))
                .to.be.equal(11);
        });

        it('should return 20.3 with 15.3 (float) as input', function () {
            expect(mathEnforcer.addFive(15.3))
                .to.be.equal(20.3);
        });

        it('should return 2 with -3 (negative) as input', function () {
            expect(mathEnforcer.addFive(-3))
                .to.be.equal(2);
        });

        it('should return 5 with 0 (zero) as input', function () {
            expect(mathEnforcer.addFive(0))
                .to.be.equal(5);
        });
    });


    describe('subtractTen functionality', function () {
        it('should return undefined with non-numeric input on subtractTen function', function () {
            expect(mathEnforcer.subtractTen('five'), 'string as input')
                .to.be.undefined;
            expect(mathEnforcer.subtractTen([]), 'empty array as input')
                .to.be.undefined;
            expect(mathEnforcer.subtractTen({name : 'Pesho', age : 25}), 'object as input')
                .to.be.undefined;
            expect(mathEnforcer.subtractTen(() => {}), 'arrow function as input')
                .to.be.undefined;
            expect(mathEnforcer.subtractTen('3'), 'string number as input')
                .to.be.undefined;
        });

        it('should return 0 with 10 as input', function () {
            expect(mathEnforcer.subtractTen(10))
                .to.be.equal(0);
        });

        it('should return -20 with -10(negative integer) as input', function () {
            expect(mathEnforcer.subtractTen(-10))
                .to.be.equal(-20);
        });

        it('should return 13.6 with 23.6 (float) as input', function () {
            expect(mathEnforcer.subtractTen(23.6))
                .to.be.closeTo(13.6, 0.001);
        });
    });
    
    describe('sum functionality', function () {
        it('should return undefined if first parameter is non-numeric', function () {
            expect(mathEnforcer.sum('five', 4))
                .to.be.undefined;
        });

        it('should return undefined if second parameter is non-numeric', function () {
            expect(mathEnforcer.sum(3, 'six'))
                .to.be.undefined;
        });

        it('should return 5 with 3 and 2 (two positive parameters) as input', function () {
            expect(mathEnforcer.sum(3, 2))
                .to.be.equal(5);
        });

        it('should return -3 (negative integer) with -13 and 10 (negative and positive parameters) as input', function () {
            expect(mathEnforcer.sum(-13, 10))
                .to.be.equal(-3);
        });

        it('should return -10 (negative integer) with -7 and -3 (two negative parameters)', function () {
            expect(mathEnforcer.sum(-7, -3))
                .to.be.equal(-10);
        });

        it('should return 15.6 (float) with 13.2 and 2.4 (two float numbers)', function () {
            expect(mathEnforcer.sum(13.2, 2.4))
                .to.be.closeTo(15.6, 0.001);
        });

        it('should return 13.4 with 10 and 3.4 (integer and float) as input', function () {
            expect(mathEnforcer.sum(10, 3.4))
                .to.be.closeTo(13.4, 0.001)
        });
    });

});