function solve() {
    let inputArray = document.getElementById('arr').value;
    let array = JSON.parse(inputArray);
    let outputArray = [];

    for (let i = 0; i < array.length; i += 2){
        outputArray.push(array[i]);
    }

    document.getElementById('result').textContent = outputArray.join(' x ');
}