function solve() {
    let inputArray = document.getElementById('arr').value;
    let array = JSON.parse(inputArray);
    let outputArray = [];

    for (let element of array){
        let word = element.split('').reverse().join('');
        word = word.charAt(0).toUpperCase() + word.slice(1);
        outputArray.push(word);
    }

    document.getElementById('result').textContent = outputArray.join(' ');
}