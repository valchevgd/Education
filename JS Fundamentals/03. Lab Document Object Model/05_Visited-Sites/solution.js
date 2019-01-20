function solve() {

    let softUni = document.getElementsByTagName('a')[0];
    let google = document.getElementsByTagName('a')[1];
    let youTube = document.getElementsByTagName('a')[2];
    let wikipedia = document.getElementsByTagName('a')[3];
    let gmail = document.getElementsByTagName('a')[4];
    let stakoverflow = document.getElementsByTagName('a')[5];

    softUni.addEventListener('click', () => {
        printValue(0)
    });
    google.addEventListener('click', () => {
        printValue(1)
    });
    youTube.addEventListener('click', () => {
        printValue(2)
    });
    wikipedia.addEventListener('click', () => {
        printValue(3)
    });
    gmail.addEventListener('click', () => {
        printValue(4)
    });
    stakoverflow.addEventListener('click', () => {
        printValue(5)
    });

    function printValue(num) {
        let span = document.getElementsByTagName('span')[num];
        let text = span.innerHTML;
        let visits = text.split(' ')[1];
        visits++;
        let newText = 'Visited: ' + visits +' times';

        span.innerHTML = newText;
    }
}