function solve() {
    let input = document.getElementById('str').value;
    let resultElement = document.getElementById('result');

    let outputText = '';
    let inputText = input.split(' ')
        .filter(x => x !== '');
    
    for (let element of inputText){
        if (Number(element)){
            outputText += String.fromCharCode(element);
        }else{
            let numbers = [];
            
            for (let i = 0; i < element.length; i++){
                numbers.push(element[i].charCodeAt(0));
            }

            let pElement = document.createElement('p');
            pElement.textContent = numbers.join(' ');
            resultElement.appendChild(pElement);
        }
    }

    let pElement = document.createElement('p');
    pElement.textContent = outputText;
    resultElement.appendChild(pElement);

}