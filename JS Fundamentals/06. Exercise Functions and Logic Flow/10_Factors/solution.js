function solve() {
    let number = document.getElementById('num').value;
    let resultElement = document.getElementById('result');
    let result = [];

    for (let i = 1; i <= number; i++) {
        if (number % i === 0) {
            result.push(i);
        }
    }

    resultElement.textContent = result.join(' ');
}


