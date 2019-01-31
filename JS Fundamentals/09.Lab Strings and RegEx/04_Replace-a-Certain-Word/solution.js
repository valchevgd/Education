function solve() {
    let inputArray = JSON.parse(document.getElementById('arr').value);
    let newString = document.getElementById('str').value;
    let resultElement = document.getElementById('result');
    let oldString = inputArray[0].split(' ').filter(x => x !== '')[2];
    let regex =new RegExp(oldString, 'gi');

    for(let string of inputArray){
        string = string.replace(regex, newString);

        let pElement = document.createElement('p');
        pElement.textContent = string;
        resultElement.appendChild(pElement);
    }
}