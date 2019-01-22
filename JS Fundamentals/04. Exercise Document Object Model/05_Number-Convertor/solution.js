function solve() {
    let btn = document.getElementsByTagName('button')[0];

    let selectElement = document.getElementById('selectMenuTo');

    let clicks = 0;
    selectElement.addEventListener('click',() => {

        if (clicks === 0){
            let binaryTag = document.createElement('option');
            binaryTag.textContent = 'binary';
            binaryTag.setAttribute('value', 'binary');

            selectElement.appendChild(binaryTag);

            let hexTag = document.createElement('option');
            hexTag.textContent = 'hexadeicmal';
            hexTag.setAttribute('value', 'hexadeicmal');

            selectElement.appendChild(hexTag);

            clicks++;
            console.log(binaryTag);
        }


    });

    btn.addEventListener('click', () => {

        let input = document.getElementById('input').value;

        let output = selectElement.value;
        let result;
        if (output === 'binary'){
            result = input >>> 0;
        }else {
            result = parseInt(input, 10).toString(16).toUpperCase();
        }

        let resultElement = document.getElementById('result');
        resultElement.value = result.toString(2);

    });
}