function solve() {
    let inputArray = document.getElementById('arr').value;
    let array = JSON.parse(inputArray);

    array.sort((a,b) => a - b);
    let newArray = array.slice();
    newArray.sort();

    let firsDiv = document.createElement('div');
    firsDiv.textContent = array.join(', ');
    let secondDiv = document.createElement('div');
    secondDiv.textContent = newArray.join(', ');

    let resultElement = document.getElementById('result');
    resultElement.appendChild(firsDiv);
    resultElement.appendChild(secondDiv);
}