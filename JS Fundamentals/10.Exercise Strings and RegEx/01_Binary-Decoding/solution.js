function solve() {
    let inputString = document.getElementById('str').value;
    let resultElement = document.getElementById('result');

    let sumOfElements = getSumOfElements(inputString);
    let newString = inputString.slice(sumOfElements);
    let finalString = newString.substring(0, newString.length - sumOfElements);
    let output = finalString
        .split(/([\d]{8})/)
        .filter((x) => x)
        .map((x) => fromBinaryToString(x))
        .filter((c) => /[A-Za-z ]+/g.test(c))
        .join('');
    resultElement.textContent = output;

    function getSumOfElements(array) {

        let number = array.split('')
            .filter(x => x === '1');

        let result;

        while (number.length > 1) {
            result = 0;
            for (let num of number) {
                result += Number(num);
            }

            number = result.toString().split('');
        }

        return result;
    }

    function fromBinaryToString(num) {
        let decimal = parseInt(num, 2);
        let char = String.fromCharCode(decimal);

        return char;
    }

}