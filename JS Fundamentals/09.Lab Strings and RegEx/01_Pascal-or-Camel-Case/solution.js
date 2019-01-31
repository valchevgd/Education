function solve() {
    let inputText = document.getElementById('str1').value;
    let outputCase = document.getElementById('str2').value;
    let resultElement = document.getElementById('result');
    let output = '';

    let outputText = inputText.toLowerCase()
        .split(' ')
        .filter(x => x !== '');

        for (let element of outputText) {
            output += element.replace(element[0], element[0].toUpperCase());
        }
    if (outputCase !== 'Camel Case' && outputCase !== 'Pascal Case'){
        output = 'Error!';
    } else if(outputCase === 'Camel Case'){
        output =  output.charAt(0).toLowerCase() + output.slice(1);
    }

    resultElement.innerHTML = output;
}