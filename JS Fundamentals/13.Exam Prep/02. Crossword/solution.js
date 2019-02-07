function solve() {
    let buttons = document.getElementsByTagName('button');
    let outputElement = document.querySelector('#output p');

    let filterButton = buttons[0];
    filterButton.addEventListener('click', filter);

    let sortButton = buttons[1];
    sortButton.addEventListener('click', sort);

    let rotateButton = buttons[2];
    rotateButton.addEventListener('click', rotate);

    let getButton = buttons[3];
    getButton.addEventListener('click', get);

    function filter() {
        let input = document.getElementById('input').value;
        let secondaryCommand = document.getElementById('filterSecondaryCmd').value;
        let position = parseInt(document.getElementById('filterPosition').value);
        let output = '';

        if (secondaryCommand === 'uppercase'){
            output = input.match(/[A-Z]/g);
        }
        if (secondaryCommand === 'lowercase'){
            output = input.match(/[a-z]/g);
        }
        if (secondaryCommand === 'nums'){
            output = input.match(/[0-9]/g);
        }

        let char = output[position - 1];

        outputElement.textContent += char;
    }

    function sort() {
        let input = document.getElementById('input').value;
        let secondaryCommand = document.getElementById('sortSecondaryCmd').value;
        let position = parseInt(document.getElementById('sortPosition').value);
        let output = '';

        if (secondaryCommand === 'A'){
            output = input.split('').sort().join('');
        }else {
            output = input.split('').sort().reverse().join('');
        }

        let char = output[position - 1];

        outputElement.textContent += char;
    }

    function rotate() {
        let input = document.getElementById('input').value;
        let rotationCount = parseInt(document.getElementById('rotateSecondaryCmd').value);
        let position = parseInt(document.getElementById('rotatePosition').value);
        let output = input.split('');

        for (let i = 0; i < rotationCount % input.length; i++){
            let lastChar = output.pop();
            output.unshift(lastChar);
            console.log(output);
        }


        let char = output[position - 1];

        outputElement.textContent += char;
    }

    function get() {
        let input = document.getElementById('input').value;
        let position = parseInt(document.getElementById('getPosition').value);

        let char = input[position - 1];

        outputElement.textContent += char;
    }
}