const rgbToHexColor = require('../06.RgbToHex').rgbToHexColor;
const expect = require('chai').expect;

describe('rgbToHexColors', function () {

    it('Take string first argument', function () {
        expect(rgbToHexColor('red', 231, 186))
            .to.be.undefined;
    });

    it('Take string second argument', function () {
        expect(rgbToHexColor(211, 'green', 101))
            .to.be.undefined;
    });

    it('Take string third argument', function () {
        expect(rgbToHexColor(201, 115, 'blue'))
            .to.be.undefined;
    });

    it('Take too big firs argument', function () {
        expect(rgbToHexColor(260, 133, 231))
            .to.be.undefined;
    });

    it('Take too big second argument', function () {
        expect(rgbToHexColor(211, 281, 231))
            .to.be.undefined;
    });

    it('Take too big third argument', function () {
        expect(rgbToHexColor(211, 133, 301))
            .to.be.undefined;
    });

    it('Take too small firs argument', function () {
        expect(rgbToHexColor(-56, 133, 231))
            .to.be.undefined;
    });

    it('Take too small second argument', function () {
        expect(rgbToHexColor(211, -1, 231))
            .to.be.undefined;
    });

    it('Take too small third argument', function () {
        expect(rgbToHexColor(211, -231, 301))
            .to.be.undefined;
    });

    it('Take float first argument', function () {
        expect(rgbToHexColor(23.5, 231, 186))
            .to.be.undefined;
    });

    it('Take float second argument', function () {
        expect(rgbToHexColor(211, 48.1, 101))
            .to.be.undefined;
    });

    it('Take float third argument', function () {
        expect(rgbToHexColor(201, 115, 213.2))
            .to.be.undefined;
    });

    it('Take correct arguments', function () {
        expect(rgbToHexColor(211,143,211))
            .to.be.equal('#D38FD3');
    });

    it('Take two arguments', function () {
        expect(rgbToHexColor(201, 115))
            .to.be.undefined;
    });

    it('Take only 0`s as arguments (black color)', function () {
        expect(rgbToHexColor(0,0,0))
            .to.be.equal('#000000');
    });

    it('Take only 255`s as arguments (white color)', function () {
        expect(rgbToHexColor(255,255,255))
            .to.be.equal('#FFFFFF');
    });

    it('Take float as argument', function () {
        expect(rgbToHexColor(201, 115, 3.14))
            .to.be.undefined;
    });

});