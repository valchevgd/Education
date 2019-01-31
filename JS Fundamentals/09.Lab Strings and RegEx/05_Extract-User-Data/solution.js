function solve() {
    let inputArray = JSON.parse(document.getElementById('arr').value);
    let resultElement = document.getElementById('result');
    let regex = /^([A-Z][a-z]* [A-Z][a-z]*) (\+359 [0-9] [0-9]{3} [0-9]{3}|\+359-[0-9]-[0-9]{3}-[0-9]{3}) ([a-z0-9]+@[a-z]+\.[a-z]{2,3})$/;
    let match ;
    for (let input of inputArray){
        match = regex.exec(input);

        if (match){
            let firstP = document.createElement('p');
            firstP.textContent = 'Name: ' + match[1];
            resultElement.appendChild(firstP);
            let secondP = document.createElement('p');
            secondP.textContent = 'Phone Number: ' + match[2];
            resultElement.appendChild(secondP);
            let thirdP = document.createElement('p');
            thirdP.textContent = 'Email: ' + match[3];
            resultElement.appendChild(thirdP);
        }else {
            let pElement = document.createElement('p');
            pElement.textContent = 'Invalid data';
            resultElement.appendChild(pElement);
        }

        let pElement = document.createElement('p');
        pElement.textContent = '- - -';
        resultElement.appendChild(pElement);
    }
}

