const PaymentPackage = require('../08.PaymentPackage').PaymentPackage;
const expect = require('chai').expect;

describe('PaymentPackage functionality', function () {

    describe('test instantiating of class', function () {

        it('should throw error when instantiating with non-string first argument', function () {
            let func = () => {
                let pp = new PaymentPackage([], 500);
            };

            expect(func).to.throw(Error);
        });

        it('should throw error when instantiating with empty string first argument', function () {
            let func = () => {
                let pp = new PaymentPackage('', 500);
            };

            expect(func).to.throw(Error);
        });

        it('should throw error when instantiating with non-number second argument', function () {
            let func = () => {
                let pp = new PaymentPackage('Test', '');
            };

            expect(func).to.throw(Error);
        });

        it('should throw error when instantiating with negative number second argument', function () {
            let func = () => {
                let pp = new PaymentPackage('Test', -5);
            };

            expect(func).to.throw(Error);
        });
    });

    let pp;
    beforeEach(() => {
        pp = new PaymentPackage('Test', 10);
    });

    describe('test name accessor', function () {

        it('should return Test (correct)', function () {
            const result = pp.name;

            expect(result).to.be.equal('Test');
        });

        it('should return Test2 (correct)', function () {
            pp.name = 'Test2';
            const result = pp.name;

            expect(result).to.be.equal('Test2');
        });

        it('should throw error with non-string value', function () {
            let func = () => {
                pp.name = 5;
            };

            expect(func).to.throw(Error);
        });

        it('should throw error with empty string value', function () {
            let func = () => {
                pp.name = '';
            };

            expect(func).to.throw(Error);
        });
    });

    describe('test value accessor', function () {

        it('should return 10 (correct)', function () {
            const result = pp.value;

            expect(result).to.be.equal(10);
        });

        it('should return 15 (correct)', function () {
            pp.value = 15;
            const result = pp.value;

            expect(result).to.be.equal(15);
        });

        it('should return 13.5 (correct) with float number', function () {
            pp.value = 13.5;
            const result = pp.value;

            expect(result).to.be.equal(13.5);
        });

        it('should throw error with non-number value', function () {
            let func = () => {
                pp.value = 'five';
            };

            expect(func).to.throw(Error);
        });

        it('should throw error with negative number value', function () {
            let func = () => {
                pp.value = -8;
            };

            expect(func).to.throw(Error);
        });
    });

    describe('testing VAT accessors', function () {

        it('should return 20 (correct)', function () {
            const result = pp.VAT;

            expect(result).to.be.equal(20);
        });

        it('should return 30 (correct)', function () {
            pp.VAT = 30;
            const result = pp.VAT;

            expect(result).to.be.equal(30);
        });

        it('should return 23.8 (correct) with float number', function () {
            pp.VAT = 23.8;
            const result = pp.VAT;

            expect(result).to.be.equal(23.8);
        });

        it('should return error with negative number', function () {
            let func = () => {
                pp.VAT = -6;
            };

            expect(func).to.throw(Error);
        });

        it('should return error with non-number', function () {
            let func = () => {
                pp.VAT = 'one';
            };

            expect(func).to.throw(Error);
        });
    });

    describe('test active accessors', function () {
        it('should return true (correct)', function () {
            const result = pp.active;

            expect(result).to.be.true;
        });

        it('should return false (correct)', function () {
            pp.active = false;
            const result = pp.active;

            expect(result).to.be.false;
        });

        it('should throw error with non-boolean value', function () {
            const func = () => {
                pp.active = 'string'
            };

            expect(func).to.throw(Error);
        });
    });

    describe('test toString functionality', function () {
        it('should return correct', function () {
            const result = pp.toString();

            expect(result).to.be.equal('Package: Test\n- Value (excl. VAT): 10\n- Value (VAT 20%): 12')
        });

        it('should return correct', function () {
            pp.active = false;
            const result = pp.toString();

            expect(result).to.be.equal('Package: Test (inactive)\n- Value (excl. VAT): 10\n- Value (VAT 20%): 12')
        });
    })
});