function solve() {
    let firstNum = Number(document.getElementById('firstNumber').value);
    let secondNum = Number(document.getElementById('secondNumber').value);
    let firstString = document.getElementById('firstString').value;
    let secondString = document.getElementById('secondString').value;
    let thirdString = document.getElementById('thirdString').value;
    let resultElement = document.getElementById('result');

    for (let i = firstNum; i <= secondNum; i++ ){
        let pElement = document.createElement('p');
        if (i % 3 === 0 && i % 5 === 0){
            pElement.innerHTML = `${i} ${firstString}-${secondString}-${thirdString}`;
        }else if (i % 3 === 0){
            pElement.innerHTML = `${i} ${secondString}`;
        }else if (i % 5 === 0){
            pElement.innerHTML = `${i} ${thirdString}`;
        }else {
            pElement.innerHTML = i.toString();
        }
        resultElement.appendChild(pElement);
    }
}