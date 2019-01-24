function getNext() {
    let number = document.getElementById('num').value;

    let result = hailStoneSeq(number);
    let resultElement = document.getElementById('result');
    resultElement.textContent = result;

    function hailStoneSeq(n) {
        let seq = `${n} `;

        while (n !== 1) {
            if (n % 2 === 0) n /= 2;
            else n = (n * 3) + 1;

            seq += `${n} `
        }

        return seq;
    }
}