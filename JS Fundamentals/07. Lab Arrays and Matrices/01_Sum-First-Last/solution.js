function solve() {
    let inputArray = document.getElementById('arr').value;
    let array = JSON.parse(inputArray);
    let length = array.length;
    let resultElement = document.getElementById('result');

    for (let element in array){
        let pElement = document.createElement('p');
        pElement.textContent = `${element} -> ${array[element] * length}`
        resultElement.appendChild(pElement);
    }
}
