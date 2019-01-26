function binarySearch() {
    let array = document.getElementById('arr').value;
    let number = document.getElementById('num').value;
    let index = '';
    let arrayOfNumbers = getArrayOfNumbers().split(', ');

    let outputElement = document.getElementById('result');

    for (let i = 0; i < arrayOfNumbers.length; i++) {
        if (arrayOfNumbers[i] === number) {
            index = i.toString();
            break
        }
    }

    if (index) {
        outputElement.textContent = `Found ${number} at index ${index}`
    } else {
        outputElement.textContent = `${number} is not in the array`
    }


    function getArrayOfNumbers() {
        let newArray = array.split('');

        let pop = newArray.pop();
        let shift = newArray.shift();

        return newArray.join('');
    }
}