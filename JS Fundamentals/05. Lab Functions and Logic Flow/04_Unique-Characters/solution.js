function solve() {
    let string = document.getElementById('string').value;
    let uniqueChars = [];

    for (let i = 0; i < string.length; i++){
        if (!uniqueChars.includes(string[i]) || string[i] === ' '){
            uniqueChars.push(string[i]);
        }
    }

    let resultElement = document.getElementById('result');
    resultElement.innerHTML = uniqueChars.join('');
}