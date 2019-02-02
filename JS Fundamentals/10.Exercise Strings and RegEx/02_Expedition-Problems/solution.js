function solve() {
    let string = document.getElementById('str').value;
    let text = document.getElementById('text').value;
    let resultElement = document.getElementById('result');

    let regExMsg = new RegExp(`(?<=${string})(.*)(?=${string})`);
    let cordinatRegEx = /(north|east).*?([0-9]{2}).*?,.*?([0-9]{6})/gi;
    let m;
    let northMsg = '';
    let eastMsg = '';


    while ((m = cordinatRegEx.exec(text)) !== null){

        if (m[1].toLowerCase() === 'north'){
            northMsg = `${m[2]}.${m[3]} N`;
        }else {
            eastMsg = `${m[2]}.${m[3]} E`;
        }
    }
    let msg = 'Message: ' + text.match(regExMsg)[0];

    let northP = document.createElement('p');
    northP.textContent = northMsg;
    resultElement.appendChild(northP);

    let eastP = document.createElement('p');
    eastP.textContent = eastMsg;
    resultElement.appendChild(eastP);

    let msgP = document.createElement('p');
    msgP.textContent = msg;
    resultElement.appendChild(msgP);

}