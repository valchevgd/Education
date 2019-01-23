function solve() {
    let inputTemp = Number(document.getElementById('num1').value);
    let inputType = document.getElementById('type').value;
    let outputTemp = 0;
    let corectType = false;
    let result = '';
    let resultElement = document.getElementById('result');

    convertTemp(inputTemp, inputType);
    getResult(inputTemp, outputTemp);
    resultElement.innerHTML = result;

    function convertTemp(temp, type) {
        if (type.toLowerCase() === 'fahrenheit'){
            outputTemp = (((temp - 32) * 5) / 9);
            corectType = true;
        }else  if (type.toLowerCase() === 'celsius'){
            outputTemp = ((temp * 9) / 5) + 32;
            corectType = true;
        }
    }

    function getResult(inTemp, outTemp) {
        if (!corectType){
            result = 'Error!';
        } else {
            result = Math.round(outTemp).toString();
        }
    }


}