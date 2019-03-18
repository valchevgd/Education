let FilmStudio = require('../02. FilmStudio/filmStudio').FilmStudio;
let expect = require('chai').expect;

describe('FilmStudio functionality', function () {

    let fs;

    beforeEach(function () {
        fs = new FilmStudio('SoftUni');
    });

    describe(' makeMovie functionality', function () {

        it('should work correctly', function () {

            expect(fs.makeMovie('JSExam', ['one', 'two', 'three'])).to.deep.equal({
                    filmName: 'JSExam',
                    filmRoles:
                        [{role: 'one', actor: false},
                            {role: 'two', actor: false},
                            {role: 'three', actor: false}]
                }
            );

        });

        it('should work correctly', function () {
            fs.makeMovie('JSExam', ['one', 'two', 'three']);

            expect(fs.makeMovie('JSExam', ['one', 'two', 'three'])).to.deep.equal({
                    filmName: 'JSExam 2',
                    filmRoles:
                        [{role: 'one', actor: false},
                            {role: 'two', actor: false},
                            {role: 'three', actor: false}]
                }
            );

        });

        it('should work correctly (Throw :Invalid arguments count)', function () {

            let func = () => {
                fs.makeMovie('JSExam');
            };

            expect(func).to.be.throw('Invalid arguments count');

        });

        it('should work correctly (Throw :Invalid arguments) with wrong first param', function () {

            let func = () => {
                fs.makeMovie(6, []);
            };

            expect(func).to.be.throw('Invalid arguments');

        });

        it('should work correctly (Throw :Invalid arguments) with wrong second param', function () {

            let func = () => {
                fs.makeMovie('JS Exam', 'pesho');
            };

            expect(func).to.be.throw('Invalid arguments');

        });
    });

    describe('casting functionality', function () {
        it('should work correctly', function () {


            fs.makeMovie('JSExam', ['one', 'two']);


            expect(fs.casting('name', 'one')
            ).to.deep.equal('You got the job! Mr. name you are next one in the JSExam. Congratz!')
        });

        it('should work correctly', function () {


            fs.makeMovie('JSExam', ['one', 'two']);


            expect(fs.casting('name', 'six')
            ).to.deep.equal('name, we cannot find a six role...')
        });

        it('should work correctly', function () {

            expect(fs.casting('name', 'six')
            ).to.deep.equal('There are no films yet in SoftUni.')
        });
    });

    describe('lookForProducer functionality', function () {
        it('should work correctly', function () {

            let func = () => {
                fs.lookForProducer('JSExam')
            };
            expect(func).to.be.throw(Error, 'JSExam do not exist yet, but we need the money...')
        });

        it('should work correctly', function () {


            fs.makeMovie('JSExam', ['one', 'two']);


            expect(fs.lookForProducer('JSExam')).to.deep.equal('Film name: JSExam\n' +
                'Cast:\n' +
                'false as one\n' +
                'false as two\n')
        });
    })
});

