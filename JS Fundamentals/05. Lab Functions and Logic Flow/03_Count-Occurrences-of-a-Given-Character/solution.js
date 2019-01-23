function solve() {
    let string = document.getElementById('string').value;
    let char = document.getElementById('character').value;
    let counter = 0;
    let result = '';
    let resultElement = document.getElementById('result');

    for (let i = 0; i < string.length; i++){
        if (string[i] === char){
            counter++
        }
    }

    if (counter % 2 === 0){
        result = `Count of ${char} is even.`
    }else {
        result = `Count of ${char} is odd.`
    }

    resultElement.innerHTML = result;
}
