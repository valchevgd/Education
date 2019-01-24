function leapYear() {
    let year = Number(document.getElementsByTagName('input')[0].value);
    let button = document.getElementsByTagName('button')[0];
    let result = '';

    button.addEventListener('click', () => {
        if ((Number(document.getElementsByTagName('input')[0].value) % 4 === 0) && (Number(document.getElementsByTagName('input')[0].value) % Number(document.getElementsByTagName('input')[0].value) !== 0 || year % 400 === 0)){
            result = 'Leap Year';
        }else {
            result = 'Not Leap Year';
        }

        let h2Element = document.querySelector('div#year h2');
        h2Element.textContent = result;
        let divElement = document.querySelector('div#year div');
        divElement.textContent = document.getElementsByTagName('input')[0].value;
        document.getElementsByTagName('input')[0].value = '';
    });
}