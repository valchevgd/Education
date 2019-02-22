const StringBuilder= require('../07.StringBuilder').StringBuilder;
const expect = require('chai').expect;

describe('StringBuilder class', function () {
    let stringBuilder;

    beforeEach(function () {
        stringBuilder = new StringBuilder();
    });



    describe('instantiating of StringBuilder', function () {
        it('should return "string" when instantiating with string argument', function () {
            let sb = new StringBuilder('string');
            let result = sb.toString();
            expect(result).to.be.equal('string');
        });

        it('should return empty string when instantiating without anything', function () {
            let sb = new StringBuilder();
            let result = sb.toString();

            expect(result).to.be.equal('');
        });

        it('should return TypeError when instantiating with empty array as input', function () {
            let func = () => {
                let sb = new StringBuilder([]);
            };


            expect(func).to.be.throw(TypeError);
        });
    });

    describe('append functionality', function () {
        it('should return "Test string! (correct answer)"', function () {
            stringBuilder.append('Test');
            stringBuilder.append(' string!');
            let result = stringBuilder.toString();

            expect(result).to.be.equal('Test string!');
        });

        it('should throw error when try to add empty array', function () {
            let func = () => {
                stringBuilder.append([]);
            };

            expect(func).to.be.throw(TypeError);
        });

    });

    describe('prepend functionality', function () {
        it('should return "Test string! (correct answer)"', function () {
            stringBuilder.prepend(' string!');
            stringBuilder.prepend('Test');
            let result = stringBuilder.toString();

            expect(result).to.be.equal('Test string!');
        });
    });

    describe('insertAt functionality', function () {
        it('should return "Test insert string! (correct answer)"', function () {
            stringBuilder.append('Test');
            stringBuilder.append(' string!');
            stringBuilder.insertAt('insert ', 5);
            let result = stringBuilder.toString();

            expect(result).to.be.equal('Test insert string!');
        });

    });

    describe('remove functionality', function () {
        it('should return "Test insert string! (correct answer)"', function () {
            stringBuilder.append('Test');
            stringBuilder.append(' string!');
            stringBuilder.insertAt('insert ', 5);
            stringBuilder.remove(5, 7);
            let result = stringBuilder.toString();

            expect(result).to.be.equal('Test string!');
        });
    });
});