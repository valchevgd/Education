function solve() {
    let num = Number(document.getElementById('num').value);
    let inputArray = document.getElementById('arr').value;
    let array = JSON.parse(inputArray);
    let outputArray = [];

    for (let element of array){
        let include = element.includes(num);
        let index = element.indexOf(num);
        outputArray.push(`${include} -> ${index}`)
    }

    document.getElementById('result').textContent = outputArray.join(',');

}