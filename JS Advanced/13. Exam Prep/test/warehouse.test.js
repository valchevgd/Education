let Warehouse = require('../02. Warehouse/warehouse').Warehouse;
let expect = require('chai').expect;

describe('warehouse functionality', function () {

    describe('constructor', function () {
        it('should trow a string with negative input', function () {
            let func = () => {
                let wh = new Warehouse(-10);
            };

            expect(func).to.be.throw("Invalid given warehouse space");

        });

        it('should trow a string with zero as input', function () {
            let func = () => {
                let wh = new Warehouse(0);
            };

            expect(func).to.be.throw('Invalid given warehouse space');

        });
    });

    describe('addProduct functionality', function () {

        let wh;

        beforeEach(function () {
            wh = new Warehouse(5);
        });

        it('to big quantity of new product', function () {
            let func = () => {
                wh.addProduct('Food', 'Bread', 6);
            };
            expect(func).to.be.throw('There is not enough space or the warehouse is already full');
        });

        it('working case', function () {
            expect(wh.addProduct('Food', 'Bread', 3)).to.deep.equal({Bread: 3})
        });

        it('with negative quantity ?!', function () {
            expect(wh.addProduct('Food', 'Bread', -3)).to.deep.equal({Bread: -3})
        });

        it('should throw TypeError', function () {
            let func = () => {
                wh.addProduct('Beer', 'Cola', 3);
            };


            expect(func).to.be.throw(TypeError);
        });

    });

    describe('orderProducts functionality', function () {
        let wh;

        beforeEach(function () {
            wh = new Warehouse(50);
        });

        it('working case with positive quantity', function () {

            wh.addProduct('Food', 'Bread', 3);
            wh.addProduct('Food', 'Apples', 10);
            wh.addProduct('Food', 'Rice', 8);

            expect(wh.orderProducts('Food')).to.deep.equal({ Apples: 10, Rice: 8, Bread: 3 })
        });

        it('should return empty object ', function () {

            wh.addProduct('Food', 'Bread', 3);

            expect(wh.orderProducts('Drink')).to.deep.equal({})
        });

        it('should return error', function () {

            wh.addProduct('Food', 'Bread', 3);
            wh.addProduct('Drink', 'Beer', 1);

            let func = () => {
                wh.orderProducts('Beer');
            };

            expect(func).to.be.throw(TypeError)
        });


    });

    describe('occupiedCapacity functionality', function () {

        let wh;

        beforeEach(function () {
            wh = new Warehouse(50);
        });


        it('should working correctly', function () {
            wh.addProduct('Food', 'Bread', 3);
            wh.addProduct('Food', 'Apples', 10);
            wh.addProduct('Food', 'Rice', 8);

            expect(wh.occupiedCapacity()).to.be.equal(21)
        });
    });

    describe('revision functionality', function () {
        let wh;

        beforeEach(function () {
            wh = new Warehouse(50);
        });

        it('should work correctly', function () {
            wh.addProduct('Food', 'Bread', 3);
            wh.addProduct('Food', 'Apples', 10);
            wh.addProduct('Drink', 'Cola', 8);

            expect(wh.revision()).to.be.equal("Product type - [Food]\n- Bread 3\n- Apples 10\nProduct type - [Drink]\n- Cola 8")
        });

        it('should work correctly with empty warehouse', function () {
            expect(wh.revision()).to.be.equal("The warehouse is empty")
        });


    });

    describe('scrapeAProduct functionality', function () {
        let wh;

        beforeEach(function () {
            wh = new Warehouse(50);
        });

        it('should work correctly', function () {
            wh.addProduct('Food', 'Bread', 3);
            wh.addProduct('Food', 'Bread', 10);


            expect(wh.scrapeAProduct('Bread', 8)).to.deep.equal({ Bread: 5 })
        });

        it('should throw error (missing product)', function () {
            wh.addProduct('Food', 'Bread', 3);
            wh.addProduct('Food', 'Bread', 10);

            let func = () => {
                wh.scrapeAProduct('bread', 8)
            };

            expect(func).to.be.throw('bread do not exists');
        });

        it('should return undefined', function () {
            wh.addProduct('Food', 'Bread', 3);
            wh.addProduct('Food', 'Bread', 10);

            let func = () => {
                wh.scrapeAProduct('Bread', 15)
            };

            expect(func).to.be.undefined;
        });
    })

});