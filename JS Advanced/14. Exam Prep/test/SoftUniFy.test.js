let SoftUniFy = require('../02. Softunify/02.SoftUniFy').SoftUniFy;
let expect = require('chai').expect;

describe('SoftUniFy functionality', function () {

    let suf;

    beforeEach(function () {
        suf = new SoftUniFy();
    });

    describe('constructor', function () {
        it('should return empty object', function () {
            expect(suf.allSongs).to.deep.equal({});
        });
    });

    describe('downloadSong functionality', function () {
        it('should work correctly', function () {

            suf.downloadSong('Eminem', 'Sing for the moment', 'Sing, sing, sing');

            expect(suf.allSongs).to.deep.equal({
                "Eminem": {
                    "rate": 0,
                    "songs": [
                        "Sing for the moment - Sing, sing, sing"
                    ],
                    "votes": 0
                }
            });
        });

    });

    describe('playSong functionality', function () {
        it('should work correctly', function () {

            suf.downloadSong('Eminem', 'Sing for the moment', 'Sing, sing, sing');

            expect(suf.playSong('Sing for the moment')).to.be.equal("Eminem:\nSing for the moment - Sing, sing, sing\n");
        });

        it('should work correctly with wrong song', function () {

            suf.downloadSong('Eminem', 'Sing for the moment', 'Sing, sing, sing');

            expect(suf.playSong('Sing the moment'))
                .to.be.equal("You have not downloaded a Sing the moment song yet. Use SoftUniFy's function downloadSong() to change that!");
        });

        it('should work correctly with list of songs', function () {
            suf.downloadSong('Eminem', 'Sing for the moment', 'Sing, sing, sing');
            suf.downloadSong('2 Pac', 'California life', 'California...');
            suf.downloadSong('BSB', 'All I have', '.. to give you...');

            expect(suf.songsList).to.be.equal('Sing for the moment - Sing, sing, sing\n' +
                'California life - California...\n' +
                'All I have - .. to give you...');
        });
    });

    describe('rateArtist functionality', function () {
        it('should work correctly', function () {

            suf.downloadSong('Eminem', 'Sing for the moment', 'Sing, sing, sing');

            expect(suf.rateArtist('Eminem')).to.be.equal(0);
        });
    });



});