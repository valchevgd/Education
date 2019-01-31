function solve() {
    let inputString = document.getElementById('str').value;
    let number = Number(document.getElementById('num').value);
    let resultElement = document.getElementById('result');
    let outputResult = [];


    if (inputString.length % number !== 0){
        inputString += inputString.substr(0, number - (inputString.length % number));
    }

    for (let i = 0; i < inputString.length; i+= number){
        outputResult.push(inputString.substr(i, number));
    }

    resultElement.textContent = outputResult.join(' ');
}